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

CREATE TABLE heats (
	id SERIAL PRIMARY KEY,
	number INT UNIQUE,
	starttime timestamp
);

CREATE TYPE feildposition AS ENUM
	('red1', 'red2', 'red3',
	'blue1', 'blue2', 'blue3');

CREATE TABLE queueings (
	id SERIAL PRIMARY KEY,
	heat INT
		REFERENCES heats (number)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	team INT
		REFERENCES teams (number)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	position feildposition,
	UNIQUE (heat, position),
	UNIQUE (heat, team)
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
	heat INT,
	team INT,
	FOREIGN KEY (heat, team)
		REFERENCES queueings (heat, team)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	UNIQUE (heat, scout),
	UNIQUE (heat, team)
);

CREATE TABLE pages (
	id SERIAL PRIMARY KEY,
	name VARCHAR(255) UNIQUE,
	weight INT,
	query TEXT,
	prow INT,
	ptable VARCHAR(255)
);

CREATE TABLE colums (
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
		heats.id AS id,
		heats.number AS heat,
		heats.starttime as starttime,
		red1.team AS red1,
		red2.team AS red2,
		red3.team AS red3,
		blue1.team AS blue1,
		blue2.team AS blue2,
		blue3.team AS blue3
		
	FROM heats
		LEFT JOIN queueings red1 ON (
				heats.number=red1.heat
			AND
				red1.position='red1'
			)
		
		LEFT JOIN queueings red2 ON (
				heats.number=red2.heat
			AND
				red2.position='red2'
			)
		
		LEFT JOIN queueings red3 ON (
				heats.number=red3.heat
			AND
				red3.position='red3'
			)
		
		LEFT JOIN queueings blue1 ON (
				heats.number=blue1.heat
			AND
				blue1.position='blue1'
			)
		
		LEFT JOIN queueings blue2 ON (
				heats.number=blue2.heat
			AND
				blue2.position='blue2'
			)
		
		LEFT JOIN queueings blue3 ON (
				heats.number=blue3.heat
			AND
				blue3.position='blue3'
			)

	ORDER BY heat ASC;

CREATE FUNCTION queueingupsert(INT, feildposition, INT) RETURNS VOID AS
	$$
		INSERT INTO queueings(heat, position)
			SELECT $1, $2
			WHERE NOT EXISTS (
				SELECT 1 FROM queueings WHERE heat=$1 AND position=$2
			);
		UPDATE queueings SET team=$3 WHERE heat=$1 AND position=$2;
	$$
	LANGUAGE sql VOLATILE;

CREATE FUNCTION queueingsinsert(INT, timestamp, INT, INT, INT, INT, INT, INT) RETURNS VOID AS
	$$
		INSERT INTO heats(number, starttime) VALUES ($1, $2);
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
		UPDATE heats SET number=$2, starttime=$3 WHERE id=$1;
		SELECT queueingupsert($2, 'red1', $4);
		SELECT queueingupsert($2, 'red2', $5);
		SELECT queueingupsert($2, 'red3', $6);
		SELECT queueingupsert($2, 'blue1', $7);
		SELECT queueingupsert($2, 'blue2', $8);
		SELECT queueingupsert($2, 'blue3', $9);
		
	$$
	LANGUAGE sql VOLATILE;

CREATE RULE update AS ON UPDATE TO matchsheet DO INSTEAD
	SELECT queueingsupdate(NEW.id, NEW.heat, NEW.starttime, NEW.red1, NEW.red2, NEW.red3, NEW.blue1, NEW.blue2, NEW.blue3);

CREATE RULE insert AS ON INSERT TO matchsheet DO INSTEAD
	SELECT queueingsinsert(NEW.heat, NEW.starttime, NEW.red1, NEW.red2, NEW.red3, NEW.blue1, NEW.blue2, NEW.blue3);

CREATE RULE delete AS ON DELETE TO matchsheet DO INSTEAD
	DELETE FROM heats WHERE number=OLD.heat;
