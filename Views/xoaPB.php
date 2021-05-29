<<div class="danhsach">
	<table border="1" width="100%">
		<caption> XÓA PHÒNG BAN </caption>
		<thead>
			<tr>
				<td>ID Phòng Ban</td>
				<td>Tên Phòng Ban</td>
				<td>Mô Tả</td>
				<td></td>
			</tr>
		</thead>
	<body>
		<?php 
			foreach ($data as $value) {
		?>
		<tr>
			<td><?php echo $value['IDPB']; ?></td>
			<td><?php echo $value['Tenpb']; ?></td>
			<td><?php echo $value['Mota']; ?></td>
			<td><a href="Controllers/capnhatPB.php?id1=<?php echo $value['IDPB']; ?>">Xóa</a></td>	
		</tr>
		<?php 
		}
		 ?>
	</body>
	</table>
</div>