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

INSERT INTO pages	(	name,		query,																prow,	ptable	) VALUES
					(	'Pages',	'SELECT id, name, query, prow, ptable FROM pages ORDER BY id ASC',	'0',	'pages'	);
					
INSERT INTO colums	(	page,		cname,		coutput,	cmodify										) VALUES
					(	'Pages',	'Name',		1,			'INSERT INTO pages(name) SELECT :value WHERE NOT EXISTS (SELECT 1 FROM pages WHERE id=:row); UPDATE pages SET name=:value WHERE id=:row'		),
					(	'Pages',	'Query',	2,			'INSERT INTO pages(query) SELECT :value WHERE NOT EXISTS (SELECT 1 FROM pages WHERE id=:row); UPDATE pages SET query=:value WHERE id=:row'		),
					(	'Pages',	'pRow',		3,			'INSERT INTO pages(prow) SELECT :value WHERE NOT EXISTS (SELECT 1 FROM pages WHERE id=:row); UPDATE pages SET prow=:value WHERE id=:row'		),
					(	'Pages',	'pTable',	4,			'INSERT INTO pages(ptable) SELECT :value WHERE NOT EXISTS (SELECT 1 FROM pages WHERE id=:row); UPDATE pages SET ptable=:value WHERE id=:row'	);
