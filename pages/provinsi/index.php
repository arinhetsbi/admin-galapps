<?php 
  include '../koneksi.php';
  $query = mysqli_query($koneksi, 'SELECT * FROM provinsi');
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Provinsi</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Provinsi</li>
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
          <th>Nama Provinsi</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $no = 1;
          while ($provinsi = mysqli_fetch_array($query)) {
            if (mysqli_num_rows($query)) {
        ?>
        <tr>
          <td><?=$no++?></td>
          <td><?=$provinsi['nama_provinsi']?></td>
          <td>
            <button type="button" class="btn btn-warning btn-sm btn-edit" data-toggle="modal" 
            data-target="#modal-edit" data-id="<?=$provinsi['id']?>" 
            data-name="<?=$provinsi['nama_provinsi']?>">
              Edit
            </button>
            <button type="button" class="btn btn-danger btn-sm btn-edit" onclick="return deleteData(<?=$provinsi['id']?>)">
              Hapus
            </button>
            <form action="./provinsi/config/destroy.php" method="post" id="form-delete-<?=$provinsi['id']?>">
              <input type="hidden" name="id" value="<?=$provinsi['id']?>">
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

<!-- Modal Tambah-->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="./provinsi/config/insert.php" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nama Provinsi</label>
            <input type="text" class="form-control" placeholder="Masukan nama provinsi" name="nama_provinsi">
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

<!-- Modal Edit-->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="./provinsi/config/update.php" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nama Provinsi</label>
            <input type="hidden" class="form-control id-provinsi-edit" placeholder="Masukan nama provinsi" name="id">
            <input type="text" class="form-control nama-provinsi-edit" placeholder="Masukan nama provinsi" name="nama_provinsi">
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
      idProvinsi = this.getAttribute('data-id');
      namaProvinsi = this.getAttribute('data-name')
      document.querySelector('.id-provinsi-edit').value = idProvinsi
      document.querySelector('.nama-provinsi-edit').value = namaProvinsi
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