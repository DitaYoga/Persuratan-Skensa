<?php
class Login extends Controller
{
    public function index()
    {
        $this->View('login/index');
    }
    public function proses(){
        if($this->model('Login_model')->prosesLogin($_POST) != NULL ){

            $_SESSION['status']='login';
            $_SESSION['user']= $this->model('Login_model')->prosesLogin($_POST);
            header('location:'.BASEURL.'/home');
            exit;
        }else{
            Pesan::pesanLogin('Login Gagal! username atau password salah','pesan');
            header('location:'.BASEURL.'/login');
            exit;
        }
    }
}
