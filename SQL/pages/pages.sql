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

INSERT INTO pages	(	name,		weight,	query,																				prow,	ptable	) VALUES
					(	'Pages',	25,		'SELECT id, name, weight, query, prow, ptable FROM pages ORDER BY weight, id ASC',	'0',	'pages'	);
					
INSERT INTO colums	(	page,		cname,		weight,	coutput,	cmodify											) VALUES
					(	'Pages',	'Name',		5,			1,			'UPDATE pages SET name=:value WHERE id=:row'	),
					(	'Pages',	'Weight',	10,			2,			'UPDATE pages SET weight=:value WHERE id=:row'	),
					(	'Pages',	'Query',	15,			3,			'UPDATE pages SET query=:value WHERE id=:row'	),
					(	'Pages',	'pRow',		20,			4,			'UPDATE pages SET prow=:value WHERE id=:row'	),
					(	'Pages',	'pTable',	25,			5,			'UPDATE pages SET ptable=:value WHERE id=:row'	);
