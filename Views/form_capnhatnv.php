<?php 
if($data!=0){
	foreach ($data as $value) { 
?>
	<form action='Controllers/capnhatNV.php?submit=submit' method='POST' target='_self'>
	<center>	
		<a>ID Nhân Viên : <input type='text' name='IDNV' value=<?php echo $value['IDNV']; ?>></a><br>
		<a>Họ Tên : <input type='text' name='Hoten' value=<?php echo $value['Hoten']; ?>></a><br>
		<a>ID Phòng Ban : <input type='text' name='IDPB' value=<?php echo $value['IDPB']; ?>></a><br>
		<a>Địa Chỉ : <input type='text' name='Diachi' value=<?php echo $value['Diachi']; ?>></a><br>
		<a><input type='submit' name='update' value='Xác nhận'></a><br>
	</center>
	</form>

<?php
	break;
	}
}
?>