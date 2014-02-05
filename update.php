<?php
	ini_set('session.use_only_cookies',0);
	session_start();
	$_SESSION['password'] = $_POST['password'];
	
	require_once('db.inc.php');
	if(db1('SELECT EXISTS(SELECT 1 FROM passwords WHERE password=?) as match;', $_POST['password'])->match) {
		if(isset($_POST['table'])) {
			$table = $_POST['table'];
			if(isset($_POST['colum'])) {
				$colum = $_POST['colum'];
				if(isset($_POST['row'])) {
					$row =  $_POST['row'];
					// UPDATE
					if(isset($_POST['value'])) {
						$value =  $_POST['value'];
						if(db0('UPDATE ' . preg_replace('/[^a-z\d]+/i', '', $table) . ' SET ' . preg_replace('/[^a-z\d]+/i', '', $colum) . '=? WHERE id=?', $value, $row) === false) {
							http_response_code(500); // DB Error
						}
					} else {
						if(db0('UPDATE ' . preg_replace('/[^a-z\d]+/i', '', $table) . ' SET ' . preg_replace('/[^a-z\d]+/i', '', $colum) . '=NULL WHERE id=?', $row) === false) {
							http_response_code(500); // DB Error
						}
					}
				} else {
					// INSERT
					if(isset($_POST['value'])) {
						$value =  $_POST['value'];
						if(db0('INSERT INTO ' . preg_replace('/[^a-z\d]+/i', '', $table) . ' (' . preg_replace('/[^a-z\d]+/i', '', $colum) . ') VALUES (?)', $value) === false) {
							http_response_code(500); // DB Error
						}
					} else {
						if(db0('INSERT INTO ' . preg_replace('/[^a-z\d]+/i', '', $table) . ' (' . preg_replace('/[^a-z\d]+/i', '', $colum) . ') VALUES (NULL)') === false) {
							http_response_code(500); // DB Error
						}
					}
				}
			} else {
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
			}
		}
	} else {
		http_response_code(403); // FORBIDEN
	}
?>
