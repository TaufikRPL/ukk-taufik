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
    <title>edit foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-image: url(https://static.vecteezy.com/system/resources/previews/005/412/075/original/abstract-pastel-purple-minimal-background-for-invitation-or-banner-free-vector.jpg);
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
    <h1>Halaman Edit Foto</h1>
    <p>Selamat Datang <b><?=$_SESSION['namalengkap']?></b></p>
    
    <!-- <ul>
        <li><a href="foto.php">Foto</a></li>
        <li><a href="album.php">Album</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul> -->
    <br>
            
    <form action="update_foto.php" method="post" enctype="multipart/form-data">
    <?php
            include "koneksi.php";
            $fotoid=$_GET['fotoid'];
            $sql=mysqli_query($conn, "select * from foto where fotoid='$fotoid'");
            while($data=mysqli_fetch_array($sql)){

        ?>
        <input type="text" name="fotoid" value="<?=$data['fotoid']?>" hidden>
        <table>
            <tr>
                <td>Judul Foto</td>
                <td><input type="text" name="judulfoto" value="<?=$data['judulfoto']?>"></td>
            </tr>
            <tr>
                <td>Deskripsi Foto</td>
                <td><input type="text" name="deskripsifoto" value="<?=$data['deskripsifoto']?>"></td>
            </tr>
            <tr>
                <td>Lokasi File</td>
                <td><input type="file" name="lokasifile" value="<?=$data['lokasifile']?>"></td>
            </tr>
            <tr>
                <td>Album</td>
                <td>
                    <select name="albumid">
                <?php
                    $userid=$_SESSION['userid'];
                    $sql2=mysqli_query($conn, "select * from album where userid='$userid'");
                    while($data2=mysqli_fetch_array($sql2)){

                ?>
                <option value="<?= $data2['albumid'] ?>"<?php if($data2['albumid']==$data['albumid']){echo
                "selected";}?>><?=$data2['namaalbum']?></option>
                <?php
                    }
                ?>
                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Ubah</button></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </form>
    </center>
    
</body>
</html>