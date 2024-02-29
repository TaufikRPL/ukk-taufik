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
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-image: url(https://tse4.mm.bing.net/th?id=OIP.Y0r8P-x_YfssWm7b7aIXpwFNC7&pid=Api&P=0&h=220);
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
    <h1>Halaman Home</h1>
    <p>Selamat Datang <b><?=$_SESSION['namalengkap']?></b></p>
    
    <tr>
        <td><button type="submit" class="btn btn-info"><a href="foto.php" style="text-decoration: none; color: black;">Foto</a></button></td>
        <td><button type="submit" class="btn btn-info"><a href="album.php" style="text-decoration: none; color: black;">Album</a></button></td>
        <td><button type="submit" class="btn btn-danger"><a href="logout.php" style="text-decoration: none; color: black;">Logout</a></button></td>
    </tr>
</center>
    
</body>
</html>