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
	
	if(file_exists('/tmp/frcDbTeams.json') && time() - filemtime('/tmp/frcDbTeams.json') < 86400) { // 86400 seconds = 24 hours
		echo "Cache Hit\n";
		$json = file_get_contents('/tmp/frcDbTeams.json');
	} else {
		echo "Cache Miss\n";
		$json = file_get_contents('http://www.frcdb.net/teams.json');
		file_put_contents('/tmp/frcDbTeams.json', $json);
	}
	$teams = json_decode($json);
	foreach($teams as $team) {
		db0('INSERT INTO teams(number, name) SELECT ?, ? WHERE NOT EXISTS (SELECT 1 FROM teams WHERE number=? OR name=?)',
								$team->number,
								$team->nickname,
								$team->number,
								$team->nickname);
		db0('INSERT INTO teams(number, name) SELECT ?, (? || \' DUP \' || CAST(NEXTVAL(\'teamnamedup\') AS TEXT)) WHERE NOT EXISTS (SELECT 1 FROM teams WHERE number=?)',
								$team->number,
								$team->nickname,
								$team->number);
		db0('UPDATE teams SET name=? WHERE number=? AND NOT EXISTS (SELECT 1 FROM teams WHERE name=?)',
								$team->nickname,
								$team->number,
								$team->nickname);
		db0('UPDATE teams SET name=(? || \' DUP \' || CAST(NEXTVAL(\'teamnamedup\') AS TEXT)) WHERE number=? AND name IS NULL',
								$team->nickname,
								$team->number);
	}
	
?>
