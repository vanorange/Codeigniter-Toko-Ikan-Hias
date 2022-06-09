<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>
	<?php foreach ($barang as $brg) : ?>

		<form method="post" action="<?php echo base_url(). 'admin/data_barang/update' ?>">

			<div class="for-group">
				<label>Nama Ikan</label>
				<input type="text" name="nama_ikan" class="form-control"
				value=" <?php echo $brg->nama_ikan ?>">
			</div>
			<div class="for-group">
				<label>Deskripsi</label>
				<input type="text" name="deskripsi" class="form-control"
				value=" <?php echo $brg->deskripsi ?>">
			</div>
			<div class="for-group">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-control"
				value=" <?php echo $brg->kategori ?>">
			</div>
			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control"
				value=" <?php echo $brg->harga ?>">
			</div>
			<div class="for-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control"
				value=" <?php echo $brg->stok ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button>

		</form>

	<?php endforeach;  ?>
</div>