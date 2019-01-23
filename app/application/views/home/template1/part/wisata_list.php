<section class="portfolio-area section-gap" id="portfolio">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">Wisata</h1>
					<p>Dinas Pariwisata Provinsi DIY</p>
				</div>
			</div>
		</div>

		<div class="filters">
			<ul>
				<li class="active" data-filter="*">All</li>
				<?php foreach ($kategori as $value): ?>
					<li data-filter="<?php echo '.'.$value->id ?>"><?php echo ucfirst($value->nama) ?></li>
				<?php endforeach ?>
			</ul>
		</div>

		<div class="filters-content">
			<div class="row grid">
				<?php foreach ($objekwisata as $value): ?>
					<div class="single-portfolio col-sm-4 all <?php echo $value->fk_kategori ?>">
						<div class="item">
							<img src="<?php echo base_url("uploads/wisata/".$value->foto) ?>" alt="Work 1">
							<div class="p-inner">
								<h4><?php echo $value->nama ?></h4>
								<div class="cat">Corporate</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>


			</div>
		</div>

	</div>
</section>