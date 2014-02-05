INSERT INTO pages	(	name,		prow,	ptable,		query		) VALUES
					(	'pages',	0,		'pages',	'SELECT id, name, query, prow, ptable FROM pages'	);

INSERT INTO colums	(	page,		coutput,	cname,			ctable,			ccolum,		crow	) VALUES
					(	'pages',	1,			'Page',			'pages',		'name',		0		),
					(	'pages',	2,			'Query',		'pages',		'query',	0		),
					(	'pages',	3,			'pRow',			'pages',		'prow',		0		),
					(	'pages',	4,			'pTable',		'pages',		'ptable',	0		);
