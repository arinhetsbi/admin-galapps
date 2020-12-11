<?php 
  include "../koneksi.php";
  $query = mysqli_query($koneksi, 'SELECT * FROM produk_elpiji');
?>

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
	  <div class="mb-5">
	  	<a href="index.php?page=tambah_produk_elpiji" class="btn btn-primary">Tambah</a>
	  </div>
    	<table id="example1" class="table table-bordered table-striped">
      		<thead>
        		<tr>
          			<th>No</th>
		  			<th>Nama Produk</th>
          			<th>Harga Produk</th>
          			<th>Opsi</th>
        		</tr>
      		</thead>
      		<tbody>
        		<?php
          			$no = 1;
          			while ($produk_elpiji = mysqli_fetch_array($query)) {
        		?>
        		<tr>
          			<td><?=$no++?></td>
          			<td><?=$produk_elpiji['nama']?></td>
		  			<td>Rp. <?=number_format($produk_elpiji['harga'],0,'','.')?></td>
          			<td>
						<a href="index.php?page=edit_produk_elpiji&&id=<?=$produk_elpiji['id']?>" class="btn btn-warning btn-sm">Edit</a>
            			<button type="button" class="btn btn-danger btn-sm" onclick="return deleteData(<?=$produk_elpiji['id']?>)">
              				Hapus
            			</button>
            			<form action="./produk_elpiji/config/destroy.php" method="post" id="form-delete-<?=$produk_elpiji['id']?>">
              				<input type="hidden" name="id" value="<?=$produk_elpiji['id']?>">
            			</form>
          			</td>
        		</tr>
        		<?php
        			}	
        		?>
      		</tbody>
    	</table>
  	</div>
</section>
<!-- /.content -->
        
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

  	function deleteData(id){
    let deleteConfirm = confirm('Apakah anda yakin?');
    	if(deleteConfirm == true){
      		document.querySelector('#form-delete-'+id).submit();
    	}else{
      		return false;
    	}

 	}
</script>