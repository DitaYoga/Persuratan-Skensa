<?php

include "../config/config.php";

$id= $_GET['id'];

$query= "DELETE FROM arsip WHERE id_arsip=$id";

$hasil= mysqli_query($conn, $query);

if ($hasil) {
  header('location:index.php');
}else {
  echo "
    <script>
      alert('Data Anda Gagal dihapus!!');
    </script>
  ";
}

 ?>
