<?php

include "../config/config.php";

$query = "SELECT * FROM arsip";

$hasil = mysqli_query($conn, $query);


session_start();
if ($_SESSION['status'] != "login") {
  header('location:../index.php?pesan=belum_login');
}
if ($_SESSION['test'] == "") {
  $_SESSION['test'] = 1;
}else{
  $dataid = $_SESSION['test'];
}

session_encode();

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
          <th rowspan="2" ><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
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
        while ($data = mysqli_fetch_array($hasil)) {
        ?><form action="deleteall.php" method="POST" name="postform" enctype="multipart/form-data">
          <tr class="bodytable">
            <td><input  type="checkbox" name="pilih[]" value="<?php echo $data['id_arsip'] ?>" /></td>
            <td><?= $no; ?></td>
            <td><?= $data["lampiran"] ?></td>
            <td><?= $data["alamat"] ?></td>
            <td><?= $data["tanggal"] ?></td>
            <td><?= $data["nomor"] ?></td>
            <td><?= $data["perihal"] ?></td>
            <td><?= $data["dituju"] ?></td>
            <td class="icon">
            <a href="clickedit.php?id=<?php echo $data['id_arsip'] ?>"><i class="fa fa-pencil" id="edit"></i></a>
            <span>|</span>
            <a href="hapus.php?id=<?= $data['id_arsip'] ?>" style="color:red;"><i class="fa fa-trash" id="hapus"></i></a>

            </td>
          </tr>
        <?php $no++;
        } ?><input type="submit" href="deleteall.php" value="Delete Selected file" class="deleteall" /></form>
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
          <input type="text" name="dituju" required><br>
          <button type="submit" name="tambahdata">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>


<?php 
  $queryedit="SELECT * FROM arsip WHERE id_arsip=".$dataid;
  $viewedit = mysqli_query($conn,$queryedit);
  $dataedit = mysqli_fetch_array($viewedit);
  

 ?>
  <div class="windowedit" id="popupedit">

    <div class="popupedit">
      <div class="kotakpopedit">
          <h2>Edit data Surat</h2>
        <a href="#" class="close">X</a><br><br>
      </div>
      <form class="" action="proses-edit.php?id=<?php echo $dataid ?>" method="post">
        <div class="kiri">
          <label for="">Alamat Tujuan</label><br>
          <input type="text" name="alamat" value="<?php echo $dataedit['alamat'] ?>" required>
          <br><br>
          <label for="">Nomor</label><br>
          <input type="number" name="nomor" value="<?php echo $dataedit['nomor'] ?>" required>
          <br><br>
          <label for="">Lampiran</label><br>
          <input type="number" name="lampiran" value="<?php echo $dataedit['lampiran'] ?>" required>
        </div>
        <input type="hidden" value="<?php echo $dataedit['tanggal'] ?>" name="tanggal">
        <div class="kanan">
          <label for="">Perihal</label><br>
          <input type="text" name="perihal" value="<?php echo $dataedit['perihal'] ?>" required>
          <br><br>
          <label for="">Dituju</label><br>
          <input type="text" name="dituju" value="<?php echo $dataedit['dituju'] ?>" required><br>
          <button type="submit" name="editdata">Edit Data</button>
        </div>
      </form>
    </div>
  </div>




</body>

</html>
<script type="text/javascript">
 function checkAll(tes) {
       var checkboxes = document.getElementsByTagName("input");
       if (tes.checked) {
           for (var i = 1; i <= checkboxes.length + 1; i++) {
               if (checkboxes[i].type == 'checkbox' ) {
                   checkboxes[i].checked = true;
               }
           }
       } else {
           for (var i = 1; i <= checkboxes.length + 1; i++) {
               if (checkboxes[i].type == 'checkbox') {
                   checkboxes[i].checked = false;
               }
           }
       }
   }
</script>
