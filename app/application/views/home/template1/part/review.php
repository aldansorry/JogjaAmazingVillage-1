<section class="review-area section-gap" id="testimonial">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">Review </h1>
					
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
		</div> 							
	</div>
</section>
<!-- End review Area -->