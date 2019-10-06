<?php
namespace App\Controller;

use Core\BaseController;
use App\Model\User;
use App\Model\Borrow;
class BookController extends BaseController{
    

    function borrow()
    {
        $user_id = $_SESSION['id'];
        $book_id = $this->request('book_id');
        $week = $this->request('week');

        $due_date = strtotime($week,time());
        
        $borrow = new Borrow();
        $c = $borrow->create([
            'user_id'=>$user_id,
            'book_id'=>$book_id,
            'due_date'=>date("Y-m-d",$due_date),
            'borrow_date'=>date("Y-m-d",time()),
        ]);
        if($c){
            header('location:'.BASE_URL."/detail?id=".$book_id);
        }
    }

}