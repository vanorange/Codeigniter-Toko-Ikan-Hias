<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents()) 
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];

					}
					echo "<h4>Total belanja anda : Rp. ".number_format($grand_total,0,',','.');
				 ?>
			</div><br><br>	
				<h4>Input Alamat Pengiriman Dan Pembayaran</h4>

			<form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>No. Telepon</label>
					<input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Metode Pembayaran</label>
					<select class="form-control" name="metode" placeholder="Metode pembayaran Anda" class="form-control">>
						<option>BCA - 099XXXXXXX</option>
						<option>BRI - XXXXXXXXXX</option>
					</select>
				</div>

				<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
				
			</form>

			<?php  
			}else
				{
					echo " <h4>Keranjang Belanja Anda Masih Kosong";
				}
			?>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>