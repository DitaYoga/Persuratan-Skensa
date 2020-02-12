<<<<<<< HEAD:public/menu_utama.php
<?php

include "../config/config.php";

$query= "SELECT * FROM arsip";

$hasil= mysqli_query($conn, $query);

 ?>

=======
<?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:../index.php?pesan=belum_login");
}
?>
>>>>>>> e2c13a926089c085c12dd93699860f6affb583b0:public/index.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/halaman_utama.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="../asset/image/logoskensa.png" alt="">
            <h3>Persuratan Skensa</h3>
<<<<<<< HEAD:public/menu_utama.php
            <a href="tambah.php" class="tambahdata">Tambah Data Surat</a>
            <a href="" class="logout">Log out</a>
=======
            <a href="" class="tambahdata">Tambah Data Surat</a>
            <a href="logout.php" class="logout">Log out</a>
>>>>>>> e2c13a926089c085c12dd93699860f6affb583b0:public/index.php
        </div>
        <table border="1px solid black">
            <tr>
                <th rowspan="2">Nomor surat</th>
                <th rowspan="2">Lampiran</th>
                <th rowspan="2">Alamat ditinjau</th>
                <th colspan="3">surat keterangan</th>
                <th rowspan="2">dituju</th>
                <th rowspan="2">edit</th>
                <th rowspan="2">hapus</th>
            </tr>
            <tr>
                <th>tanggal</th>
                <th>nomor</th>
                <th>prihal</th>
            </tr>
            <?php
            $no= 1;
            while($data= mysqli_fetch_assoc($hasil)) {
             ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $data["lampiran"] ?></td>
              <td><?= $data["alamat"] ?></td>
              <td><?= $data["tanggal"] ?></td>
              <td><?= $data["nomor"] ?></td>
              <td><?= $data["perihal"] ?></td>
              <td><?= $data["dituju"] ?></td>
              <td class="edit"><a href="edit.php?id=<?= $data['id_arsip'] ?>" style="color:white; text-decoration:none;">Edit</a></td>
              <td class="hapus"><a href="hapus.php?id=<?= $data['id_arsip'] ?>" style="color:white; text-decoration:none;">Hapus</a> </td>
            </tr>
            <?php $no++; } ?>
        </table>
    </div>
</body>

</html>
