<?php
	include "Models/db.php";
	$db = new Database;
	$db->connect();
	if(isset($_GET['controller'])){
		$controller = $_GET['controller'];
	}
	else{
		$controller  ='';
	}

	switch ($controller) {
		case 'login':
			require_once('Controllers/login.php');
	}
?>
