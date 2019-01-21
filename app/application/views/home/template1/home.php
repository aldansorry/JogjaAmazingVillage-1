
<!-- End Header Area -->	
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="banner-content col-lg-10">
				<h5 class="text-uppercase">Desawisata Jogja</h5>
				<h1>
					Jogja Amazing Village				
				</h1>
				<a href="#" class="primary-btn text-uppercase">Explore Now</a>
			</div>											
		</div>
	</div>
</section>
<!-- End banner Area -->	

<!-- Start portfolio-area Area -->	
<section class="portfolio-area section-gap" id="portfolio">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">This is what we can do for you</h1>
					<p>Who are in extremely love with eco friendly system..</p>
				</div>
			</div>
		</div>

		<div class="filters">
			<ul>
				<li class="active" data-filter="*">All</li>
				<?php foreach ($kategori as $value): ?>
					<li data-filter="<?php echo '.'.$value->id ?>"><?php echo ucfirst($value->nama) ?></li>
				<?php endforeach ?>
			</ul>
		</div>

		<div class="filters-content">
			<div class="row grid">
				<?php foreach ($objekwisata as $value): ?>
					<div class="single-portfolio col-sm-4 all <?php echo $value->fk_kategori ?>">
						<div class="item">
							<img src="<?php echo base_url("uploads/wisata/".$value->foto) ?>" alt="Work 1">
							<div class="p-inner">
								<h4><?php echo $value->nama ?></h4>
								<div class="cat">Corporate</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>


			</div>
		</div>

	</div>
</section>
<!-- End portfolio-area Area -->	


<!-- Start service Area -->
<section class="service-area section-gap relative" id="service">
	<div class="overlay overlay-bg"></div>	
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10 text-white">Agenda</h1>
					<p>Who are in extremely love with eco friendly system..</p>
				</div>
			</div>
		</div>	
	</div>	
</section>
<!-- End service Area -->

<!-- Start services Area -->
<section class="services-area pb-100">
	<div class="container">
		<div class="row">
			<?php foreach ($agenda as $value): ?>
				<div class="col-lg-4">
					<div class="single-service">
						<img class="img-fluid" src="<?php echo base_url("uploads/agenda/".$value->foto) ?>" alt="">
						<h4><?php echo $value->judul ?></h4>
						<p>
							<?php echo $value->keterangan ?>
						</p>
					</div>
				</div>
			<?php endforeach ?>													
		</div>
	</div>	
</section>
<!-- End services Area -->

<section class="review-area section-gap" id="galeri">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">Galeri</h1>
					<p>Who are in extremely love with eco friendly system..</p>
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


<section class="service-area section-gap relative" id="news">
	<div class="overlay overlay-bg"></div>	
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10 text-white">News</h1>
					<p>Who are in extremely love with eco friendly system..</p>
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

<!-- Start review Area -->
<section class="review-area section-gap" id="testimonial">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">How Our Customers Treat Us</h1>
					<p>Who are in extremely love with eco friendly system..</p>
				</div>
			</div>
		</div>							
		<div class="row">
			<div class="col-lg-6">
				<?php foreach ($review as $value): ?>
					<div class="single-review">
						<img src="<?php echo base_url("uploads/review/".$value->foto) ?>" alt="" width="200px">
						<div class="title d-flex flex-row">
							<a href="#"><h4><?php echo $value->nama ?></h4></a>									
							<div class="star">

								<?php
								$jml = $value->rating; 
								for($i = 0; $i<5;$i++){ 
									?>
									<span class="fa fa-star <?php echo (($jml) > 0 ? "checked" : "") ?>"></span>
									<?php 
									$jml--;
								} 
								?>
							</div>
						</div>
						<p>
							<?php echo $value->keterangan ?>
						</p>
					</div>	
				<?php endforeach ?>													
			</div>
			<!-- <div class="col-lg-6">
				<div class="single-review">
					<img src="<?php echo base_url("assets_home/") ?>img/c2.png" alt="">
					<div class="title d-flex flex-row">
						<a href="#"><h4>Hulda Sutton</h4></a>									
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-starchecked"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
				</div>	
				<div class="single-review">
					<img src="<?php echo base_url("assets_home/") ?>img/c4.png" alt="">
					<div class="title d-flex flex-row">
						<a href="#"><h4>Ruth Burns</h4></a>									
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
				</div>															
			</div> -->							
		</div>	
	</div>
</section>
<!-- End review Area -->


<!-- start footer Area -->		

