<?php $this->component('header'); ?>
 

 <div class="container mt-5">

    <div class="row">
        <div class="col-md-4">
        <div class="card shadow">
        <img src="https://images-na.ssl-images-amazon.com/images/I/61-uFOBDLDL.jpg" alt="">
         
        <button class="btn btn-warning btn-block float-right shadow">Edit</button>
        <button class="btn btn-danger mt-1 btn-block float-right shadow">Delete</button>
        </div>
        </div>
        <div class="col-md-8 ">
            <div class="card shadow">
                <h2><?= $buku[0]['title'] ?></h2>
                <br>
                <p><?= $buku[0]['desc'] ?></p>
                <br>
                <ul class="no-list ">
                    <li>Author : <?= $buku[0]['auth_name'] ?></li>
                    <li>Author : <?= $buku[0]['pub_name'] ?></li>
                    <li>Tersedia : <?= $buku[0]['qty'] ?></li>
                  
                </ul>
                <br>
                <form action="<?= BASE_URL?>/detail/borrow" method="POST">
                    <div class="input-group">
                        <input type="hidden" name="book_id" value="<?= $_GET['id']?>">
                        <label for="username">Lama Peminjaman</label>
                        <select name="week" class="form-control" id="">
                            <option value="+1 Week">1 Week</option>
                            <option value="+2 Week">2 Week</option>
                        </select>
                        <span class="alert">*Lama Peminjaman</span>
                    </div>

                    <button class="btn btn-primary float-right shadow">Pinjam</button>
                </form>
            </div>
        </div>
       
    </div>
 </div>


 <?php $this->component('footer'); ?>
