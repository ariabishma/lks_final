<?php
namespace App\Controller;

use Core\BaseController;
use App\Model\User;
class AdminController extends BaseController{
    
    function index()
    {
    
        return $this->view('admin/dashboard');
    }

    public function category(Type $var = null)
    {
        # code...
        return $this->view('admin/data-category');
    }

    public function publisher(Type $var = null)
    {
        # code...
        return $this->view('admin/data-publisher');
    }

    public function book(Type $var = null)
    {
        # code...book
        return $this->view('admin/data-book');
    }

    public function addPenulis()
    {
    
        return $this->view('admin/form-penulis');
    }

 
}