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
        </tr>
        <?php 
            $no = 1;
            foreach ($data as $r){
        ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $r['username'];?></td>
            <td><?php echo $r['email'];?></td>
        </tr>
        <?php
            $no++;
            }
        ?>
    </table>
</body>
</html>