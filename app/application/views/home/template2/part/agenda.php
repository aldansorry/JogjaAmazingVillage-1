<section class="service-area pt-100" id="about">
				<div class="container mb-5">
				<h3 class="text-center mb-3">Agenda</h3>
				
					<div class="row">
						<?php foreach ($agenda as $key => $value): ?>
							<div class="col-lg-4">
							<div class="single-service">
								<img src="<?php echo base_url('uploads/agenda/'.$value->foto) ?>" alt="" style="max-width: 200px;min-width:200px;max-height: 150px; min-height: 150px">
							  <h4><?php echo $value->judul ?></h4>
							  <p>
							  	<?php echo $value->tanggal ?>
							  </p>						 	
							  <div class="overlay">
							    <div class="text">
							    	<p>
							    		<?php echo $value->keterangan ?>
							    	</p>
							    </div>
							  </div>
							</div>							
						</div>						
					<?php endforeach ?>										
					</div>
				</div>	
			</section>