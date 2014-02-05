<?php
	$dbServer = 'localhost';
	$dbUser = 'postgres';
	$dbPassword = 'CHANGEME';
	$dbName = 'frc';
	
	$dbObject = new PDO("pgsql:host=$dbServer;dbname=$dbName", $dbUser, $dbPassword);
	
	function dbQuery($sql, $prams) { // caches perpared statements
		global $dbObject;
		global $dbQueries;
		if(!isset($dbQueries[$sql])) {
			$dbQueries[$sql] = $dbObject->prepare($sql);
		}
		if($dbQueries[$sql]->execute($prams)) {
			return $dbQueries[$sql];
		} else {
			return false;
		}
	}
	
	function db($sql) {
		$prams = func_get_args();
		array_shift($prams);
		$query = dbQuery($sql, $prams);
		if($query === false) {
			return false;
		} else {
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
	}
	
	function dba($sql) {
		$prams = func_get_args();
		array_shift($prams);
		$query = dbQuery($sql, $prams);
		if($query === false) {
			return false;
		} else {
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
	}
	
	function db0($sql) {
		$prams = func_get_args();
		array_shift($prams);
		return dbQuery($sql, $prams);
	}
	
	function db1($sql) {
		$prams = func_get_args();
		array_shift($prams);
		$query = dbQuery($sql, $prams);
		if($query === false) {
			return false;
		} else {
			return $query->fetchObject();
		}
	}
	
	function dba1($sql) {
		$prams = func_get_args();
		array_shift($prams);
		$query = dbQuery($sql, $prams);
		if($query === false) {
			return false;
		} else {
			return $query->fetch(PDO::FETCH_ASSOC);
		}
	}
		
	function db4js($sql) { // don't forget to ORDER BY somthing
		$prams = func_get_args();
		array_shift($prams);
		$query = dbQuery($sql, $prams);
		if($query === false) {
			return false;
		} else {
			return json_encode($query->fetchAll(PDO::FETCH_NUM));
		}
	}
?>
