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