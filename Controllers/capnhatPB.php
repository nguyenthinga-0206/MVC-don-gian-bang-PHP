<?php
	include "Models/db.php";
	$db = new Database;
	$db->connect();	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	else{
		$id  ='';
	}
	if($id!=''){
	$table = "phongban";
	$data = $db->get1pb($table,$id);

	require_once('Views/form_capnhat.php');
	}
	if(isset($_GET['submit'])){
		$submit = $_GET['submit'];
	}
	else{
		$submit  ='';
	}
	if($submit=="submit"){
		if(isset($_POST['update'])){
			$id =$_POST['IDPB'];
			$ten =$_POST['Tenpb'];
			$mt =$_POST['Mota'];
			$db->uppdatepb($id,$ten,$mt);
			$table="phongban";
			$data= $db->getAllData($table);
			require_once('Views/capnhatPB.php');
		}
		if (isset($_POST['them'])) {
			$id =$_POST['IDPB'];
			$ten =$_POST['Tenpb'];
			$mt =$_POST['Mota'];
			$db->themPB($id,$ten,$mt);
			$table="phongban";
			$data= $db->getAllData($table);
			require_once('Views/hienthiPB.php');
		}
		if(isset($_POST['xoa'])) {
			$id =$_POST['IDPB'];
			$db->xoaPB($id);
			$table="phongban";
			$data= $db->getAllData($table);
			require_once('Views/hienthiPB.php');
		}
	}
	if(isset($_GET['id1'])){
		$id1 = $_GET['id1'];
	}
	else{
		$id1  ='';
	}
	if($id1!=''){	
	$table = "phongban";
	$data = $db->get1pb($table,$id1);
	require_once('Views/form_xoa.php');
	}
	if(isset($_GET['xoatoanbo'])){
		$xoatoanbo = $_GET['xoatoanbo'];
	}
	else{
		$xoatoanbo  ='';
	}
	if($xoatoanbo!=''){	
		$table = "phongban";
		$data = $db->getAllData($table);
		foreach ($data as $value) {
			$hi= $value['IDPB'];
			error_reporting(0);
			$a = $_POST["$hi"];
			$db->xoaPB($a);
		}
		$data= $db->getAllData($table);
			require_once('Views/hienthiPB.php');
		
	}
?>