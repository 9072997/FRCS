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
		ON DELETE SET NULL,
	team INT
		REFERENCES teams (number)
		ON UPDATE CASCADE
		ON DELETE SET NULL,
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
		ON DELETE SET NULL,
	UNIQUE (heat, scout),
	UNIQUE (heat, team)
);

CREATE TABLE pages (
	id SERIAL PRIMARY KEY,
	name VARCHAR(255) UNIQUE,
	query TEXT,
	prow INT,
	ptable VARCHAR(255)
);

CREATE TABLE colums (
	id SERIAL PRIMARY KEY,
	page VARCHAR(255)
		REFERENCES pages (name)
		ON UPDATE CASCADE
		ON DELETE SET NULL,
	coutput INT,
	cname VARCHAR(255),
	cmodify TEXT
);
