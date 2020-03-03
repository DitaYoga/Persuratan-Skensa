<?php
if (isset($_SESSION['pesan'])) {
    Pesan::getPesan();
}
?>
<center><h1>Arsip Surat Keluar</h1></center>
<table cellspacing=0>
    <tr>
        <th class="th-none">
            <a href="#popup" class="tombol tombol-biru" id="tambahdatakeluar">Tambah Data</a></th>
        <th class="th-none"></th>
        <th class="th-none"></th>
        <th class="th-none"></th>
        <th class="th-none"></th>
        <th class="th-none"></th>
        <th class="th-none"></th>
        <th class="th-none"></th>
        <th class="th-none"></th>
    </tr>
    <tr>
        <th rowspan="2"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
        <th rowspan="2">Nomor</th>
        <th rowspan="2">Lampiran</th>
        <th rowspan="2">Alamat ditinjau</th>
        <th colspan="3" class="srtket">surat keterangan</th>
        <th rowspan="2">dituju</th>
        <th colspan="2" rowspan="2">Action</th>
    </tr>
    <tr>
        <th id="lih">tanggal</th>
        <th id="lih" class="noo">nomor surat</th>
        <th id="lih">prihal</th>
    </tr>
    <?php
    $no = 1;
    foreach ($data['arsips'] as $data) {
    ?><form action="<?= BASEURL?>/suratkeluar/hapusall" method="POST" name="postform" enctype="multipart/form-data">
            <tr class="bodytable">
                <td><input type="checkbox" name="pilih[]" value="<?php echo $data['id_arsip'] ?>" /></td>
                <td><?= $no; ?></td>
                <td><?= $data["lampiran"] ?></td>
                <td><?= $data["alamat"] ?></td>
                <td><?= $data["tanggal"] ?></td>
                <td><?= $data["nomor"] ?></td>
                <td><?= $data["perihal"] ?></td>
                <td><?= $data["dituju"] ?></td>
                <td class="icon">
                    <a href="#popup" class="editsuratkeluar"  data-id="<?= $data['id_arsip']?>"><i class="fa fa-pencil" id="edit"></i></a>
                    <span>|</span>
                    <a href="<?= BASEURL ?>/suratkeluar/hapus/<?= $data['id_arsip'] ?>" onclick="return confirm('yakin ingin menghapus arsip surat?')" style="color:red;"><i class="fa fa-trash" id="hapus"></i></a>

                </td>
            </tr>
        <?php $no++;
    } ?><input type="submit" onclick="return confirm('yakin')" value="Delete Selected file" class=" tombol tombol-merah deleteall" />
        </form>
</table>




<!-- POP UP -->
<div class="window" id="popup">

    <div class="popup">
        <div class="kotakpop">
            <h2 id="judulpopupkeluar">Tambah Data Surat</h2>
            <a href="" class="close">X</a><br><br>
        </div><br><br>
        <form action="<?= BASEURL ?>/suratkeluar/tambah" id="formUbahKeluar" method="post">
            <div class="kiri">
                <input type="hidden" name="id" id="idKeluar">
                <label for="">Alamat Tujuan</label><br>
                <input type="text" name="alamat" id="alamat" required autocomplete="off">
                <br><br>
                <label for="">Nomor</label><br>
                <input type="number" name="nomor" id="nomor" required autocomplete="off">
                <br><br>
                <label for="">Lampiran</label><br>
                <input type="number" name="lampiran" id="lampiran" required autocomplete="off">
            </div>

            <div class="kanan">
                <label for="">Perihal</label><br>
                <input type="text" name="perihal" id="perihal" required autocomplete="off">
                <br><br>
                <label for="">Dituju</label><br>
                <input type="text" name="dituju" id="dituju" required autocomplete="off"><br>
            </div>
            <div class="bataltambah">
                <a href="" class="tombol tombol-light" id="batal">Batal</a>
                <button type="submit" name="tambahdata" id="tombolpopupkeluar" class="tombol tombol-biru tambahsmasuk">Tambah Data</button>
            </div>
        </form>
    </div>
</div>


<!-- <script>
    var edit = document.getElementById('editsurat');
    edit.addEventListener('click',function(e){
        document.getElementById('judulpopup').innerHTML='Ubah Data Surat';
        document.getElementById('tombolpopup').innerHTML='Ubah Data';
        $.ajax({
            url:'http://localhost/persuratan_skensa/OOP_skensa/public/suratmasuk/getubah',
            data:{id:id},
            method:'post',
            dataType:'json',
            success: function (data){
                console.log(data);
            }
        });
    });

</script> -->