<form method='POST' action='Controllers/capnhatPB.php?xoatoanbo=xoa' target='_self'>
	<table  border="1" width="100%">
		<caption> XÓA NHIỀU PHÒNG BAN </caption>
		<tr>
			<td>ID Phòng Ban</td>
			<td>Tên Phòng Ban</td>
			<td>Mô Tả</td>
			<td>Chọn</td>
		</tr>
		<?php 
			foreach ($data as $value) 
			{
				$idpb= $value['IDPB'];
				$tenpb= $value['Tenpb'];
				$mota= $value['Mota'];
		?>
			<tr>
				<td><?php echo $idpb; ?></td>
				<td><?php echo $tenpb; ?></td>
				<td><?php echo $mota; ?></td>
				<td><input type='checkbox' name=<?php echo $idpb; ?> value=<?php echo $idpb; ?> ></td>
			</tr>
		<?php
			} 
		?>
		<tr>
			<td colspan ='4'><input type='submit' name='submit' value='Xóa'></td>
		</tr>
</form>