<?php
class Suratmasuk extends Controller
{
    public function index()
    {
        $data['judul'] = "Surat Masuk";
        $data['surat'] = $this->model('suratmasuk_model')->getSuratMasuk();
        $this->view('templates/header', $data);
        $this->view('suratmasuk/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data = $_POST;
        if ($this->model('suratmasuk_model')->tambahdata($data) > 0) {
            Pesan::setPesan('Data surat', 'berhasil', 'ditambah', 'berhasil');
            header('location:' . BASEURL . '/suratmasuk');
            exit;
        } else {
            Pesan::setPesan('Data surat', 'gagal', 'ditambah', 'gagal');
            header('location:' . BASEURL . '/suratmasuk');
            exit;
        }
    }

    public function hapus($data)
    {
        if ($this->model('suratmasuk_model')->hapus($data) > 0) {
            Pesan::setPesan('Data surat', 'berhasil', 'dihapus', 'berhasil');
            header('location:' . BASEURL . '/suratmasuk');
            exit;
        } else {
            Pesan::setPesan('Data surat', 'gagal', 'dihapus', 'gagal');
            header('location:' . BASEURL . '/suratmasuk');
            exit;
        }
    }
    public function hapusall()
    {
        $data = $_POST['pilih'];
        if ($this->model('Suratmasuk_model')->hapusall($data) > 0) {
            Pesan::setPesan('Data Surat', 'Berhasil', 'dihapus', 'berhasil');
            header('location:' . BASEURL . '/suratmasuk');
            exit;
        } else {
            Pesan::setPesan('Data Surat', 'Gagal', 'dihapus', 'gagal');
            header('location:' . BASEURL . '/suratmasuk');
            exit;
        }
    }

    public function getUbah(){
    echo json_encode( $this->model('Suratmasuk_model')->getubah($_POST['id']));
    }

    public function ubah(){
        if ($this->model('suratmasuk_model')->ubah($_POST) > 0) {
            Pesan::setPesan('Data surat', 'berhasil', 'diubah', 'berhasil');
            header('location:' . BASEURL . '/suratmasuk');
            exit;
        } else {
            Pesan::setPesan('Data surat', 'gagal', 'diubah', 'gagal');
            header('location:' . BASEURL . '/suratmasuk');
            exit;
        }
    }
}
