<?php
	require_once('db.inc.php');
	$query = db1('SELECT query FROM pages WHERE name=?', $_GET['page'])->query;
	echo db4js($query);
?>
