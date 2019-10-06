<?php
namespace App\Middleware;

class CekLogout{
    public function Run()
    {
        if(isset($_SESSION['id'])){
            header('location:'.BASE_URL);
            return false;
        }
        return true;
    }
}