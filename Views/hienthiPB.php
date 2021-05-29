<div class="danhsach">
	<table border="1" width="100%">
		<caption> PHÒNG BAN </caption>
		<thead>
			<tr>
				<td>ID Phòng Ban</td>
				<td>Tên Phòng Ban</td>
				<td>Mô Tả</td>
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
		</tr>
		<?php 
		}
		 ?>
	</body>
	</table>
</div>