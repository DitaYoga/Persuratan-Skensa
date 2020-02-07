<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="asset/css/design1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    <div class="container">
        <div class="login-form">

            <div class="textbox">
            <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<p class='pesan'>Gagal Login! Username atau password salah</p>";
		}else if($_GET['pesan'] == "logout"){
			echo "<p class='pesanlogout'>Anda telah berhasil logout!</p>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "<p class='pesan'>Anda harus login untuk mengakses halaman admin!</p>";
		}
	}
	?>
                <form action="prosesLogin.php" method="post">

                    <h1>login</h1>
                    <li><i class="fa fa-user"></i><input type="text" name="username" placeholder="username" required autocomplete="off"></li>
                    <li><i class="fa fa-key"></i><input type="password" name="password" placeholder="password" required></li>
                </div>
                <button type="submit" name="submit" class="tombol">login</button>
            </form>
        </div>
        <div class="logo">
            <h2>Welcome to Skensa</h2>
            <img src="asset/image/gambar.png" alt="">
        </div>
        <div class="tulisan">

            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus porro error distinctio alias. Officiis, laudantium labore consequuntur cumque totam aliquam error rerum veniam, et placeat molestiae, neque similique magni at!</span>
        </div>

    </div>

</body>

</html>