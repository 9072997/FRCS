#!/usr/bin/env php
<?php
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
	
	require_once(dirname(__FILE__) . '/../../includes/db.inc.php');
	
	db0('INSERT INTO columns(page, coutput, cname, weight, cmodify) VALUES (\'Sheets\', 18, \'Score\', 1000, \'NULL\')');
	db0('UPDATE pages SET query=\'SELECT id, scout, match, team, autonomusmove, startedwithball, autonomusball, autonomusdeflected, teleophighfails, teleophighballs, teleoplowballs, trussfails, trusstoground, trusstoalience, passes, teleopdeflected, nontechnicalfouls, technicalfouls, score FROM sheetstats\' WHERE ptable=\'sheets\' AND query=\'SELECT id, scout, match, team, autonomusmove, startedwithball, autonomusball, autonomusdeflected, teleophighfails, teleophighballs, teleoplowballs, trussfails, trusstoground, trusstoalience, passes, teleopdeflected, nontechnicalfouls, technicalfouls FROM sheets\'');
	db0('DELETE FROM pages WHERE ptable=\'sheetstats\' AND query=\'SELECT id, scout, match, team, autonomusmove, startedwithball, autonomusball, autonomusdeflected, teleophighfails, teleophighballs, teleoplowballs, trussfails, trusstoground, trusstoalience, passes, teleopdeflected, nontechnicalfouls, technicalfouls, score FROM sheetstats\'');
?>
