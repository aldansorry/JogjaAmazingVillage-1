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