

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-8">
							<h6 class="text-white">Openning on 21st February, 2018</h6>
							<h1 class="text-white">
								Exhibition on Modern Era				
							</h1>
							<p class="pt-20 pb-20 text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt..
							</p>
							<a href="#" class="primary-btn text-uppercase">Get Started</a>
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

			<!-- Start service Area -->
			<section class="service-area pt-100" id="about">
				<div class="container">
				<h3 class="text-center mb-3">Agenda</h3>
				
					<div class="row">
						<?php foreach ($agenda as $key => $value): ?>
							<div class="col-lg-4">
							<div class="single-service">
							  <span class="lnr lnr-clock"></span>
							  <h4><?php echo $value->judul ?></h4>
							  <p>
							  	<?php echo $value->tanggal ?>
							  </p>						 	
							  <div class="overlay">
							    <div class="text">
							    	<p>
							    		<?php echo $value->keterangan ?>
							    	</p>
							    	<a href="#" class="text-uppercase primary-btn">Buy ticket</a>
							    </div>
							  </div>
							</div>							
						</div>						
					<?php endforeach ?>										
					</div>
				</div>	
			</section>
			<!-- End service Area -->
			
			<!-- Start quote Area -->
			<section class="quote-area section-gap">
				<div class="container">				
					<div class="row">
						<div class="col-lg-6 quote-left">
							<h1>
								<span>Music</span> gives soul to the universe, <br>
								wings to the <span>mind</span>, flight <br>
								to the <span>imagination</span>.
							</h1>
						</div>
						<div class="col-lg-6 quote-right">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End quote Area -->

			<!-- Start exibition Area -->
			<section class="exibition-area section-gap" id="exhibitions">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Wisata</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-exibition-carusel">
							<?php foreach ($objekwisata as $key => $value): ?>
								<div class="single-exibition item">
								<img src="<?php echo base_url('uploads/wisata/'.$value->foto) ?>" alt="">
								<ul class="tags">
									<li><a href="#">Travel</a></li>
									<li><a href="#">Life style</a></li>
								</ul>
								<a href="#"><h4><?php echo $value->nama ?></h4></a>
								<p>
									<?php echo $value->keterangan ?>
								</p>
								<h6 class="date"><?php echo $value->jamkunjung ?></h6>
							</div>
							<?php endforeach ?>
						</div>													
					</div>
				</div>	
			</section>
			<!-- End exibition Area -->			
		
			<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap" id="events">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">News</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 event-left">
							<?php foreach ($berita as $key => $value): ?>
								<div class="single-events">
								<img class="img-fluid" src="<?php echo base_url('uploads/berita/'.$value->foto) ?>" alt="">
								<a href="#"><h4><?php echo $value->judul ?></h4></a>
								<h6><span><?php echo $value->tanggal ?></span><?php echo $value->author ?></h6>
								<p>
									<?php echo $value->konten ?>
								</p>
								<a href="#" class="primary-btn text-uppercase">View Details</a>
							</div>
							<?php endforeach ?>
								
						</div>
						<div class="col-lg-6 event-right">
							<div class="single-events">
								<a href="#"><h4>Event on the rock solid carbon</h4></a>
								<h6><span>21st February</span> at Central government museum</h6>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially.
								</p>
								<a href="#" class="primary-btn text-uppercase">View Details</a>
								<img class="img-fluid" src="<?php echo base_url('assets_template/artmuseum/artmuseum/') ?>img/u2.jpg" alt="">
							</div>
														
						</div>
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->
			
			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Review</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<?php foreach ($review as $key => $value): ?>
							<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="<?php echo base_url('uploads/review/'.$value->foto) ?>" alt="">								
							</div>

								
							<p class="date">
								10 Jan 2018
							</p>
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
								
							<p><a href=""><h4><?php echo $value->nama ?></h4></a></p>
							<p>
								<?php echo $value->keterangan ?>
							</p>								
						</div>
						<?php endforeach ?>
													
						</div>							
					</div>	
			</section>
			<!-- End blog Area -->

			<!-- Start gallery Area -->
			<section class="gallery-area section-gap" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Galeri</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>						
					<div id="grid-container" class="row">
						<?php foreach ($galeri as $key => $value): ?>
							<a class="single-gallery" href="<?php echo base_url('uploads/galeri/'.$value->foto) ?>"><img class="grid-item" src="<?php echo base_url('uploads/galeri/'.$value->foto) ?>"></a>
						<?php endforeach ?>						
					</div>	
				</div>	
			</section>
			<!-- End gallery Area -->
			




