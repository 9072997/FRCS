INSERT INTO pages	(	name,		query,																	prow,	ptable		) VALUES
					(	'Colums',	'SELECT id, page, cname, coutput, crow, cinsert, cupdate FROM colums',	'0',	'colums'	);
					
INSERT INTO colums	(	page,		cname,			coutput,	crow,	cinsert,										cupdate											) VALUES
					(	'Colums',	'page',			1,			0,		'INSERT INTO colums(page) VALUES (:value)',		'UPDATE colums SET page=:value WHERE id=:row'	),
					(	'Colums',	'Name',			2,			0,		'INSERT INTO colums(cname) VALUES (:value)',	'UPDATE colums SET cname=:value WHERE id=:row'	),
					(	'Colums',	'Output Colum',	3,			0,		'INSERT INTO colums(coutput) VALUES (:value)',	'UPDATE colums SET coutput=:value WHERE id=:row'	),
					(	'Colums',	'Index Colum',	4,			0,		'INSERT INTO colums(crow) VALUES (:value)',		'UPDATE colums SET crow=:value WHERE id=:row'	),
					(	'Colums',	'Insert SQL',	5,			0,		'INSERT INTO colums(cinsert) VALUES (:value)',	'UPDATE colums SET cinsert=:value WHERE id=:row'	),
					(	'Colums',	'Update SQL',	6,			0,		'INSERT INTO colums(cupdate) VALUES (:value)',	'UPDATE colums SET cupdate=:value WHERE id=:row'	);
