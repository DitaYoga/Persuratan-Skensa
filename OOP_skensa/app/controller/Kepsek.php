<?php 
class Kepsek extends Controller{
    public function index(){
        $data['judul'] = "KEPSEK - Home";
        $data['suratmasuk']= $this->model('suratmasuk_model')->getSuratMasuk();
        $this->view('templates/kepsek/header', $data);
        $this->view('kepsek/index',$data);
        $this->view('templates/kepsek/footer');
    }
    public function suratmasuk(){
        $data['judul'] = "KEPSEK - Surat Masuk";
        $data['surat'] = $this->model('suratmasuk_model')->getSuratMasuk();
        $this->view('templates/kepsek/header', $data);
        $this->view('kepsek/suratmasuk',$data);
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