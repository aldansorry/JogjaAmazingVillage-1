<section class="service-area section-gap relative mt-5" id="news">
	<div class="overlay overlay-bg"></div>	
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10 text-white">News</h1>
					<p>Dinas Pariwisata Provinsi DIY</p>
				</div>
			</div>
		</div>	
	</div>	
</section>

<div class="container">
	<div class="section-top-border">
		<?php foreach ($berita as $key => $value): ?>
			<h3 class="mb-30"><?php echo $value->judul ?></h3>
			<div class="row">
				<div class="col-md-3">
					<img src="<?php echo base_url("uploads/berita/".$value->foto) ?>" alt="" class="img-fluid">
				</div>
				<div class="col-md-9 mt-sm-20">
					<p><?php echo $value->konten ?></p>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>