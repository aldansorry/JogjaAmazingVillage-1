<section class="gallery-area section-gap gallery-page-area" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Our Exhibition Gallery</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>						
					<div id="grid-container" class="row">
						<?php foreach ($galeri as $value): ?>
							
						<a class="single-gallery" href="<?php echo base_url('uploads/galeri/'.$value->foto) ?>"><img class="grid-item" src="<?php echo base_url('uploads/galeri/'.$value->foto) ?>"></a>
						<?php endforeach ?>
											
					</div>	
				</div>	
			</section>