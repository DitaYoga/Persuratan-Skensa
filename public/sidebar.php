<?php

include "../config/config.php";

$query= "SELECT * FROM arsip";

$hasil= mysqli_query($conn, $query);
session_start();
if($_SESSION['status']!="login"){
  header('location:../index.php?pesan=belum_login');
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>asda</title>
    <link rel="stylesheet" href="../asset/css/master.css">
    <link rel="stylesheet" href="../asset/css/master1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fa fa-navicon" id="open"></i>
      <i class="fa fa-close" id="close"></i>
    </label>
    <div class="sidebar">
        <header>
          <h1>MENU</h1>
        </header>
        <ul>
          <li><a href="#"><i class="fa fa-home"></i>Home </a> </li>
          <li><a href="tambah.php"><i class="fa fa-home"></i>Tambah Surat </a> </li>
          <li><a href="logout.php"><i class="fa fa-power-off"></i>Log out </a> </li>
        </ul>
    </div>
    <section>


    </div>
    <div class="navbar">
      <h1>SKENSA LETTERING</h1>
      <img src="../asset/image/logoskensa.png" alt="">

    </div>
    <div class="konten">
      <table cellspacing=0>
          <tr>
              <th rowspan="2"></th>
              <th rowspan="2">Nomor surat</th>
              <th rowspan="2">Lampiran</th>
              <th rowspan="2">Alamat ditinjau</th>
              <th colspan="3" class="srtket">surat keterangan</th>
              <th rowspan="2">dituju</th>
              <th colspan="2" rowspan="2">Action</th>
          </tr>
          <tr>
              <th id="lih">tanggal</th>
              <th id="lih" class="noo">nomor</th>
              <th id="lih">prihal</th>
          </tr>
          <?php
          $no= 1;
          while($data= mysqli_fetch_assoc($hasil)) {
           ?>
          <tr class="bodytable">
            <td><input type="checkbox"/></td>
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
  </section>

  </body>
</html>
