/* FRCS
Copyright (C) 2014 Jon Penn

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>. */

CREATE TABLE teams (
	id SERIAL PRIMARY KEY,
	number INT UNIQUE,
	name VARCHAR(255) UNIQUE,
	robotname VARCHAR(255) UNIQUE,
	type VARCHAR(255),
	imageid int
);

CREATE TABLE matches (
	id SERIAL PRIMARY KEY,
	number INT UNIQUE,
	starttime timestamp
);

CREATE TYPE feildposition AS ENUM
	('red1', 'red2', 'red3',
	'blue1', 'blue2', 'blue3');

CREATE TABLE queueings (
	id SERIAL PRIMARY KEY,
	match INT
		REFERENCES matches (number)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	team INT
		REFERENCES teams (number)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	position feildposition,
	UNIQUE (match, position),
	UNIQUE (match, team)
);

CREATE TABLE scouts (
	id SERIAL PRIMARY KEY,
	name VARCHAR(255) UNIQUE,
	password VARCHAR(255)
);

CREATE TABLE sheets (
	id SERIAL PRIMARY KEY,
	scout VARCHAR(255)
		REFERENCES scouts (name)
		ON UPDATE CASCADE
		ON DELETE SET NULL,
	match INT,
	team INT,
	FOREIGN KEY (match, team)
		REFERENCES queueings (match, team)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	UNIQUE (match, scout),
	UNIQUE (match, team)
);

CREATE TABLE pages (
	id SERIAL PRIMARY KEY,
	name VARCHAR(255) UNIQUE,
	weight INT,
	query TEXT,
	prow INT,
	ptable VARCHAR(255)
);

CREATE TABLE columns (
	id SERIAL PRIMARY KEY,
	page VARCHAR(255)
		REFERENCES pages (name)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	coutput INT,
	cname VARCHAR(255),
	weight INT,
	cmodify TEXT
);

CREATE VIEW matchsheet AS
	SELECT
		matches.id AS id,
		matches.number AS match,
		matches.starttime as starttime,
		red1.team AS red1,
		red2.team AS red2,
		red3.team AS red3,
		blue1.team AS blue1,
		blue2.team AS blue2,
		blue3.team AS blue3
		
	FROM matches
		LEFT JOIN queueings red1 ON (
				matches.number=red1.match
			AND
				red1.position='red1'
			)
		
		LEFT JOIN queueings red2 ON (
				matches.number=red2.match
			AND
				red2.position='red2'
			)
		
		LEFT JOIN queueings red3 ON (
				matches.number=red3.match
			AND
				red3.position='red3'
			)
		
		LEFT JOIN queueings blue1 ON (
				matches.number=blue1.match
			AND
				blue1.position='blue1'
			)
		
		LEFT JOIN queueings blue2 ON (
				matches.number=blue2.match
			AND
				blue2.position='blue2'
			)
		
		LEFT JOIN queueings blue3 ON (
				matches.number=blue3.match
			AND
				blue3.position='blue3'
			)

	ORDER BY match ASC;

CREATE FUNCTION queueingupsert(INT, feildposition, INT) RETURNS VOID AS
	$$
		INSERT INTO queueings(match, position)
			SELECT $1, $2
			WHERE NOT EXISTS (
				SELECT 1 FROM queueings WHERE match=$1 AND position=$2
			) AND
			$1 IS NOT NULL AND
			$2 IS NOT NULL AND
			$3 IS NOT NULL;
		UPDATE queueings SET team=$3 WHERE match=$1 AND position=$2 AND
			$1 IS NOT NULL AND
			$2 IS NOT NULL AND
			$3 IS NOT NULL;
		DELETE FROM queueings WHERE match=$1 AND position=$2 AND $3 IS NULL;
			
	$$
	LANGUAGE sql VOLATILE;

CREATE FUNCTION queueingsinsert(INT, timestamp, INT, INT, INT, INT, INT, INT) RETURNS VOID AS
	$$
		INSERT INTO matches(number, starttime) VALUES ($1, $2);
		SELECT queueingupsert($1, 'red1', $3);
		SELECT queueingupsert($1, 'red2', $4);
		SELECT queueingupsert($1, 'red3', $5);
		SELECT queueingupsert($1, 'blue1', $6);
		SELECT queueingupsert($1, 'blue2', $7);
		SELECT queueingupsert($1, 'blue3', $8);
		
	$$
	LANGUAGE sql VOLATILE;

CREATE FUNCTION queueingsupdate(INT, INT, timestamp, INT, INT, INT, INT, INT, INT) RETURNS VOID AS
	$$
		DELETE FROM queueings WHERE id IN (
			SELECT queueings.id FROM queueings
				LEFT JOIN matches ON queueings.match=matches.number
				WHERE matches.id=$1
			) AND $2 IS NULL;
		UPDATE matches SET number=$2, starttime=$3 WHERE id=$1;
		SELECT queueingupsert($2, 'red1', $4);
		SELECT queueingupsert($2, 'red2', $5);
		SELECT queueingupsert($2, 'red3', $6);
		SELECT queueingupsert($2, 'blue1', $7);
		SELECT queueingupsert($2, 'blue2', $8);
		SELECT queueingupsert($2, 'blue3', $9);
		
	$$
	LANGUAGE sql VOLATILE;

CREATE RULE update AS ON UPDATE TO matchsheet DO INSTEAD
	SELECT queueingsupdate(NEW.id, NEW.match, NEW.starttime, NEW.red1, NEW.red2, NEW.red3, NEW.blue1, NEW.blue2, NEW.blue3);

CREATE RULE insert AS ON INSERT TO matchsheet DO INSTEAD
	SELECT queueingsinsert(NEW.match, NEW.starttime, NEW.red1, NEW.red2, NEW.red3, NEW.blue1, NEW.blue2, NEW.blue3);

CREATE RULE delete AS ON DELETE TO matchsheet DO INSTEAD
	DELETE FROM matches WHERE number=OLD.match;

CREATE SEQUENCE teamnamedup;
