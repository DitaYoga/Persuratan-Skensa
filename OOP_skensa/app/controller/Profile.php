<?php 
class Profile extends Controller {
    public function index(){
        $data['judul'] = "Profile";
        $data['profile']= $this->model('profile_model')->getProfile($_SESSION['user']['user_id']);
        // $data['suratkeluar']= $this->model('suratkeluar_model')->getArsipSurat();

        $this->view('templates/header', $data);
        $this->view('profile/index',$data);
        $this->view('templates/footer');
    }
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
