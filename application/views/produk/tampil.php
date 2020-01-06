<!DOCTYPE html>
<html>
<head>
	<title>Tampil</title>
<body>	
<?php echo anchor('produk/input','Tambah Baru'); ?>
<table width='600' border="1">
						<tr>
							<td>No</td>
							<td>Kode Produk</td>
							<td>Nama Produk</td>
							<td>Harga</td>
							<td>Stok</td>
							<td colspan="2" style="text-align: center">Aksi</td>
						</tr>

						 <?php foreach ($tampil as $key => $value) { ?>  <!-- untuk menampilkan database dengan perulangan -->
								
						<tr> <!-- untuk menapilkan database-->
							<td>
									<?php echo 	$value->id ?> 
							</td> 

							 <td>
									<?php echo 	$value->kode_produk ?>
							 </td>

							 <td>
									<?php echo 	$value->nama_produk ?>
							 </td>

							 <td>
									<?php echo 	$value->harga ?>
							 </td>

							 <td>
							 		<?php echo 	$value->stok ?>
							 </td>

							<td>
									<?php echo anchor('produk/delete/' .$value->id,'Hapus'); ?> 
							</td>

						</tr>

					<?php } ?>

		</table>

</body>
</html>