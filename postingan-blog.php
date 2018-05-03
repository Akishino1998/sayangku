
<!DOCTYPE html>
<html>
<head>
	<title>Blog | Indah Noordiana Santy</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="styledrama.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <style>
        .isipreview{
            margin-left: 90px;
        }
        h2{
            font-family: 'font1';
            font-size: 40px;
        }
        img{
            width: 400px;
            height: auto;
        }
        .download{
            margin-left: 400px;
            margin-bottom: 100px;
        }
    </style>
</head>
<body>

	<?php include('header.php') ?>

	<div id="badan">

		<div id="isi">
			<table border="0" class="isipreview">
				<?php
                    $id = $_GET['text'];



					include('koneksi.php');
					$sql = "SELECT gambar, judul_drama, sinopsis, daftar_drama.id_drama FROM  daftar_drama WHERE id_drama=".$id;
					$hasil = mysqli_query($koneksi, $sql);
					if( mysqli_num_rows($hasil)> 0 )
					{
						while ( $data=mysqli_fetch_row($hasil))

						{
							$text =$data['2'];
							?>
							<tr >
								<td ><h2 align="center"><?php echo $data['1']; ?><br><br><br></h2></td>

							</tr>
							<tr >
								<td><center><img  src="<?php echo $data['0']; ?>"><br><br></center></td>
							</tr>
                            <tr>
                                <td width="800"><p class="text" ><?php echo $text; ?><br></p></td>
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
            <table class="download">
                <caption>Episode Download</caption>
                <?php
                    $id = $_GET['text'];



					include('koneksi.php');
					$sql = "SELECT eps, link FROM  daftar_drama, update_eps WHERE daftar_drama.id_drama=".$id." AND update_eps.id_drama=".$id;
					$hasil = mysqli_query($koneksi, $sql);
					if( mysqli_num_rows($hasil)> 0 )
					{
						while ( $data=mysqli_fetch_row($hasil))

						{

							?>
                            <tr>
                                <th>Episode <?php echo $data['0']; ?></th>
                                <td> - <a href="<?php echo $data['1']; ?>">Download</a> </td>
                            </tr>
                <?php
                        }
                    }else{
                        echo "<tr>
                                    <td><h3>Link Download Belum Tersedia!</h3></td>
                                </tr>";
                    }
                    ?>
            </table>
		</div>
	</div>
<?php include('footer.php') ?>
</body>
</html>
