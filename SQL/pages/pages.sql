INSERT INTO pages	(	name,		query,												prow,	ptable	) VALUES
					(	'Pages',	'SELECT id, name, query, prow, ptable FROM pages',	'0',	'pages'	);
					
INSERT INTO colums	(	page,		cname,		coutput,	crow,	cinsert,										cupdate											) VALUES
					(	'Pages',	'Name',		1,			0,		'INSERT INTO pages(name) VALUES (:value)',		'UPDATE pages SET name=:value WHERE id=:row'	),
					(	'Pages',	'Query',	2,			0,		'INSERT INTO pages(query) VALUES (:value)',		'UPDATE pages SET query=:value WHERE id=:row'	),
					(	'Pages',	'pRow',		3,			0,		'INSERT INTO pages(prow) VALUES (:value)',		'UPDATE pages SET prow=:value WHERE id=:row'	),
					(	'Pages',	'pTable',	4,			0,		'INSERT INTO pages(ptable) VALUES (:value)',	'UPDATE pages SET ptable=:value WHERE id=:row'	);
