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

INSERT INTO pages	(	name,		weight,	query,																																														prow,	ptable		) VALUES
					(	'Colums',	30,		'SELECT colums.id, colums.page, colums.coutput, colums.cname, colums.weight, colums.cmodify FROM colums LEFT JOIN pages ON colums.page=pages.name ORDER BY pages.weight, weight, id ASC',	'0',	'colums'	);
					
INSERT INTO colums	(	page,		cname,			weight,	coutput,	cmodify												) VALUES
					(	'Colums',	'Page',			5,		1,			'UPDATE colums SET page=:value WHERE id=:row'		),
					(	'Colums',	'Output Colum',	10,		2,			'UPDATE colums SET coutput=:value WHERE id=:row'	),
					(	'Colums',	'Colum Name',	15,		3,			'UPDATE colums SET cname=:value WHERE id=:row'		),
					(	'Colums',	'Weight',		20,		4,			'UPDATE colums SET weight=:value WHERE id=:row'		),
					(	'Colums',	'SQL',			25,		5,			'UPDATE colums SET cmodify=:value WHERE id=:row'	);
