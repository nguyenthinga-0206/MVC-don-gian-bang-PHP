<form method='POST' action='Controllers/capnhatNV.php?xoatoanbo=xoa' target='_self'>
	<table  border="1" width="100%">
		<caption> XÓA NHIỀU NHÂN VIÊN </caption>
		<tr>
			<td>ID Nhân Viên</td>
			<td>Họ Tên</td>
			<td>ID Phòng Ban</td>
			<td>Địa Chỉ</td>
			<td>Chọn</td>
		</tr>
		<?php 
			foreach ($data as $value) 
			{
				$idnv= $value['IDNV'];
				$hoten= $value['Hoten'];
				$idpb= $value['IDPB'];
				$dc= $value['Diachi'];
		?>
			<tr>
				<td><?php echo $idnv; ?></td>
				<td><?php echo $hoten; ?></td>
				<td><?php echo $idpb; ?></td>
				<td><?php echo $dc; ?></td>
				<td><input type='checkbox' name=<?php echo $idpb; ?> value=<?php echo $idnv; ?> ></td>
			</tr>
		<?php
			} 
		?>
		<tr>
			<td colspan ='4'><input type='submit' name='submit' value='Xóa'></td>
		</tr>
</form>

