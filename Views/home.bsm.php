    <?php $this->component('header'); ?>
 

    <div class="jumbotron bg-secondary color-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Perpustakaan Online</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae unde odit debitis quibusdam aspernatur similique pariatur ullam hic modi fugit! A velit nisi explicabo reprehenderit repellendus amet deleniti, quam voluptatem!</p>
                <button class="btn btn-block btn-primary mt-1">Search Book</button>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <h2>Koleksi Buku</h2>
    <br>
    <div class="row">
        <?php
        foreach ($data as $value):
            ?>
         
    
        <div class="col-md-4 mb-1">
            <div class="card shadow">
                <img src="https://images-na.ssl-images-amazon.com/images/I/61-uFOBDLDL.jpg" alt="">
                <p class="title"><?= $value['title'] ?></p>
                <p>Author : <?= $value['auth_name'] ?></p>
                <p>Publisher :  <?= $value['pub_name'] ?></p>
                <a href="<?= BASE_URL ?>/detail/?id=<?= $value['id']?>"><button class="btn btn-primary btn-block mt-1">Detail</button></a>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</div>

 
    <?php $this->component('footer'); ?>
