<div class="container-fluid">
	<button class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA IKAN</th>
			<th>DESKRIPSI</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>STOK</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php 
		$no=1;
		foreach($barang as $brg) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $brg->nama_ikan ?></td>
				<td><?php echo $brg->deskripsi ?></td>
				<td><?php echo $brg->kategori ?></td>
				<td><?php echo $brg->harga ?></td>
				<td><?php echo $brg->stok ?></td>
				<td><?php echo anchor('admin/data_barang/edit/' .$brg->id_ikan, '<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?> </td>
				<td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_ikan, '<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?> </td>
			</tr>

		<?php endforeach; ?>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INFUT PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action=" <?php echo base_url().'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data" >

        	<div class="form-group">
        		<label>Nama Ikan</label>
        		<input type="text" name="nama_ikan" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Deskripsi</label>
        		<input type="text" name="deskripsi" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Kategori</label>
        		<select type="text" name="kategori" class="form-control">
        			<option>Ikan</option>
        			<option>Aquarium</option>
        			<option>Peripheral</option>
        		</select>
        	</div>

        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Stok</label>
        		<input type="text" name="stok" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Gambar Produk</label>
        		<input type="file" name="gambar" class="form-control">
        	</div>

        	<div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
        	
        </form>
      </div>

    </div>
  </div>
</div>