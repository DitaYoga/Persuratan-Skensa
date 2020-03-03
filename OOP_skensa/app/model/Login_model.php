<?php 
class Login_model{
    public function __construct()
    {
        $this->db = new Database;
    }
    public function prosesLogin($data){
        $username = $data['username'];
        $password = md5($data['password']);
        $query= "SELECT * FROM user WHERE username='$username' && password='$password'";
        $this->db->query($query);
        return $this->db->single();
    }
}