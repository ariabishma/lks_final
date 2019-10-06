<?php $this->component('header'); ?>
 

 <div class="container mt-5">

    <div class="row">
        <div class="col-md-6 col-center">
            <div class="card shadow">
                <h2>Daftar</h2>
                <form action="<?= BASE_URL ?>/register/action" method="POST">
                    <div class="input-group mt-1">
                        <label for="username">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control">
                        <span class="alert">*Masukan Nama Lengkap</span>
                    </div>


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

                    <button class="btn btn-primary float-right shadow">Daftar</button>
                </form>
            </div>
        </div>
       
    </div>
 </div>


 <?php $this->component('footer'); ?>
