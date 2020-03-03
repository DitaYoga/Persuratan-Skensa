<?php
class Pesan{
    public static function setPesan($pesan1,$pesan2,$aksi,$tipe){
        $_SESSION['pesan']=[
            'pesan1'=> $pesan1,
            'pesan2'=> $pesan2,
            'aksi'=> $aksi,
            'tipe'=> $tipe
        ];
    }

    public static function getPesan(){
        if(isset($_SESSION['pesan'])){
            echo '<div class="kotakpesan">
            <div class="pesan">
                <p class="logopesan pesan-'.$_SESSION['pesan']['tipe'].'"></p>
                <p>'.$_SESSION['pesan']['pesan1'].' <strong>'.$_SESSION['pesan']['pesan2'].'</strong> '.$_SESSION['pesan']['aksi'].' </p>
                <a href="" class="tombol tombol-pesan">OK</a>
            </div>
        </div>';
        }
        unset($_SESSION['pesan']);
    }
    public static function pesanLogin($pesan,$tipe){
        $_SESSION['pesan']=[
            'pesan'=> $pesan,
            'tipe'=> $tipe,
        ];
    }

    public static function getLogin(){
        if(isset($_SESSION['pesan'])){
            echo '<p class="'.$_SESSION['pesan']['tipe'].'">'.$_SESSION['pesan']['pesan'].'</p>';
        }
        unset($_SESSION['pesan']);
    }
}