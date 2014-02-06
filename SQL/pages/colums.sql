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
					(	'Colums',	'SELECT id, page, coutput, cname, cmodify FROM colums ORDER BY id ASC',	'0',	'colums'	);
					
INSERT INTO colums	(	page,		cname,			coutput,	cmodify												) VALUES
					(	'Colums',	'Page',			1,			'UPDATE colums SET page=:value WHERE id=:row'		),
					(	'Colums',	'Output Colum',	2,			'UPDATE colums SET coutput=:value WHERE id=:row'	),
					(	'Colums',	'Colum Name',	3,			'UPDATE colums SET cname=:value WHERE id=:row'		),
					(	'Colums',	'SQL',			4,			'UPDATE colums SET cmodify=:value WHERE id=:row'	);
