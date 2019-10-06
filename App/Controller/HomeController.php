<?php
namespace App\Controller;

use Core\BaseController;
use App\Model\Book;
class HomeController extends BaseController{
    
    function index()
    {
        $u = new Book();
        $r = $u->custom("SELECT books.*, authors.name as auth_name, publishers.name as pub_name  FROM books LEFT JOIN publishers ON publishers.id = books.publisher_id LEFT JOIN authors ON authors.id = books.author_id")->exec();
        // echo $r;
        return $this->view('home',['data'=>$r]);
    }

    function detail()
    {
        $u = new Book();
        $id = $this->request('id');
        $u = $u->custom("SELECT books.*, authors.name as auth_name, publishers.name as pub_name  FROM books LEFT JOIN publishers ON publishers.id = books.publisher_id LEFT JOIN authors ON authors.id = books.author_id WHERE books.id = '$id'")->exec();
       
        if(!$u){
             return $this->view('error/404');
        }else{
            return $this->view('detail',['buku'=>$u]);
        }
    }

  


    public function _404()
    {
        return $this->view('error/404');
        # code...
    }
}