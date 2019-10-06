<?php
namespace App\Middleware;

class CekLogin{
    public function Run()
    {
        if(isset($_SESSION['id'])){
            return true;
        }
        return false;
    }
}