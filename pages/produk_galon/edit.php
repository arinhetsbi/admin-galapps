<?php 
include '../koneksi.php';
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Produk Galon</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Produk Galon</li>
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
        $queryProduk = "SELECT * FROM produk_galon WHERE id ='$id'";
        $produk_galon = mysqli_query($koneksi,$queryProduk);
        while($rowProduk = mysqli_fetch_array($produk_galon)){
        ?>
        <form action="./produk_galon/config/update.php" method="POST">
        <input type="hidden" name="id" value="<?=$rowProduk['id']?>">
            <div class="form-group">
                <label for="">ID Agen</label>
                <select name="id_agen" id="" class="form-control">
                    <option value="">--Pilih--</option>
                    <?php 
                        $queryAgen = "SELECT * FROM agen_galon";
                        $agen = mysqli_query($koneksi, $queryAgen);
                        while ($row = mysqli_fetch_array($agen)) {
                            if($rowProduk['id_agen'] == $row['id']){
                                $selected = 'selected';
                            }else{
                                $selected = '';
                            }

                            echo "<option $selected value=".$row['id'].">" .$row['nama'] . "</option>";
                        }
                    
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" name="nama" placeholder="Masukan nama" class="form-control" value="<?=$rowProduk['nama']?>">
            </div>
            <div class="form-group">
                <label for="">Harga Produk</label>
                <input type="number" name="harga" placeholder="Masukan harga" class="form-control"  value="<?=$rowProduk['harga']?>">
            </div>
            <div class="modal-footer">
             <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        
        </form>
        <?php } ?>
    </div>
</section>