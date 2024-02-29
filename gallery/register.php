<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body {
        background-image: url(gambar/445986758_e_commerce_registration_form_template_thumb.png);
        background-size: cover;
        margin-top: 100px;
    }
    </style>
</head>
<body>

    <center><h1>Halaman Register</h1>

    <form action="proses_register.php" method="post">
        <table>
            <p>Username</p>
            <tr>
                <input type="text" name="username" style="height: 20px; width: 200px; border-radius: 200px;">
            </tr>
            <p>Password</p>
            <tr>
                <input type="password" name="password" style="height: 20px; width: 200px; border-radius: 200px;">
            </tr>
            <p>Email</p>
            <tr>
                <input type="email" name="email" style="height: 20px; width: 200px; border-radius: 200px;">
            </tr>
            <p>Nama Lengkap</p>
            <tr>
                <input type="text" name="namalengkap" style="height: 20px; width: 200px; border-radius: 200px;">
            </tr>
            <p>Alamat</p>
            <tr>
                <input type="text" name="alamat" style="height: 20px; width: 200px; border-radius: 200px;">
            </tr>
            <br><br>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Register</button></td>
            </tr>
        </table>
    </form>
    </center>
    
</body>
</html>