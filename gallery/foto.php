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
    <title>foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-image: url(https://1.bp.blogspot.com/-4c90ZKGOGmA/YGFX7DyQK7I/AAAAAAAAIMY/7SOJOJy7WQUOcmDbFA6WEe6zu4sh8IhqQCLcBGAsYHQ/s16000/pastel-kuning-hijau.jpg);
            background-size: cover;
            margin-top: 90px;
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
    <h1>Halaman Foto</h1>
    <p>Selamat Datang <b><?=$_SESSION['namalengkap']?></b></p>
    
    <tr>
        <td><button type="submit" class="btn btn-info"><a href="home.php" style="text-decoration: none; color: black;">Home</a></button></td>
        <td><button type="submit" class="btn btn-info"><a href="album.php" style="text-decoration: none; color: black;">Album</a></button></td>
        <td><button type="submit" class="btn btn-danger"><a href="logout.php" style="text-decoration: none; color: black;">Logout</a></button></td>
    </tr>
    <br><br>

    <form action="tambah_foto.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Judul Foto</td>
                <td><input type="text" name="judulfoto"></td>
            </tr>
            <tr>
                <td>Deskripsi Foto</td>
                <td><input type="text" name="deskripsifoto"></td>
            </tr>
            <tr>
                <td>Lokasi File</td>
                <td><input type="file" name="lokasifile"></td>
            </tr>
            <tr>
                <td>Album</td>
                <td>
                    <select name="albumid">
                <?php
                    include "koneksi.php";
                    $userid=$_SESSION['userid'];
                    $sql=mysqli_query($conn, "select * from album where userid='$userid'");
                    while($data=mysqli_fetch_array($sql)){

                ?>
                <option value="<?=$data['albumid']?>"><?=$data['namaalbum']?></option>
                <?php
                    }
                ?>
                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Tambah</button></td>
            </tr>
        </table>
    </form>
    <br><br><br>
    <table class="table-bordered" border="2" cellpadding=5 cellspacing=0 style="width: 100%;">
        <tr>
            <td style="text-align:center">ID</td>
            <td style="text-align:center">Judul Foto</td>
            <td style="text-align:center">Deskripsi Foto</td>
            <td style="text-align:center">Tanggal Unggah</td>
            <td style="text-align:center">Lokasi File</td>
            <td style="text-align:center">Album</td>
            <td style="text-align:center">Aksi</td>
        </tr>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn, "select * from foto,album where foto.userid='$userid' and foto.
            albumid=album.albumid");
            while($data=mysqli_fetch_array($sql)){

        ?>
            <tr>
                <td style="text-align:center"><?=$data['fotoid']?></td>
                <td style="text-align:center"><?=$data['judulfoto']?></td>
                <td style="text-align:center"><?=$data['deskripsifoto']?></td>
                <td style="text-align:center"><?=$data['tanggalunggah']?></td>
                <td style="text-align:center">
                    <img src="gambar/<?=$data['lokasifile']?>" width="200px">
                </td>
                <td style="text-align:center"><?=$data['namaalbum']?></td>
                <td style="text-align:center">
                    <button type="submit" class="btn btn-danger"><a href="hapus_foto.php?fotoid=<?=$data['fotoid']?>" style="text-decoration: none; color: black;">Hapus</a></button>
                    <button type="submit" class="btn btn-primary"><a href="edit_foto.php?fotoid=<?=$data['fotoid']?>" style="text-decoration: none; color: black;">Edit</a></button>
                </td>
            </tr>
        <?php
            }
        ?>

    </table>
    </center>
    
</body>
</html>