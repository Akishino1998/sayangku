<?php
$submit = $_POST["submit"];
if(isset($submit))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    include('koneksi.php');
    $sql = "SELECT * FROM akun WHERE username='".$username."'";
    $hasil = mysqli_query($koneksi, $sql);
    if( mysqli_num_rows($hasil) > 0)
    {
        while($data=mysqli_fetch_row($hasil))
        {
            if($data['0']==$username && $data['1']==$password)
            {
                echo "<script>window.alert('Login Berhasil!')</script>";
                header('Location: buat-postingan.php');
            }
            else
            {
                header('Location: Login.php?status=salah');
            }
        }
    }
    else
    {
        header('Location: Login.php?status=tidakterdaftar');
    }
}

 ?>
