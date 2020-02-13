
<?php

include "../config/config.php";

$query= "SELECT * FROM arsip";

$hasil= mysqli_query($conn, $query);
session_start();
if($_SESSION['status']!="login"){
	header("location:../index.php?pesan=belum_login");
}
?>
<html lang="en">

<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/halaman_utama.css">
    <link rel="stylesheet" href="../asset/css/style1.css">
</head>

<body>

    <div class="container">
        <div class="header">
            <img src="../asset/image/logoskensa.png" alt="">
            <h3>Persuratan Skensa</h3>
            <a href="tambah.php" class="tambahdata">Tambah Data Surat</a>
            <a href="logout.php" class="logout">Log out</a>
        </div>
        <table border="1px solid black">
            <tr>
                <th rowspan="2">Nomor surat</th>
                <th rowspan="2">Lampiran</th>
                <th rowspan="2">Alamat ditinjau</th>
                <th colspan="3">surat keterangan</th>
                <th rowspan="2">dituju</th>
                <th colspan="2" rowspan="2">Action</th>
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
              <td class="icon">
                <i class="fa fa-pencil" id="edit"></i>
                <i class="fa fa-trash" id="hapus"></i>

              </td>
            </tr>
            <?php $no++; } ?>
        </table>
    </div>
</body>

</html>
