<?php
class Home extends Controller
{
    public function index()
    {
        $data['judul'] = "Home";
        $data['suratmasuk']= $this->model('suratmasuk_model')->getSuratMasuk();
        $data['suratkeluar']= $this->model('suratkeluar_model')->getArsipSurat();

        $this->view('templates/header', $data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}
