<?php $this->component('header'); ?>
 

 <div class="container mt-5">

    <div class="row">
        <div class="col-md-6 col-center">
            <div class="card shadow">
                <h2>Login</h2>
                <?php
                ?>
                <?php if(hasMessage()): ?>
                    <div class="card btn-danger mt-1">
                        <?php
                             echo getMessage();
                         ?> 
                    </div>
                <?php endif; ?>
                <form action="<?= BASE_URL ?>/login/action" method="POST">
                    <div class="input-group mt-1">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username" class="form-control">
                        <span class="alert">*Masukan Username</span>
                    </div>

                    <div class="input-group">
                        <label for="username">Password</label>
                        <input type="password" name="pass" placeholder="Password" class="form-control">
                        <span class="alert">*Masukan Password</span>
                    </div>

                    <button class="btn btn-primary float-right shadow">Login</button>
                </form>
            </div>
        </div>
       
    </div>
 </div>


 <?php $this->component('footer'); ?>
