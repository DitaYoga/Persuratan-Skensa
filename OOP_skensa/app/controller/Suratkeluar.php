<?php
class Suratkeluar extends Controller
{
    public function index()
    {
        $data['judul'] = "Surat keluar";
        $data['arsips'] = $this->model('Suratkeluar_model')->getArsipSurat();
        $this->view('templates/header', $data);
        $this->view('suratkeluar/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Suratkeluar_model')->tambahsurat($_POST) > 0) {
            Pesan::setPesan('Data Surat', 'Berhasil', 'ditambah', 'berhasil');
            header('location:' . BASEURL . '/suratkeluar');
            exit;
        } else {
            Pesan::setPesan('Data Surat', 'Gagal', 'ditambah', 'gagal');
            header('location:' . BASEURL . '/suratkeluar');
            exit;
        }
    }

    public function hapus($data)
    {
        if ($this->model('Suratkeluar_model')->hapus($data) > 0) {
            Pesan::setPesan('Data Surat', 'Berhasil', 'dihapus', 'berhasil');
            header('location:' . BASEURL . '/suratkeluar');
            exit;
        } else {
            Pesan::setPesan('Data Surat', 'Gagal', 'dihapus', 'gagal');
            header('location:' . BASEURL . '/suratkeluar');
            exit;
        }
    }
    public function hapusall()
    {
        $data = $_POST['pilih'];
        if ($this->model('Suratkeluar_model')->hapusall($data) > 0) {
            Pesan::setPesan('Data Surat', 'Berhasil', 'dihapus', 'berhasil');
            header('location:' . BASEURL . '/suratkeluar');
            exit;
        } else {
            Pesan::setPesan('Data Surat', 'Gagal', 'dihapus', 'gagal');
            header('location:' . BASEURL . '/suratkeluar');
            exit;
        }
    }
    public function getUbah()
    {
        echo json_encode($this->model('Suratkeluar_model')->getubah($_POST['id']));
    }

    public function ubah(){
        if ($this->model('suratkeluar_model')->ubah($_POST) > 0) {
            Pesan::setPesan('Data surat', 'berhasil', 'diubah', 'berhasil');
            header('location:' . BASEURL . '/suratkeluar');
            exit;
        } else {
            Pesan::setPesan('Data surat', 'gagal', 'diubah', 'gagal');
            header('location:' . BASEURL . '/suratkeluar');
            exit;
        }
    }
}
