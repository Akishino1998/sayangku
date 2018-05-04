<!DOCTYPE html>
<html>
<head>
	<title>Blog | Indah Noordiana Santy</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="styledrama.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	<?php include('header.php') ?>

	<div id="badan">

		<div id="isi">
			<table border="0" class="isipreview">
				<?php
					include('koneksi.php');
					$cari = $_GET['text_cari'];
					$sql = "SELECT daftar_drama.gambar, daftar_drama.judul_drama, daftar_drama.sinopsis, daftar_drama.id_drama FROM drama_complete, daftar_drama WHERE daftar_drama.judul_drama LIKE '%".$cari."%' GROUP BY daftar_drama.id_drama ORDER BY id_drama DESC LIMIT 5 ";
					$hasil = mysqli_query($koneksi, $sql);
					if( mysqli_num_rows($hasil)> 0 )
					{
						while ( $data=mysqli_fetch_row($hasil))

						{
							$text =$data['2'];
							$text = substr($text,0, 300);
							?>
							<tr >
								<td colspan="2" ><h2 align="center"><?php echo $data['1']; ?></h2></td>

							</tr>
							<tr >
								<td><img width="400" src="<?php echo $data['0']; ?>"></td>
								<td rowspan="2" width="800"><p class="text" ><?php echo $text.'......'; ?><br>
									<form action="postingan-blog.php" method="get">
											<input type="text" name="text" value="<?php echo $data['3']; ?>" class="id_drakor">
											<input type="submit" name="submit" value="Selengkapnya" class="tombol">
									</form>
								</p></td>
							</tr>
						<?php
						}
					}else{
					echo "<tr>
								<td><h2>Konten Belum Tersedia!</h2></td>
							</tr>";
						}
				?>
			</table>
		</div>


	</div>
	<?php include('footer.php') ?>
</body>
</html>
