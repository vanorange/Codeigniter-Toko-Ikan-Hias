<div class="container-fluid">
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src=" <?php echo base_url('assets/img/Desktop1.png') ?>" class="d-block w-100" alt="...">
	    </div>
	  </div>
	</div>


	<div class="row text-center mt-3 ">
		<h2><b>JENIS IKAN</b></h2>
		<?php foreach ($ikan as $brg) : ?>
			<div class="card ml-3 mb-3" style="width: 16rem;">
			  <img src=" <?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title mb-1"> <?php echo $brg->nama_ikan ?> </h5>
			    <h6 class="card-title"> <?php echo $brg->deskripsi ?> </h6>
			    <span class="badge bg-success"> Rp <?php echo number_format($brg->harga , 0,',','.' ) ?></span><br>
			    <?php echo anchor('dashboard/tambah_ke_keranjang/' .$brg->id_ikan, '<div class="btn btn-sm btn-primary mt-2"> Tambah Ke Keranjang</div>') ?>
			    <?php echo anchor('dashboard/detail/' .$brg->id_ikan, '<div class="btn btn-sm btn-success mt-2"> Detail</div>') ?>
			   
			  </div>
			</div>

		<?php endforeach; ?>
	</div>
</div>