<?php 
class Profile_model{
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getprofile($id){
        $this->db->query("SELECT * FROM user WHERE user_id='$id'");
        return $this->db->single();
    }

    public function update($data)
    {

        $id = $data['id'];
        $nama = htmlspecialchars($data['nama']);
        $username = htmlspecialchars($data['username']);
        $password_baru = $data['password_baru'];
        if(empty($password_baru)){
            $query = "UPDATE user SET nama='$nama',username='$username' WHERE user_id='$id'";
            $this->db->query($query);
            $this->db->execute();
        }else{
            $password_baru= md5($password_baru);
            $query = "UPDATE user SET nama='$nama',username='$username',password='$password_baru' WHERE user_id='$id'";
            $this->db->query($query);
            $this->db->execute();
        }
        return 1;
    }
}