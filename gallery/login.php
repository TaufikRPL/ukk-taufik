<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body {
        background-image: url(gambar/admin-login-background-images-8.webp);
        background-size: cover;
        margin-top: 100px;
    }
    </style>
</head>
<body>

    <center><h1>Halaman Login</h1>

    <form action="proses_login.php" method="post">
        <table>
            <p>Username</p>
            <tr>
                <input type="text" name="username" style="height: 20px; width: 200px; border-radius: 200px;">
            </tr>
            <p>Password</p>
            <tr>
                <input type="password" name="password" style="height: 20px; width: 200px; border-radius: 200px;">
            </tr>
            <br><br>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Login</button></td>
            </tr>
        </table>
    </form>
    </center>
    
</body>
</html>