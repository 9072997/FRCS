----------------------------------------
-- THIS FILE HAS NOT YET BEEN UPDATED --
----------------------------------------

SELECT
	heats.number AS heat,
	heats.id AS heatid,
	
	red1.team AS red1,
	red1.id AS red1id,
	
	red2.team AS red2,
	red2.id AS red2id,
	
	red3.team AS red3,
	red3.id AS red3id,
	
	blue1.team AS blue1,
	blue1.id AS blue1id,
	
	blue2.team AS blue2,
	blue2.id AS blue2id,
	
	blue3.team AS blue3,
	blue3.id AS blue3id
	
FROM heats
	LEFT JOIN queueings red1 ON (
			heats.number=red1.heat
		AND
			red1.position='red1'
		)
	
	LEFT JOIN queueings red2 ON (
			heats.number=red2.heat
		AND
			red2.position='red2'
		)
	
	LEFT JOIN queueings red3 ON (
			heats.number=red3.heat
		AND
			red3.position='red3'
		)
	
	LEFT JOIN queueings blue1 ON (
			heats.number=blue1.heat
		AND
			blue1.position='blue1'
		)
	
	LEFT JOIN queueings blue2 ON (
			heats.number=blue2.heat
		AND
			blue2.position='blue2'
		)
	
	LEFT JOIN queueings blue3 ON (
			heats.number=blue3.heat
		AND
			blue3.position='blue3'
		)

ORDER BY heat ASC;

------------------------------------------------------------------------

INSERT INTO pages	(	name,		prow,	ptable,		query		) VALUES
					(	'heats',	1,		'heats',	'[ABOVE]'	);

INSERT INTO colums	(	page,		coutput,	cname,			ctable,			ccolum,		crow	) VALUES
					(	'heats',	0,			'Heat Number',	'heats',		'number',	1		),
					(	'heats',	2,			'Red 1',		'queueings',	'team',		3		),
					(	'heats',	4,			'Red 2',		'queueings',	'team',		5		),
					(	'heats',	6,			'Red 3',		'queueings',	'team',		7		),
					(	'heats',	8,			'Blue 1',		'queueings',	'team',		9		),
					(	'heats',	10,			'Blue 2',		'queueings',	'team',		11		),
					(	'heats',	12,			'Blue 3',		'queueings',	'team',		13		);
