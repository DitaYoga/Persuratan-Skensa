<?php

include "../config/config.php";

$query = "SELECT * FROM arsip";

$hasil = mysqli_query($conn, $query);
session_start();
if ($_SESSION['status'] != "login") {
  header('location:../index.php?pesan=belum_login');
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Skensa Lettering - HOME</title>
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
      <li><a href="#popup"><i class="fa fa-edit"></i>Tambah Surat </a> </li>
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
        $no = 1;
        while ($data = mysqli_fetch_assoc($hasil)) {
        ?>
          <tr class="bodytable">
            <td><input type="checkbox" /></td>
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
        <?php $no++;
        } ?>
      </table>



    </div>
  </section>


  <div class="window" id="popup">

    <div class="popup">
      <div class="kotakpop">
          <h2>Tambah Data Surat</h2>
        <a href="#" class="close">X</a><br><br>
      </div>
      <form class="" action="proses-tambah.php" method="post">
        <div class="kiri">
          <label for="">Alamat Tujuan</label><br>
          <input type="text" name="alamat" required>
          <br><br>
          <label for="">Nomor</label><br>
          <input type="number" name="nomor" required>
          <br><br>
          <label for="">Lampiran</label><br>
          <input type="number" name="lampiran" required>
        </div>

        <div class="kanan">
          <label for="">Perihal</label><br>
          <input type="text" name="perihal" required>
          <br><br>
          <label for="">Dituju</label><br>
          <input type="text" name="dituju" required>
          <button type="submit" name="tambahdata">Tambah Data</button>
        </div>
      </form>
      </table>
    </div>
  </div>

</body>

</html>