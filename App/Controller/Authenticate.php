<?php
namespace App\Controller;

use Core\BaseController;
use App\Model\User;
class Authenticate extends BaseController{
    

    function login()
    {

        return $this->view('login');
    }

    public function logout()
    {
        session_destroy();
        header('location:'.BASE_URL);
    }

    function register()
    {
        return $this->view('register');
    }


    public function registerAction()
    {
        
        $user = new User();
        $create =  $user->create([
            'fullname' => $this->request('nama_lengkap'),
            'username' => $this->request('username'),
            'pass' => bcrypt($this->request('pass')),
        ]);
        if($create == 1){
            header('location:'.BASE_URL."/login");
        }else{

            message("Gagal Menyimpan");
            header('location:'.BASE_URL."/register");
        }

    }

    public function loginAction()
    {
        $user = new User();
        $login = $user->where('username',$this->request('username'))->exec();
        if(password_verify($this->request('pass'),$login[0]['pass'])){
         $_SESSION['id'] = $login[0]['id'];
         $_SESSION['user'] = $login[0];
        }else{
            message("Error Username / Password Wrong");
        }
        header('location:'.BASE_URL."/login");
    }


}