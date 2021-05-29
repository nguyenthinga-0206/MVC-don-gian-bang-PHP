<?php
	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
	else{
		$action  ='';
	}
	switch ($action) {
		case 'login':{
			require_once('../Views/login.php');
			break;
		}
		case 'home':{
			if(isset($_POST['submit'])){
				$user = $_POST['username'];
				$password= $_POST['password'];
				$tblTable = "admin";
				$data = $db->get1user($tblTable,$user);
				if($data!=0){
					foreach ($data as $value) {
						if($value['Password']==$password){
							require_once('..Views/home.php');
							break;
						}
						else{
							echo "<h2>Mat khau khong dung</h2>";
							require_once('..Views/login.php');
							break;
						}
						break;
					}
				}
				else{
					echo "<h2>Sai tai khoan vaf mat khau</h2>";
					require_once('..Views/login.php');
					break;
				}
			}
			break;
		}
	}
?>