<?php $this->component('header'); ?>
 
<?php $this->component('leftPanel'); ?>

<div class="rightPanel">
    <div class="container">
        <div class="card shadow">
            <h2 class="float-left">Data Publisher</h2>
            <button class="btn btn-primary float-right mb-1">Publisher Baru</button>
        
            <table class="table">
                <tr class="head">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>m.aria bishma fauzan</td>
                    <td>
                        <button href="" class="btn btn-warning float-right">Edit</button>
                        <button href="" class="btn float-right no-border">Delete</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

 <?php $this->component('footer'); ?>
