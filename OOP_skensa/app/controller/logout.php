<?php 
class Logout {
    public function index(){
        Pesan::pesanLogin('Log out berhasil!','pesanlogout');
        unset($_SESSION['status']);
        header('location:'.BASEURL.'/login');
        exit;
    }
}