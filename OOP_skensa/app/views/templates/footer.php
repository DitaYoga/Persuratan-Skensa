<div class="window" id="profile">
    <div class="popup">
        <div class="kotakpop">
            <h2 id="judulpopup">Profile</h2>
            <a href="" class="close">X</a><br><br>
        </div><br><br>
        <form action="<?= BASEURL ?>/user/update" method="post">
            <table id="tableProfile">
                <tr class="trprofile">
                    <input type="hidden" name="id" value="<?= $_SESSION['user']['id_user'] ?>">
                    <td> <label for="">nama</label></td>
                    <td><input type="text" name="nama" value="<?= $_SESSION['user']['nama'] ?>" required autocomplete="off"></td>
                </tr>
                <tr class="trprofile">
                    <td><label for="">Username</label></td>
                    <td> <input type="text" name="username" value="<?= $_SESSION['user']['username'] ?>" required autocomplete="off"></td>
                </tr>
                <tr class="trprofile">
                    <td><label for="">password baru</label></td>
                    <td><input type="password" name="password_baru" autocomplete="off"></td>
                </tr>
            </table>
            <div class="bataltambah">
                <a href="" class="tombol tombol-light" id="batal">Batal</a>
                <button type="submit" name="tambahdata" class="tombol tombol-biru tambahsmasuk">Edit Profile</button>
            </div>
        </form>
    </div>
</div>

<script src="<?= BASEURL ?>/js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<script src="<?= BASEURL ?>/js/script.js"></script>
</body>

</html>