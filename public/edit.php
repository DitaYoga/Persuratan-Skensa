<?php

include "../config/config.php";
$id=$_GET["id"];
$query= "SELECT * FROM arsip WHERE id_arsip=" .$id;
$hasil= mysqli_query($conn, $query);

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Tambah Data</title>
     <link rel="stylesheet" href="../asset/css/tambah.css">
   </head>
   <body>
     <h1>Tambah Data Surat</h1>
     <div class="kotak-form">
       <form class="" action="proses-edit.php" method="post">
           <?php while($data= mysqli_fetch_array($hasil)){ ?>

         <div class="kiri">
           <label for="">Alamat Tujuan</label><br>
           <input type="text" name="alamat" value="<?= $data['alamat'] ?>" required>
           <br><br>
           <label for="">Nomor</label><br>
           <input type="number" name="nomor" value="<?= $data['nomor'] ?>" required>
           <br><br>
           <label for="">Lampiran</label><br>
           <input type="number" name="lampiran" value="<?= $data['lampiran'] ?>" required>
           <button type="submit" name="cancel"><a href="menu_utama.php?id=<?= $id ?>" style="color:black; text-decoration:none;">Cancel</a> </button>
         </div>

         <div class="kanan">
           <label for="">Tanggal</label><br>
           <input type="datetime" name="tanggal" value="<?= $data['tanggal'] ?>">
           <br><br>
           <label for="">Perihal</label><br>
           <input type="text" name="perihal" value="<?= $data['perihal'] ?>" required>
           <br><br>
           <label for="">Dituju</label><br>
           <input type="text" name="dituju" value="<?= $data['dituju'] ?>" required>
           <input type="hidden" name="id" value="<?= $data['id_arsip'] ?>">
           <button type="submit" name="submit">Edit Data</button>
         </div>
       </form>
       <?php } ?>
     </div>
   </body>
 </html>
