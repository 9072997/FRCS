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
	
	ini_set('session.use_only_cookies',0);
	session_start();
?><!DOCTYPE html>
<html>
	<head>
		<title>Matches</title>
	</head>
	
	<body>
		<div>
			<a href="../tableEditor/page.php?<?php echo htmlspecialchars(SID); ?>">Table Editor</a>
			<a href="../images">Image Manager</a>
			<a href="sheets.php">Sheets</a>
			Matches
		</div>
		<table border="1">
			<tr>
				<th>Match</th>
				<th>Start</th>
				<th>Red 1</th>
				<th>Red 2</th>
				<th>Red 3</th>
				<th>Blue 1</th>
				<th>Blue 2</th>
				<th>Blue 3</th>
			</tr>
			<?php
				$matches = db('SELECT number, starttime, red1, red2, red3, blue1, blue2, blue3 FROM matchesview');
				foreach($matches as $match) {
					echo '<tr>';
						echo '<td><a href="report.php?match=' . $match->number . '">' . $match->number . '</a></td>';
						echo '<td>' . $match->starttime . '</td>';
						echo '<td>' . $match->red1 . '</td>';
						echo '<td>' . $match->red2 . '</td>';
						echo '<td>' . $match->red3 . '</td>';
						echo '<td>' . $match->blue1 . '</td>';
						echo '<td>' . $match->blue2 . '</td>';
						echo '<td>' . $match->blue3 . '</td>';
					echo '</tr>';
				}
			?>
		</table>
	</body>
</html>
