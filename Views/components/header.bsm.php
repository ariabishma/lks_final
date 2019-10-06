<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php $this->asset("css/app.css") ?>"/>
</head>
<body>
<nav class="navbar bg-primary shadow">
    <div class="navbar-container p-1 color-white">
        <p>Perpustakaan Online</p>
        <ul class="navbar-nav ml-auto">
        <a href="<?= BASE_URL ?>"><li>Home</li></a>

            <?php if(isLogin()): ?>
                <li>Buku Dipinjam</li>
                <?php if(isAdmin()): ?>
                <a href="<?= BASE_URL ?>/admin"><li>Admin</li></a>    
                <?php endif; ?>
            <a href="<?= BASE_URL ?>/logout"><li>Logout</li></a>    

            <?php else: ?>
            
            <a href="<?= BASE_URL ?>/register"><li>Register</li></a>    
            <a href="<?= BASE_URL ?>/login"><li>Login</li></a>    

            <?php endif; ?>
        </ul>
    </div>
    
</nav>

