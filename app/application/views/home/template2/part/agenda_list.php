<section class="service-area pt-100" id="about">
	<div class="container">
		<h3 class="text-center mb-3">Agenda</h3>

		<div class="row">
			<?php foreach ($agenda as $key => $value): ?>
				<div class="col-lg-4">
					<div class="single-service">
						<span class="lnr lnr-clock"></span>
						<a href="">
                                                        <h1><?php echo $value->judul ?></h1>
                                                </a>
						<p>
							<?php echo $value->tanggal ?>
						</p>						 	
						<div class="overlay">
							<div class="text">
								<p>
									<?php echo $value->keterangan ?>
								</p>

								<a href="<?php echo base_url('Home/agendadetail/'.$this->uri->segment(3)."/".$value->id) ?>" target="_blank" class="text-uppercase primary-btn">View Detail</a>
							</div>
						</div>
					</div>							
				</div>
				<?php if (($key+1)%3 == 0): ?>
					</div>
					<div class="row mt-3">					
				<?php endif ?>						
			<?php endforeach ?>										
		</div>
	</div>	
</section>