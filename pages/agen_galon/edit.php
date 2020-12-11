<?php 
include '../koneksi.php';
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Agen Galon</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Agen Galon</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
    <?php 
    $id = $_GET['id'];
    $queryEdit = "SELECT * FROM agen_galon WHERE id='$id'";
    $editAgen = mysqli_query($koneksi, $queryEdit);
    while($rowEdit = mysqli_fetch_array($editAgen)){
    ?>
        <form action="./agen_galon/config/update.php" method="POST">
        <input type="hidden" name="id" value="<?=$rowEdit['id']?>">
            <div class="form-group">
                <label for="">Id Kota</label>
                <select name="id_kota" id="" class="form-control">
                <option value="">--Pilih--</option>
                <?php

                    $queryKota = "SELECT * FROM kota";
                    $kota = mysqli_query($koneksi, $queryKota);
                    while ($row = mysqli_fetch_array($kota)) {
                        if($rowEdit['id_kota'] == $row['id']){
                            $selected = 'selected';
                        }else{
                            $selected = '';
                        }
                    echo "<option value=".$row['id']." $selected>" .$row['nama_kota'] . "</option>";
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Nama Agen</label>
                <input type="text" name="nama" placeholder="Masukan nama" value="<?=$rowEdit['nama']?>" class="form-control">
            <div class="form-group">
                <label for="">Alamat Agen</label>
                <textarea name="alamat" id="" cols="30" rows="10" class="form-control"><?=$rowEdit['alamat']?></textarea>
            </div>
            <div class="form-group">
                <label for="">Whatsapp Agen</label>
                <input type="number" name="whatsapp" placeholder="Masukan whatsapp" class="form-control" value="<?=$rowEdit['whatsapp']?>">
            </div>
            <div class="form-group">
                <label for="">Bank Agen</label>
                <input type="text" name="bank" placeholder="Masukan bank" class="form-control"  value="<?=$rowEdit['bank']?>">
            </div>
            <div class="form-group">
                <label for="">Ac</label>
                <input type="text" name="ac" placeholder="Masukan ac" class="form-control"  value="<?=$rowEdit['ac']?>">
                </div>
            <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            
        </form>
        <?php } ?>
    </div>
</section>