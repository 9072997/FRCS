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
	require_once(dirname(__FILE__) . '/../../includes/array_column.inc.php'); // just incase our version of php dosent include this function
	
	$tables = dba('SELECT table_name from INFORMATION_SCHEMA.TABLES WHERE table_schema=\'public\' ORDER BY table_name ASC');
	$tableNames = array_column($tables, 'table_name');
	$tableWeight = 1000;
	foreach($tableNames as $tableName) {
		$tableWeight += 5;
		if(db1('SELECT NOT EXISTS(SELECT 1 FROM pages WHERE ptable=?) as match', $tableName)->match) {
			$colums = dba('SELECT column_name, ordinal_position from INFORMATION_SCHEMA.COLUMNS WHERE table_schema=\'public\' AND table_name=? ORDER BY ordinal_position ASC', $tableName);
			
			$columNames = array_column($colums, 'column_name');
			$csvColumNames = rtrim(implode(', ', $columNames), ', ');
			$humanName = ucfirst($tableName);
			db0('INSERT INTO pages (name, weight, query, prow, ptable) VALUES(?, ?, ?, ?, ?)',
									$humanName,
									$tableWeight,
									'SELECT ' . $csvColumNames . ' FROM ' . $tableName, // notice no auto order by clause
									0, // this is an assumption that colum 1 is unique
									$tableName);
			
			foreach($colums as $colum) {
				if($colum['column_name'] != 'id') {
					db0('INSERT INTO colums(page, cname, weight, coutput, cmodify) VALUES(?, ?, ?, ?, ?)',
											$humanName,
											ucfirst($colum['column_name']),
											$colum['ordinal_position'] * 5,
											$colum['ordinal_position'] - 1,
											'UPDATE ' . $tableName . ' SET ' . $colum['column_name'] . '=:value WHERE id=:row');
				}
			}
		}
	}
	
?>
