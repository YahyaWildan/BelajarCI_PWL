<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Relawan</title>
</head>
<body>
    <h1>Form Edit relawan</h1>
    <form action="<?php echo base_url()."index.php/relawankitabantu/proses_edit_relawan/".$id_relawan; ?>" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" value="<?php echo $username; ?>" required></td>
            </tr>
            <tr>
                <td>email</td>
                <td>:</td>
                <td><input type="email" name="email" value="<?php echo $email; ?>" required></td>
            </tr>
            <tr>
                <td>password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Isi jika ingin mengganti" ></td>
                <td><input type="hidden" name="passwordSebelum"  value="<?php echo $password; ?>" ></td>
            </tr>
            <tr>
                <td><button type="submit" >Edit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>