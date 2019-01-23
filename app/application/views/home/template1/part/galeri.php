<section class="review-area section-gap mt-5" id="galeri">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">Galeri</h1>
					<p>Galeri foto foto</p>
				</div>
			</div>
		</div>							
		<div class="row gallery-item">
			<?php foreach ($galeri as $value): ?>
				<div class="col-md-4">
					<a href="<?php echo base_url('uploads/galeri/'.$value->foto) ?>" class="img-pop-up"><div class="single-gallery-image" style="background: url(<?php echo base_url("uploads/galeri/".$value->foto); ?>"></div></a>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>