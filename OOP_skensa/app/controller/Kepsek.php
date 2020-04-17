<?php 
class Kepsek extends Controller{
    public function index(){
        $data['judul'] = "KEPSEK - Home";

        $this->view('templates/kepsek/header', $data);
        $this->view('kepsek/index');
        $this->view('templates/kepsek/footer');
    }
    public function suratmasuk(){
        $data['judul'] = "KEPSEK - Home";

        $this->view('templates/kepsek/header', $data);
        $this->view('kepsek/suratmasuk');
        $this->view('templates/kepsek/footer');
    }
    public function profile(){
        $data['judul'] = "KEPSEK - Home";

        $this->view('templates/kepsek/header', $data);
        $this->view('kepsek/profile');
        $this->view('templates/kepsek/footer');
    }
}
?>