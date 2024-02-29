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
    <title>album</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-image: url(gambar/maxresdefault.jpg);
            background-size: cover;
            margin-top: 100px;
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
    <h1>Halaman Album</h1>
    <p>Selamat Datang <b><?=$_SESSION['namalengkap']?></b></p>
    
    <tr>
        <td><button type="submit" class="btn btn-info"><a href="home.php" style="text-decoration: none; color: black;">Home</a></button></td>
        <td><button type="submit" class="btn btn-info"><a href="foto.php" style="text-decoration: none; color: black;">Foto</a></button></td>
        <td><button type="submit" class="btn btn-danger"><a href="logout.php" style="text-decoration: none; color: black;">Logout</a></button></td>
    </tr>
    <br><br>

    <form action="tambah_album.php" method="post">
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="namaalbum"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Tambah</button></td>
            </tr>
        </table>
    </form>
    <br>
    <table class="table-bordered" border="2" cellpadding="5" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Nama Album</td>
            <td>Deskripsi</td>
            <td>Tanggal Dibuat</td>
            <td style="text-align:center">Aksi</td>
        </tr>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn, "select * from album where userid='$userid'");
            while($data=mysqli_fetch_array($sql)){

        ?>
            <tr>
                <td><?=$data['albumid']?></td>
                <td><?=$data['namaalbum']?></td>
                <td><?=$data['deskripsi']?></td>
                <td><?=$data['tanggaldibuat']?></td>
                <td>
                    <button type="submit" class="btn btn-danger"><a href="hapus_album.php?albumid=<?=$data['albumid']?>" style="text-decoration: none; color: black;">Hapus</a></button>
                    <button type="submit" class="btn btn-primary"><a href="edit_album.php?albumid=<?=$data['albumid']?>" style="text-decoration: none; color: black;">Edit</a></button>
                </td>
            </tr>
        <?php
            }
        ?>

    </table>
    </center>
    
</body>
</html>