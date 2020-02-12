<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="../asset/css/tambah.css">
  </head>
  <body>
    <h1>Tambah Data Surat</h1>
    <div class="kotak-form">
      <form class="" action="proses-tambah.php" method="post">
        <div class="kiri">
          <label for="">Alamat Tujuan</label><br>
          <input type="text" name="alamat" required>
          <br><br>
          <label for="">Nomor</label><br>
          <input type="number" name="nomor" required>
          <br><br>
          <label for="">Lampiran</label><br>
          <input type="number" name="lampiran" required>
          <button type="submit" name="cancel"><a href="menu_utama.php" style="color:black; text-decoration:none;">Cancel</a></button>
        </div>

        <div class="kanan">
          <label for="">Perihal</label><br>
          <input type="text" name="perihal" required>
          <br><br>
          <label for="">Dituju</label><br>
          <input type="text" name="dituju" required>
          <button type="submit" name="tambahdata">Tambah Data</button>
        </div>
      </form>
    </div>
  </body>
</html>
