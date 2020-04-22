<center>
    <h1>Arsip Surat Masuk</h1>
</center>
<table cellspacing=0>
    <tr>
        <th class="th-none"></th>
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
        <th rowspan="2">Nomor</th>
        <th rowspan="2">Lampiran</th>
        <th rowspan="2">Alamat pengirim</th>
        <th colspan="3" class="srtket">surat keterangan</th>
        <th rowspan="2">dituju</th>
        <th rowspan="2">Action</th>
    </tr>
    <tr>
        <th id="lih">tanggal</th>
        <th id="lih" class="noo">nomor surat</th>
        <th id="lih">prihal</th>
    </tr>
    <?php
    $no = 1;
    foreach ($data['surat'] as $data) {
    ?> <tr class="bodytable">
            <td><?= $no; ?></td>
            <td><?= $data["lampiran"] ?></td>
            <td><?= $data["alamat_pengirim"] ?></td>
            <td><?= $data["tanggal"] ?></td>
            <td><?= $data["nomor"] ?></td>
            <td><?= $data["perihal"] ?></td>
            <td><?= $data["dituju"] ?></td>
            <td>
              <a href=""><i class="fa fa-check"></i></a>
              |
              <a href=""><i class="fa fa-times"></i></a>
            </td>
           
        </tr>
    <?php $no++;
    } ?>
</table>