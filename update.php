<?php
	ini_set('session.use_only_cookies',0);
	session_start();
	$_SESSION['password'] = $_POST['password'];
	
	require_once('db.inc.php');
	if(db1('SELECT EXISTS(SELECT 1 FROM passwords WHERE password=?) as match;', $_POST['password'])->match) {
		if(isset($_POST['table'])) {
			$table = $_POST['table'];
			if(isset($_POST['row'])) {
				$row =  $_POST['row'];
				// DELETE
				if(db0('DELETE FROM ' . preg_replace('/[^a-z\d]+/i', '', $table) . ' WHERE id=?', $row) === false) {
					http_response_code(500); // DB Error
				}
			} else {
				// NEW
				if(db0('INSERT INTO ' . preg_replace('/[^a-z\d]+/i', '', $table) . ' DEFAULT VALUES') === false) {
					http_response_code(500); // DB Error
				}
			}
		} else {
			if(isset($_POST['row'])) {
				$row =  $_POST['row'];
				// UPDATE
				$colum =  $_POST['colum'];
				$sql = db1('SELECT cupdate FROM colums WHERE id=?', $colum)->cupdate;
				var_dump($colum);
				if(isset($_POST['value'])) {
					$value =  $_POST['value'];
					if(!isset($dbQueries[$sql])) {
						$dbQueries[$sql] = $dbObject->prepare($sql);
					}
					$dbQueries[$sql]->bindValue(':row', $row);
					$dbQueries[$sql]->bindValue(':value', $value);
					if($dbQueries[$sql]->execute() === false) {
						http_response_code(500); // DB Error
					}
				} else {
					$sql = str_replace(':value', 'NULL', $sql);
					if(!isset($dbQueries[$sql])) {
						$dbQueries[$sql] = $dbObject->prepare($sql);
					}
					$dbQueries[$sql]->bindValue(':row', $row);
					if($dbQueries[$sql]->execute() === false) {
						http_response_code(500); // DB Error
					}
				}
			} else {
				if(isset($_POST['page'])) {
					// INSERT
					$page =  $_POST['page'];
					$sql = db1('SELECT cinsert FROM colums WHERE WHERE id=?', $colum)->cinsert;
					
					if(isset($_POST['value'])) {
						$value =  $_POST['value'];
						if(!isset($dbQueries[$sql])) {
							$dbQueries[$sql] = $dbObject->prepare($sql);
						}
						$dbQueries[$sql]->bindValue(':value', $value);
						if($dbQueries[$sql]->execute() === false) {
							http_response_code(500); // DB Error
						}
					} else {
						$sql = str_replace(':value', 'NULL', $sql);
						if(!isset($dbQueries[$sql])) {
							$dbQueries[$sql] = $dbObject->prepare($sql);
						}
						if($dbQueries[$sql]->execute() === false) {
							http_response_code(500); // DB Error
						}
					}
				}
			}
		}
	} else {
		http_response_code(403); // FORBIDEN
	}
?>
