<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL?>/css/style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php 
    if($_SESSION['status']!= 'admin' && $_SESSION['status'] != 'operator'){
        header('location:'.BASEURL.'/login');
    }
    ?>
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
            <li><a href="<?= BASEURL?>/home"><i class="fa fa-home"></i>Home </a> </li>
            <li><a href="<?= BASEURL?>/suratmasuk"><i class="fa fa-download"></i>Surat masuk </a> </li>
            <li><a href="<?= BASEURL?>/suratkeluar"><i class="fa fa-upload"></i>Surat Keluar </a> </li>

            <li><a href="<?= BASEURL?>/profile/<?=$_SESSION['user']['user_id']?>"><i class="fa fa-user"></i>Profile </a> </li>
            <?php 
            if($_SESSION['status']=='admin'){
                echo ' <li><a href="<?= BASEURL?>/pengguna"><i class="fa fa-address-book"></i>pengguna</a> </li>';   
            }

            ?>

        

            <li><a href="<?= BASEURL?>/logout"><i class="fa fa-power-off"></i>Log out </a> </li>
        </ul>
    </div>
    <section>


        </div>
        <div class="navbar">
            <h1>SKENSA LETTERING</h1>
            <img src="<?= BASEURL?>/image/logoskensa.png" alt="">

        </div>