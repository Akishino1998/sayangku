<?php
$submit = $_POST["submit"];
if(isset($submit))
{
    $judul = $_POST["judul"];
    $sinopsis = nl2br($_POST["textarea"]);

    $asal_file = $_FILES['gambar_drakor']['tmp_name'];
	$nama_file = $_FILES['gambar_drakor']['name'];
    print_r($_FILES);
	move_uploaded_file($asal_file, 'gambar-drakor/'. $nama_file);
    echo '<br>gambar-drakor/'. $nama_file;
    include('koneksi.php');
    $sql = "INSERT INTO daftar_drama(judul_drama, sinopsis, gambar) VALUES('".$judul."','".$sinopsis."','gambar-drakor/".$nama_file."')";
    $hasil = mysqli_query($koneksi, $sql);
    header('location:Blog.php');
    echo "<script>window.alert('Postingan Berhasil di upload!')</script>";

}

 ?>
