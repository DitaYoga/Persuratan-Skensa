<?php

include "../config/config.php";

$id= $_GET['id'];
$alamat= $_POST["alamat"];
$lampiran= $_POST["lampiran"];
$tanggal= $_POST["tanggal"];
$nomor= $_POST["nomor"];
$dituju= $_POST["dituju"];
$perihal = $_POST['perihal'];

$query= "UPDATE arsip SET alamat='$alamat',tanggal='$tanggal',lampiran='$lampiran',nomor='$nomor',dituju='$dituju',perihal='$perihal' WHERE id_arsip=$id";

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
