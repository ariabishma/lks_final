<?php

require __DIR__."/../__init__.php";

$request_uri = explode("/",rtrim($_SERVER['REQUEST_URI'],"/"));

$route = ".";

for ($i=3; $i < count($request_uri) ; $i++) { 
    $clear = explode("?",$request_uri[$i]);
   
    if(count($clear) != 0){
        $route .= $clear[0].".";
    }else{
        $route .= $request_uri[$i].".";
    }
}

if(count($request_uri) != 3){
    $route = rtrim($route,".");
}




$routes = [
    '.' => [
        'cont' => '\App\Controller\HomeController',
        'fun' => 'index',
        'mid' => []
    ],

    '.detail' => [
        'cont' => '\App\Controller\HomeController',
        'fun' => 'detail',
        'mid' => []
    ],

    '.detail.borrow' => [
        'cont' => '\App\Controller\BookController',
        'fun' => 'borrow',
        'mid' => []
    ],

    

    '.login' => [
        'cont' => '\App\Controller\Authenticate',
        'fun' => 'login',
        'mid' => ['\App\Middleware\CekLogout']
    ],

    '.logout' => [
        'cont' => '\App\Controller\Authenticate',
        'fun' => 'logout',
        'mid' => []
    ],

    '.login.action' => [
        'cont' => '\App\Controller\Authenticate',
        'fun' => 'loginAction',
        'mid' => ['\App\Middleware\CekLogout']
    ],


    '.register' => [
        'cont' => '\App\Controller\Authenticate',
        'fun' => 'register',
        'mid' => ['\App\Middleware\CekLogout']
    ],

    '.register.action' => [
        'cont' => '\App\Controller\Authenticate',
        'fun' => 'registerAction',
        'mid' => ['\App\Middleware\CekLogout']
    ],



    '.admin' => [
        'cont' => '\App\Controller\AdminController',
        'fun' => 'index',
        'mid' => ['\App\Middleware\CekLogin','\App\Middleware\CekAdmin']
    ],


    '.admin.category' => [
        'cont' => '\App\Controller\AdminController',
        'fun' => 'category',
        'mid' => ['\App\Middleware\CekLogin','\App\Middleware\CekAdmin']
    ],

    '.admin.publisher' => [
        'cont' => '\App\Controller\AdminController',
        'fun' => 'publisher',
        'mid' => ['\App\Middleware\CekLogin','\App\Middleware\CekAdmin']
    ],

    '.admin.book' => [
        'cont' => '\App\Controller\AdminController',
        'fun' => 'book',
        'mid' => ['\App\Middleware\CekLogin','\App\Middleware\CekAdmin']
    ],



    '.admin.penulis.add' => [
        'cont' => '\App\Controller\AdminController',
        'fun' => 'addPenulis',
        'mid' => ['\App\Middleware\CekLogin']
    ],

    '.admin.category.add' => [
        'cont' => '\App\Controller\AdminController',
        'fun' => 'addCategory',
        'mid' => ['\App\Middleware\CekLogin']
    ],

    '.admin.publisher.add' => [
        'cont' => '\App\Controller\AdminController',
        'fun' => 'addPublisher',
        'mid' => ['\App\Middleware\CekLogin']
    ],

    '.admin.book.add' => [
        'cont' => '\App\Controller\AdminController',
        'fun' => 'addBook',
        'mid' => ['\App\Middleware\CekLogin']
    ],

    

];

// echo $route;
if(empty($routes[$route])){
    $cls = new \App\Controller\HomeController();
    $cls->_404();
    exit("");
}


$acc_route = $routes[$route];



$routing = new \Core\Route();
$routing->MiddlewareDriver([$acc_route['cont'],$acc_route['fun']],$acc_route['mid']);

