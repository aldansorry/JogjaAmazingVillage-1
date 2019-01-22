<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Berita</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<?php foreach ($berita as $key => $value): ?>
							<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="<?php echo base_url('uploads/berita/'.$value->foto) ?>" alt="">								
							</div>

								
							<p class="date">
								10 Jan 2018
							</p>
							
								
							<p><a href=""><h4><?php echo $value->author ?></h4></a></p>
							<p>
								<?php echo $value->konten ?>
							</p>								
						</div>
						<?php endforeach ?>
													
						</div>							
					</div>	
			</section>