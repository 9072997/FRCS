INSERT INTO pages	(	name,		prow,	ptable,		query		) VALUES
					(	'colums',	0,		'colums',	'SELECT  id, page, coutput, cname, ctable, ccolum, crow FROM colums'	);

INSERT INTO colums	(	page,		coutput,	cname,			ctable,			ccolum,		crow	) VALUES
					(	'colums',	1,			'Page',			'colums',		'page',		0		),
					(	'colums',	3,			'Colum Name',	'colums',		'cname',	0		),
					(	'colums',	2,			'Output Colum',	'colums',		'coutput',	0		),
					(	'colums',	6,			'Index Colum',	'colums',		'crow',		0		),
					(	'colums',	4,			'Colum Table',	'colums',		'ctable',	0		),
					(	'colums',	5,			'Colum Colum',	'colums',		'ccolum',	0		);
