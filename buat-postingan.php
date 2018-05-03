<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Buat Postingan | Indah Noordiana Santy</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="buat-postingan.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    </head>
    <body>
        <?php include('header.php') ?>
        <div id="judul">
            <h1>Buat Postingan!</h1>
        </div>
        <div id="isi">
            <form  action="buat-postingan-proses.php" method="post" enctype="multipart/form-data">
                <center><table id="table" border="0">
                    <tr>
                        <th width="300">Judul </th>
                        <td width="400" > <input type="text" name="judul" class="text"> </td>
                    </tr>
                    <tr>
                        <th>Sinopsis</th>
                        <td> <textarea name="textarea" class="textarea"></textarea> </td>
                    </tr>
                    <tr>
                        <th>Gambar</th>
                        <td><input type="file" name="gambar_drakor"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><br><br> <center><input class="submit" type="submit" name="submit" value="Posting!"></center> </td>
                    </tr>
                </table></center>
            </form>

        </div>

    </body>
</html>
