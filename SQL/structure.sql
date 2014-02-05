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
	name VARCHAR(255) UNIQUE
);

CREATE TABLE sheets (
	id SERIAL PRIMARY KEY,
	scout VARCHAR(255)
		REFERENCES scouts (name)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
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
	ctable VARCHAR(255),
	ccolum VARCHAR(255),
	crow INT
);

CREATE TABLE passwords (
	id SERIAL PRIMARY KEY,
	scout VARCHAR(255)
		REFERENCES scouts (name)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	password VARCHAR(32)
);
