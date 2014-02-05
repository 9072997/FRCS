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

INSERT INTO pages	(	name,		query,																	prow,	ptable		) VALUES
					(	'Colums',	'SELECT id, page, cname, coutput, crow, cinsert, cupdate FROM colums',	'0',	'colums'	);
					
INSERT INTO colums	(	page,		cname,			coutput,	crow,	cinsert,										cupdate											) VALUES
					(	'Colums',	'page',			1,			0,		'INSERT INTO colums(page) VALUES (:value)',		'UPDATE colums SET page=:value WHERE id=:row'	),
					(	'Colums',	'Name',			2,			0,		'INSERT INTO colums(cname) VALUES (:value)',	'UPDATE colums SET cname=:value WHERE id=:row'	),
					(	'Colums',	'Output Colum',	3,			0,		'INSERT INTO colums(coutput) VALUES (:value)',	'UPDATE colums SET coutput=:value WHERE id=:row'	),
					(	'Colums',	'Index Colum',	4,			0,		'INSERT INTO colums(crow) VALUES (:value)',		'UPDATE colums SET crow=:value WHERE id=:row'	),
					(	'Colums',	'Insert SQL',	5,			0,		'INSERT INTO colums(cinsert) VALUES (:value)',	'UPDATE colums SET cinsert=:value WHERE id=:row'	),
					(	'Colums',	'Update SQL',	6,			0,		'INSERT INTO colums(cupdate) VALUES (:value)',	'UPDATE colums SET cupdate=:value WHERE id=:row'	);
