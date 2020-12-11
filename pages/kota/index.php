<?php 
  include '../koneksi.php';
  $query = mysqli_query($koneksi, 'SELECT * FROM kota');
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Kota</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Kota</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#modal-tambah">
    Tambah Data
  </button>
  <br>
  <br>

  <div class="container-fluid">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Kota</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $no = 1;
          while ($kota = mysqli_fetch_array($query)) {
            if (mysqli_num_rows($query)) {
        ?>
        <tr>
          <td><?=$no++?></td>
          <td><?=$kota['nama_kota']?></td>
          <td>
            <button type="button" class="btn btn-warning btn-sm btn-edit" data-toggle="modal" data-target="#modal-edit" data-id="<?=$kota['id']?>" data-provinsi="<?=$kota['id_provinsi']?>" data-name="<?=$kota['nama_kota']?>">
              Edit
            </button>
            <button type="button" class="btn btn-danger btn-sm" onclick="return deleteData(<?=$kota['id']?>)">
              Hapus
            </button>
            
            <form action="./kota/config/destroy.php" method="post" id="form-delete-<?=$kota['id']?>">
              <input type="hidden" name="id" value="<?=$kota['id']?>">
            </form>

          </td>
        </tr>
        <?php
          }else{
            echo '<tr colspan="3">Tidak ada Data</tr>';
          }
        }
        ?>
      </tbody>
    </table>

  </div>
</section>
<!-- /.content -->

<!-- Modal Edit-->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="./kota/config/insert.php" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for=""></label>
            <select name="id_provinsi" class="form-control">
              <option value="">-- Pilih Provinsi --</option>
              <?php
                $queryProvinsi = "SELECT * FROM provinsi";
                $provinsi = mysqli_query($koneksi, $queryProvinsi);
                while ($row = mysqli_fetch_array($provinsi)) {
                  echo "<option value=".$row['id'].">" .$row['nama_provinsi'] . "</option>";
                }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Nama Kota</label>
            <input type="text" class="form-control" placeholder="Masukan nama kota" name="nama_kota">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="./kota/config/update.php" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for=""></label>
            <select name="id_provinsi" class="form-control id-provinsi">
              <option value="">-- Pilih Provinsi --</option>
              <?php
                $queryProvinsi = "SELECT * FROM provinsi";
                $provinsi = mysqli_query($koneksi, $queryProvinsi);
                while ($row = mysqli_fetch_array($provinsi)) {
                  echo "<option value=".$row['id'].">" .$row['nama_provinsi'] . "</option>";
                }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Nama Kota</label>
            <input type="text" class="form-control nama-kota" placeholder="Masukan nama kota" name="nama_kota">
            <input type="hidden" class="form-control id-kota" name="id">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
  $(function(){
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    let pesan = localStorage.getItem('pesan');
    if(pesan == 'success'){
        Toast.fire({
        icon: 'success',
        title: 'Berhasil.'
      })
      localStorage.removeItem('pesan')
    }else if(pesan == 'warning'){
        Toast.fire({
        icon: 'warning',
        title: 'Gagal.'
      })
      localStorage.removeItem('pesan')
    }
  })

  btnEdit = document.querySelectorAll('.btn-edit');
  for(i = 0; i < btnEdit.length; i++){
    btnEdit[i].addEventListener('click',function(){
      idKota = this.getAttribute('data-id');
      namaProvinsi = this.getAttribute('data-name')
      idProvinsi = this.getAttribute('data-provinsi')
      document.querySelector('.id-kota').value = idKota
      document.querySelector('.id-provinsi').value = idProvinsi
      document.querySelector('.nama-kota').value = namaProvinsi
    })
  }

  function deleteData(id){
    let deleteConfirm = confirm('Apakah anda yakin?');
    if(deleteConfirm == true){
      document.querySelector('#form-delete-'+id).submit();
    }else{
      return false;
    }

  }
</script>