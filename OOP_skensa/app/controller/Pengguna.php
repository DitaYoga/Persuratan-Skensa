<?php
class Pengguna extends Controller
{
    public function index()
    {
        $data['judul'] = "Daftar Pengguna";
        $data['user'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('pengguna/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {

        if ($this->model("User_model")->tambah($_POST) > 0) {
            Pesan::setPesan('Data ', 'Berhasil', 'ditambah', 'berhasil');
            header('location:' . BASEURL . '/pengguna');
            exit;
        } else {
            Pesan::setPesan('Data ', 'Gagal', 'ditambah', 'gagal');
            header('location:' . BASEURL . '/pengguna');
            exit;
        }
    }
}
