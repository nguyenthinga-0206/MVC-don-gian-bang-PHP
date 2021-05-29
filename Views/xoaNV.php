<div class="danhsach">
	<table border="1" width="100%">
		<caption> XÓA NHÂN VIÊN </caption>
		<thead>
			<tr>
				<td>ID Nhân Viên</td>
				<td>Họ Tên</td>
				<td>ID Phòng Ban</td>
				<td>Địa Chỉ</td>
				<td></td>
			</tr>
		</thead>
	<body>
		<?php 
			foreach ($data as $value) {
		?>
		<tr>
			<td><?php echo $value['IDNV']; ?></td>
			<td><?php echo $value['Hoten']; ?></td>
			<td><?php echo $value['IDPB']; ?></td>
			<td><?php echo $value['Diachi']; ?></td>
			<td><a href="Controllers/capnhatNV.php?id1=<?php echo $value['IDNV']; ?>">Xóa</a></td>	
		</tr>
		<?php 
		}
		 ?>
	</body>
	</table>
</div>