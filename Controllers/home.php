<?php
	include "Models/db.php";
	$db = new Database;
	$db->connect();
	if(isset($_GET['actions'])){
				$action1 = $_GET['actions'];
			}
			else{
				$action1  ='';
			}
			switch ($action1) {
				case 'home':{	
					require_once('Views/home.php');
					break;
				}

				case 'pt':{
					if(isset($_POST['htpb'])){
					$table="phongban";
					$data= $db->getAllData($table);
					require_once('Views/hienthiPB.php');
					break;
					}
					if(isset($_POST['htnv'])){
					$table="nhanvien";
					$data= $db->getAllData($table);
					require_once('Views/hienthiNV.php');
					break;
					}
					if(isset($_POST['them1'])){
					require_once('Views/themNV.php');
					break;
					}
					if(isset($_POST['cn1'])){
					$table="nhanvien";
					$data= $db->getAllData($table);
					require_once('Views/capnhatNV.php');
					break;
					}
					if(isset($_POST['cn'])){
					$table="phongban";
					$data= $db->getAllData($table);
					require_once('Views/capnhatPB.php');
					break;
					}
					if(isset($_POST['them'])){
					require_once('Views/themPB.php');
					break;
					}
					if(isset($_POST['xoa1'])){
					$table="nhanvien";
					$data= $db->getAllData($table);
					require_once('Views/xoaNV.php');
					break;
					}
					if(isset($_POST['xoatoanbo1'])){
					$table="nhanvien";
					$data= $db->getAllData($table);
					require_once('Views/xoatoanboNV.php');
					break;
					}
					if(isset($_POST['xoa'])){
					$table="phongban";
					$data= $db->getAllData($table);
					require_once('Views/xoaPB.php');
					break;
					}
					if(isset($_POST['xoatoanbo'])){
					$table="phongban";
					$data= $db->getAllData($table);
					require_once('Views/xoatoanboPB.php');
					break;
					}
					break;
				}
			}
?>