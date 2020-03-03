<?php 
    if(isset($_SESSION['pesan'])){
        Pesan::getPesan();
    }
?>
<div class="home">
    <div class="kiri">
        <div class="kotaksuratmasuk">
            <div class="isi">
                <h3><?= count($data['suratmasuk'])?></h3>
                <p>Surat Masuk</p>
            </div>
            <div class="icon" id="iconmasuk">
                <i class="fa fa-download"></i>
            </div>
            <a href="<?= BASEURL?>/suratmasuk" class="moreinfomasuk">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>


<div class="kanan">   
    <div class="kotaksuratkeluar">
        <div class="isi">
            <h3><?= count($data['suratkeluar'])?></h3>
            <p>Surat Keluar</p>
        </div>
        <div class="icon" id="iconkeluar">
            <i class=" fa fa-upload"></i>
        </div>
        <a href="<?= BASEURL?>/suratkeluar" class="moreinfokeluar">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
</div>