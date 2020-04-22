<?php
if (isset($_SESSION['pesan'])) {
    Pesan::getPesan();
}
?>
<div class="pengguna">

    <center>
        <h1>Daftar Pengguna</h1>
    </center>
    <a href="#popup" class="tombol tombol-biru tambah-pengguna">Tambah Pengguna</a>
    <table cellspacing="0">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>username</th>
            <th>Level</th>
        </tr>
        <?php
        $no = 1;
        foreach ($data['user'] as $data) {
        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['username'] ?></td>
                <td><?= $data['level'] ?></td>
            </tr>
        <?php $no++;
        } ?>
    </table>


    <div class="window" id="popup">

        <div class="popup">
            <div class="kotakpop">
                <h2 id="judulpopupmasuk">Tambah Pengguna</h2>
                <a href="" class="close">X</a><br><br>
            </div><br>

            <form action="<?= BASEURL ?>/pengguna/tambah" method="post" id="formUbahMasuk">
            <div class="isi-form">

                <label for="">Nama</label><br>
                <input type="text" name="nama" required autocomplete="off">
                <br><br>
                <label for="">Username</label><br>
                <input type="text" name="username" required autocomplete="off">
                <br><br>
                <label for="">Level</label><br>
                <select name="level" id="">
                    <option value="admin">admin</option>
                    <option value="operator">operator</option>
                    <option value="kepsek">kepsek</option>
                </select>
                <br><br>
                <label for="">Password</label><br>
                <input type="password" name="password" required autocomplete="off">
            </div>


                <div class="bataltambah">
                    <a href="" class="tombol tombol-light" id="batal">Batal</a>
                    <button type="submit" name="tambahdata" id="tombolpopupmasuk" class="tombol tombol-biru tambahsmasuk">Tambah Pengguna</button>
                </div>
            </form>
        </div>
    </div>

</div>