<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit album</title>
    <style>
        body{
            background-image: url(gambar/350850-website-background-1920x1234-for-android-50.jpg);
            background-size: cover;
        }
        h1{
            color: red;
        }
        p{
            color: red;
        }
    </style>
</head>
<body>
<center>
    <h1>Halaman Edit Album</h1>
    <p>Selamat Datang <b><?=$_SESSION['namalengkap']?></b></p>
    
    <!-- <tr>
        <td><a href="foto.php">Foto</a></td><br><br>
        <td><a href="album.php">Album</a></td><br><br>
        <td><a href="logout.php">Logout</a></td>
    </tr> -->

    <br>
            
    <form action="update_album.php" method="post">
    <?php
            include "koneksi.php";
            $albumid=$_GET['albumid'];
            $sql=mysqli_query($conn, "select * from album where albumid='$albumid'");
            while($data=mysqli_fetch_array($sql)){

        ?>
        <input type="text" name="albumid" value="<?=$data['albumid']?>" hidden>
        <table>
           <p>Nama Album</p>
            <tr>
                <input type="text" name="namaalbum" value="<?=$data['namaalbum']?>">
            </tr>
            <p>Deskripsi</p>
            <tr>
                <input type="text" name="deskripsi" value="<?=$data['deskripsi']?>">
            </tr>
            <br><br>
            <tr>
                <td></td>
                <td><input type="submit" value="Ubah"></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </form>
    </center>
    
</body>
</html>