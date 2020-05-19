<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Relawan</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <h2>Ini Dashboard Relawan <?php echo $this->session->userdata('username');?></h2>

    <br><br>
    <a href="<?php echo base_url()."index.php/dashboardrelawan/logout";?>">Logout</a>
</body>
</html>