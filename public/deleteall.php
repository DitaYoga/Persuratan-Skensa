<?php 	
	include "../config/config.php";
	$id=$_POST['pilih'];
	$jml_pilih = count($id);
	for($x=0;$x<$jml_pilih;$x++){
    		$hapus=mysqli_query($conn,"DELETE FROM arsip WHERE id_arsip='$id[$x]'");
	}
	if ($hapus) {        
            header("location:index.php");
        } 
        else{
            echo "Oops! Error 404...";
        }

 ?>