<section class="blog-posts-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 post-list blog-post-list">
				<?php foreach ($review as $value): ?>
					<div class="single-post">
						<img class="img-fluid" src="<?php echo base_url('uploads/review/'.$value->foto) ?>" alt="">
						
						<a href="blog-single.html">
							<h1><?php echo $value->nama ?></h1>
						</a>
						<p>
							<?php echo $value->keterangan ?>
						</p>
					</div>
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
					<a class="button" href="#">View Details</a>
				<?php endforeach ?>																				
			</div>
		</div>
	</div>	
</section>
