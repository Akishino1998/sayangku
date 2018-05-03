<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login  | Indah Noordiana Santy</title>
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    </head>
    <body>
        <div id="login">
            <h1>Login Akun</h1>
            <form class="formlogin" action="login-proses.php" method="post">
                <table>
                    <tr>
                        <th>Username</th>
                    </tr>
                    <tr>
                        <td> <input class="text" type="text" name="username" placeholder="Usernamemu...."> </td>
                    </tr>
                    <tr>
                        <th>Password</th>
                    </tr>
                    <tr>
                        <td><input class="text" type="password" name="password" placeholder="Passwordmu...."> </td>
                    </tr>
                    <tr>
                        <td><br> <center> <input class="tombol" type="submit" name="submit" value="Login"></center> </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
<?php
if(isset($_GET['status']))
{
	if($_GET['status'] == "tidakterdaftar")
    {
		echo "<script> window.alert('Anda Belum Terdaftar!');</script>";
	}
    elseif($_GET['status'] == "salah")
    {
		echo "<script>window.alert('Username Atau Password Anda Salah!');</script>";
	}
    else
    {
        echo "<script>window.alert('Error!');</script>";
    }
}
?>
