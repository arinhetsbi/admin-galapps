<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Produk Elpiji</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Produk Elpiji</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="./produk_elpiji/config/insert.php" method="POST">
            <div class="form-group">
                <label for="">ID Agen</label>
                <select name="id_agen" id="" class="form-control">
                <option value="">--Pilih--</option>
                    <?php 
                        include '../koneksi.php';

                        $queryAgen = "SELECT * FROM agen_elpiji";
                        $agen = mysqli_query($koneksi, $queryAgen);
                        while ($row = mysqli_fetch_array($agen)) {
                            echo "<option value=".$row['id'].">" .$row['nama'] . "</option>";
                        }
                    
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" name="nama" placeholder="Masukan nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Harga Produk</label>
                <input type="number" name="harga" placeholder="Masukan harga" class="form-control">
            </div>
            <div class="modal-footer">
             <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        
        </form>
    </div>
</section>