<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relawan</title>
</head>
<body>
    <h1>Relawan</h1>
    <a href="<?php echo base_url()."index.php/relawankitabantu/daftar_relawan";?>">Daftar Relawan</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th>aksi</th>
        </tr>
        <?php 
            $no = 1;
            foreach ($data as $r){
        ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $r['username'];?></td>
            <td><?php echo $r['email'];?></td>
            <td>
                <a href="<?php echo base_url()."index.php/relawankitabantu/edit_relawan/".$r['id_relawan'];?>">Edit</a> |
                <a href="<?php echo base_url()."index.php/relawankitabantu/hapus_relawan/".$r['id_relawan'];?>">Hapus</a> 
            </td>
        </tr>
        <?php
            $no++;
            }
        ?>
    </table>

    <br><h1>Login Relawan</h1>
    <form action="<?php echo base_url()."index.php/relawankitabantu/proses_login_relawan"; ?>" method="POST">
        <table>
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
                <td><button type="submit" >Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>