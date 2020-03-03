<?php 
class User extends Controller{
    public function update(){
        
        if ($this->model('User_model')->update($_POST) > 0) {
            Pesan::setPesan('Profile','Berhasil','diedit','berhasil');
            header('location:'.BASEURL);
            exit;
        }else{
            Pesan::setPesan('Profile','Gagal','diedit','gagal');
            header('location:'.BASEURL);
            exit;
        }
    }
}