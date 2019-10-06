<?php
session_Start();

define('BASE_DIR',__DIR__);
define('BASE_URL','http://localhost/lkss/public');

require 'Bootstrap/app.php';


function bcrypt($pass)
{
    return password_hash($pass,PASSWORD_BCRYPT);
}

function isLogin()
{
    if(isset($_SESSION['id'])){
        return true;
    }
    return false;
}

function isAdmin()
{
    if($_SESSION['user']['level'] == "admin"){
        return true;
    }
    return false;
}


function message($m)
{
    $_SESSION['message'] = $m;

}
function hasMessage()
{
    if(isset($_SESSION['message'])){
        return true;
    }
    return false;
}
function getMessage()
{
    if(isset($_SESSION['message'])){
        $m = $_SESSION['message'];
        unset($_SESSION['message']);
        return $m;
    }
    return false;
}