<!DOCTYPE html>
<html>
<head>
	<title>TES</title>
</head>
<body>
	<table>
		<?php
					include('koneksi.php');
					$sql = "SELECT daftar_drama.gambar, daftar_drama.judul_drama FROM drama_ongoing, daftar_drama WHERE drama_ongoing.id=daftar_drama.id_drama ";
					$hasil = mysqli_query($koneksi, $sql);
					if( mysqli_num_rows($hasil)>0 )
					{
						while( $data=mysqli_fetch_row($hasil))
						{ 		
				?>
				<tr class="isipreview">
					<td><img width="400px" src="<?php echo $data['0']; ?>"><h1>bg</h1></td>
					<td><p class="judulpreview"><?php echo $data['1']; ?></p></td>
				</tr>
				<?php
						}
					}
				?>
	</table>
</body>
</html>