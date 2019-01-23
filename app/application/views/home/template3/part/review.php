<!--TESTMONIAL AREA-->
<section class="testmonial-area section-padding" id="client">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
				<div class="area-title text-center wow fadeIn">
					<h2>Review</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
				<div class="testmonial-member-list wow fadeIn">

					<div class="single-testmonial center">
						<div class="testmonial-author-data">
							<div class="author-image">
								<img src="img/testmonial/testmonial-1.jpg" alt="">
							</div>
							<div class="author-designation">
								<h4>Testimoni List</h4>
							</div>
						</div>
						<div class="testmonial-author-details">
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas mo tias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio</p>
						</div>
					</div>

					<?php foreach ($review as $key => $value): ?>
						<div class="single-testmonial center">
							<div class="testmonial-author-data">
								<div class="author-image">
									<img src="<?php echo base_url('uploads//review/'.$value->foto) ?>" alt="">
								</div>
								<div class="author-designation">
									<h4><?php echo $value->nama ?></h4>
									<p><?php echo $value->email ?></p>
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
							</div>
							<div class="testmonial-author-details">
								<p><?php echo $value->keterangan ?></p>
							</div>
						</div>
					<?php endforeach ?>



				</div>
			</div>
		</div>
	</div>
</section>
    <!--TESTMONIAL AREA END-->