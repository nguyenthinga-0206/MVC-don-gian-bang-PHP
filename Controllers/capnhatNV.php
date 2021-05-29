<?php
	include "..Models/db.php";
	$db = new Database;
	$db->connect();
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	else{
		$id  ='';
	}
	if($id!=''){
	$table = "nhanvien";
	$data = $db->get1nv($table,$id);

	require_once('Views/form_capnhatnv.php');
	}
	if(isset($_GET['submit'])){
		$submit = $_GET['submit'];
	}
	else{
		$submit  ='';
	}
	if($submit=="submit"){
		if(isset($_POST['update'])){
			$id =$_POST['IDNV'];
			$ten =$_POST['Hoten'];
			$idpb =$_POST['IDPB'];
			$dc =$_POST['Diachi'];
			$db->uppdatenv($id,$ten,$idpb,$dc);
			$table="nhanvien";
			$data= $db->getAllData($table);
			require_once('Views/capnhatNV.php');
		}
		if (isset($_POST['them'])) {
			$id =$_POST['IDNV'];
			$ten =$_POST['Hoten'];
			$idpb =$_POST['IDPB'];
			$dc =$_POST['Diachi'];
			$db->themNV($id,$ten,$idpb,$dc);
			$table="nhanvien";
			$data= $db->getAllData($table);
			require_once('Views/hienthiNV.php');
		}
		if(isset($_POST['xoa'])) {
			$id =$_POST['IDNV'];
			$db->xoaNV($id);
			$table="nhanvien";
			$data= $db->getAllData($table);
			require_once('Views/hienthiNV.php');
		}
	}
	if(isset($_GET['id1'])){
		$id1 = $_GET['id1'];
	}
	else{
		$id1  ='';
	}
	if($id1!=''){	
	$table = "nhanvien";
	$data = $db->get1nv($table,$id1);
	require_once('Views/form_xoanv.php');
	}
	if(isset($_GET['xoatoanbo'])){
		$xoatoanbo = $_GET['xoatoanbo'];
	}
	else{
		$xoatoanbo  ='';
	}
	if($xoatoanbo!=''){	
		$table = "nhanvien";
		$data = $db->getAllData($table);
		foreach ($data as $value) {
			$hi= $value['IDNV'];
			error_reporting(0);
			$a = $_POST["$hi"];
			$db->xoaNV($a);
		}
		$data= $db->getAllData($table);
			require_once('Views/hienthiNV.php');
		
	}
?>