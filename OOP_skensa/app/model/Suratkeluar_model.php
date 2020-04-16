<?php

class Suratkeluar_model
{
    private $table = 'arsip';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getArsipSurat()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function tambahsurat($data)
    {

        $alamat = htmlspecialchars($data["alamat"]);
        $nomor = htmlspecialchars($data["nomor"]);
        $lampiran = htmlspecialchars($data["lampiran"]);
        $perihal = htmlspecialchars($data["perihal"]);
        $dituju = htmlspecialchars($data["dituju"]);
        $this->db->query("INSERT INTO arsip(alamat, nomor, lampiran, perihal, dituju) VALUE(:alamat,:nomor,:lampiran,:perihal,:dituju)");
        $this->db->bind('alamat', $alamat);
        $this->db->bind('nomor', $nomor);
        $this->db->bind('lampiran', $lampiran);
        $this->db->bind('perihal', $perihal);
        $this->db->bind('dituju', $dituju);
        $this->db->execute();


        return $this->db->rowCount();
    }

    public function hapus($data)
    {
        $query = "DELETE FROM arsip WHERE id_arsip='$data'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusall($data)
    {
        $id = $_POST['pilih'];
        $jml_pilih = count($id);
        for ($x = 0; $x < $jml_pilih; $x++) {
            $query = "DELETE FROM arsip WHERE id_arsip='$id[$x]'";
            $this->db->query($query);
            $this->db->execute();
        }
        return $this->db->rowCount();
    }

    public function getUbah($data)
    {
        $this->db->query("SELECT * FROM arsip WHERE id_arsip='$data'");
        // $this->db->bind('id',$data);
        return $this->db->single();
    }

    public function ubah($data)
    {
        // var_dump($data);die;    
        $id = $data['id'];
        $alamat = htmlspecialchars($data["alamat"]);
        $nomor = htmlspecialchars($data["nomor"]);
        $lampiran = htmlspecialchars($data["lampiran"]);
        $perihal = htmlspecialchars($data["perihal"]);
        $dituju = htmlspecialchars($data["dituju"]);

        $query = "UPDATE arsip SET alamat=:alamat, nomor=:nomor, lampiran=:lampiran, perihal=:perihal, dituju=:dituju WHERE id_arsip='$id'";
        $this->db->query($query);
        $this->db->bind('alamat', $alamat);
        $this->db->bind('nomor', $nomor);
        $this->db->bind('lampiran', $lampiran);
        $this->db->bind('perihal', $perihal);
        $this->db->bind('dituju', $dituju);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
