<?php 
if($data!=0){
	foreach ($data as $value) { 
?>
	<form action='Controllers/capnhatPB.php?submit=submit' method='POST' target='_self'>
	<center>	
		<a>ID Phòng Ban : <input type='text' name='IDPB' value=<?php echo $value['IDPB']; ?>></a><br>
		<a>Tên Phòng Ban : <input type='text' name='Tenpb' value=<?php echo $value['Tenpb']; ?>></a><br>
		<a>Mô Tả : <input type='text' name='Mota' value=<?php echo $value['Mota']; ?>></a><br>
		<a><input type='submit' name='update' value='Xác nhận'></a><br>
	</center>
	</form>

<?php
	break;
	}
}
?>