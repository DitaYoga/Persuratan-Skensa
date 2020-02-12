<?php

include "../config/config.php";

$id= $_POST['id'];
$alamat= $_POST["alamat"];
$lampiran= $_POST["lampiran"];
$tanggal= $_POST["tanggal"];
$nomor= $_POST["nomor"];
$dituju= $_POST["dituju"];

$query= "UPDATE arsip SET alamat='$alamat',tanggal='$tanggal',lampiran='$lampiran',nomor='$nomor',dituju='$dituju' WHERE id_arsip=$id";

$hasil= mysqli_query($conn, $query);

if ($hasil) {
  header('location:index.php');
}else {
  echo "
    <script>
      alert('Data Anda Gagal di Update!!');
    </script>
  ";
}
 ?>
