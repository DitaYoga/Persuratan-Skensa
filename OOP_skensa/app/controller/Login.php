<?php
class Login extends Controller
{
    public function index()
    {
        $this->View('login/index');
    }
    public function proses(){
        if($this->model('Login_model')->prosesLogin($_POST) != NULL ){
            
            $data = $this->model('Login_model')->prosesLogin($_POST);
            $_SESSION['user']= $data;
            if($data['level']=="admin"){
                $_SESSION['status']='login';
                header('location:'.BASEURL.'/home');
                exit;
            }elseif($data['level']=="kepsek"){
                $_SESSION['status']='kepsek';
                header('location:'.BASEURL.'/kepsek');
                exit;
            }

            exit;
        }else{
            Pesan::pesanLogin('Login Gagal! username atau password salah','pesan');
            header('location:'.BASEURL.'/login');
            exit;
        }
    }
}
