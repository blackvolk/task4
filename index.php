<?php
	require_once('config.php');
	require_once('functions.php');
	$MySql = new MySql(
	DB_HOST,DB_USER,DB_NAME,DB_PASS);
	require_once('templates/templates.php');	
	$MySqlAdd=$MySql->add('iop','jkl');
?>
