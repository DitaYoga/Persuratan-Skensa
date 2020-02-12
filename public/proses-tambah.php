<?php

include "../config/config.php";

if (isset($_POST['tambahdata'])) {
  $alamat= $_POST["alamat"];
  $nomor= $_POST["nomor"];
  $lampiran= $_POST["lampiran"];
  $perihal= $_POST["perihal"];
  $dituju= $_POST["dituju"];
}

$query= "INSERT INTO arsip(alamat, nomor, lampiran, perihal, dituju)
                      VALUE('$alamat','$nomor','$lampiran','$perihal','$dituju')";

$hasil= mysqli_query($conn, $query);

if ($hasil) {
  header('location:index.php');
}else {
  echo "
    <script>
      alert('Data Anda gagal ditambahkan!!');
    </script>
  ";
}

 ?>
