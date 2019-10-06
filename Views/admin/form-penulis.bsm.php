<?php $this->component('header'); ?>
 
<?php $this->component('leftPanel'); ?>


<div class="rightPanel">
    <div class="container">
        <div class="card shadow">
            <h2 >Data Penulis</h2>
            
            <form action="">
                    <div class="input-group mt-1">
                        <label for="username">Nama Penulis</label>
                        <input type="text" placeholder="Nama Penulis" class="form-control">
                        <span class="alert">*Masukan Nama Penulis</span>
                    </div>

                    <div class="input-group">
                        <label for="username">Alamat Penulis</label>
                        <input type="password" placeholder="Alamat Penulis" class="form-control">
                        <span class="alert">*Masukan Alamat Penulis</span>
                    </div>

                    <button class="btn btn-primary float-right shadow">Save</button>
                </form>
            
        </div>
    </div>
</div>

 <?php $this->component('footer'); ?>
