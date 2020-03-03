<?php
class Suratmasuk_model
{
    private $table = 'surat_masuk';
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getSuratMasuk()
    {
        $query = "SELECT * FROM $this->table";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function tambahData($data)
    {
        $alamat = htmlspecialchars($data["alamat"]);
        $nomor = htmlspecialchars($data["nomor"]);
        $lampiran = htmlspecialchars($data["lampiran"]);
        $perihal = htmlspecialchars($data["perihal"]);
        $dituju = htmlspecialchars($data["dituju"]);
        $query = "INSERT INTO $this->table (alamat_pengirim, nomor, lampiran, perihal, dituju) VALUE(:alamat,:nomor,:lampiran,:perihal,:dituju)";
        $this->db->query($query);
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
        $this->db->query("DELETE FROM surat_masuk WHERE id_suratMasuk ='$data'");
        $this->db->execute();
        return $this->db->rowcount();
    }
    public function hapusall($data)
    {
        $id = $data;
        $jml_pilih = count($id);
        for ($x = 0; $x < $jml_pilih; $x++) {
            $query = "DELETE FROM surat_masuk WHERE id_suratMasuk='$data[$x]'";
            $this->db->query($query);
            $this->db->execute();
        }
        return $this->db->rowCount();
    }

    public function getUbah($data)
    {
        $this->db->query("SELECT * FROM surat_masuk WHERE id_suratMasuk='$data'");
        // $this->db->bind('id',$data);
        return $this->db->single();
    }

    public function ubah($data){
        $id = $data['id'];
        $alamat = htmlspecialchars($data["alamat"]);
        $nomor = htmlspecialchars($data["nomor"]);
        $lampiran = htmlspecialchars($data["lampiran"]);
        $perihal = htmlspecialchars($data["perihal"]);
        $dituju = htmlspecialchars($data["dituju"]);

        $query = "UPDATE surat_masuk SET 
        alamat_pengirim=:alamat, nomor=:nomor, lampiran=:lampiran, perihal=:perihal, dituju=:dituju
        WHERE id_suratMasuk='$id'
        ";
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
