<?php
namespace App\Middleware;

class CekAdmin{
    public function Run()
    {
        if($_SESSION['user']['level'] == 'admin'){
            return true;
        }
        header('location:'.BASE_URL);
        return false;
    }
}