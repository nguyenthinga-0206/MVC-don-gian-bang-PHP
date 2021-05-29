<?php
	class Database 
	{
		private $hostname ="localhost";
		private $username ="root";
		private $pass ="";
		private $dbname ="dulieu2";

		private $conn = NULL;
		private $result =NULL;
		public function connect()
		{
			$this->conn = new mysqli($this->hostname,$this->username,$this->pass,$this->dbname);
			if(!$this->conn){
				echo"ket noi thanh cong";
				exit();
			}
			else{
				mysqli_set_charset($this->conn,'utf-8');
			}
			return $this->conn;
		}
		public function execute1($sql)
		{
			$this->result = $this->conn->query($sql);
		}
		public function execute($sql)
		{
			$this->result = $this->conn->query($sql);
			return $this->result;
		}

		public function getData()
		{
			if($this->result){
				$data = mysqli_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
			return $data;
		}



		public function getAllData($table)
		{
			$sql ="select * from $table";
			$this->execute($sql);
			if($this->num_rows()==0){
				$data =0;
			}
			else{
				while($datas = $this->getData()){
					$data[] = $datas;
				}
			}

			return$data;
		}

		public function get1user($table,$user)
		{
			$sql ="select * from $table where Username = '$user'";
			$this->execute($sql);
			if($this->num_rows()==0){
				$data =0;
			}
			else{
				while($datas = $this->getData()){
					$data[] = $datas;
				}
			}

			return$data;
		}
		public function get1nv($table,$idnv)
		{
			$sql ="select * from $table where IDNV = '$idnv'";
			$this->execute($sql);
			if($this->num_rows()==0){
				$data =0;
			}
			else{
				while($datas = $this->getData()){
					$data[] = $datas;
				}
			}

			return$data;
		}
		public function get1pb($table,$idpb)
		{
			$sql ="select * from $table where IDPB = '$idpb'";
			$this->execute($sql);
			if($this->num_rows()==0){
				$data =0;
			}
			else{
				while($datas = $this->getData()){
					$data[] = $datas;
				}
			}

			return$data;
		}
		public function uppdatenv($idnv,$hoten,$idpb,$diachi)
		{
			$sql ="UPDATE nhanvien SET Hoten = '$hoten', IDPB = '$idpb', Diachi = '$diachi' WHERE IDNV ='$idnv'";
			$this->execute1($sql);
		}
		public function uppdatepb($idpb,$tenpb,$mota)
		{
			$sql ="UPDATE phongban SET Tenpb = '$tenpb', Mota = '$mota' WHERE IDPB ='$idpb'";
			$this->execute1($sql);
		}
		public function themNV($idnv,$hoten,$idpb,$diachi)
		{
			$sql ="INSERT INTO nhanvien (IDNV, Hoten, IDPB, Diachi ) VALUES ('$idnv','$hoten','$idpb','$diachi')";
			$this->execute1($sql);
		}
		public function themPB($idpb,$tenpb,$mota)
		{
			$sql ="INSERT INTO phongban (IDPB, Tenpb, Mota) VALUES ('$idpb','$tenpb','$mota')";
			$this->execute1($sql);
		}
		public function xoaNV($idnv)
		{
			$sql ="DELETE FROM nhanvien WHERE IDNV='$idnv'";
			$this->execute1($sql);
		}
		public function xoaPB($idpb)
		{
			$sql ="DELETE FROM phongban WHERE IDPB='$idpb'";
			$this->execute1($sql);
		}
		public function num_rows(){
			if($this->result){
				$num = mysqli_num_rows($this->result);

			}
			else{
				$num =0;
			}
			return $num;
		}
		
	}
?>