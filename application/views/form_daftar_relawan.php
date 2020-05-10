<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Relawan</title>
</head>
<body>
    <h1>Form daftar relawan</h1>
    <form action="<?php echo base_url()."index.php/relawankitabantu/proses_daftar_relawan"; ?>" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>email</td>
                <td>:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>password</td>
                <td>:</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td><button type="submit" >Daftar</button></td>
            </tr>
        </table>
    </form>
</body>
</html>