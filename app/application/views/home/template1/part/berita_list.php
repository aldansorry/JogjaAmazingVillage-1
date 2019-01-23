<section class="blog-posts-area section-gap">
	<div class="container">
		<div class="main-title text-center">
		<h2>Berita</h2> 
			<p>Dinas Pariwisata Provinsi DIY</p>
		</div>
		<div class="row">
			<div class="col-lg-8 post-list blog-post-list">
				<?php foreach ($berita as $value): ?>
					<div class="single-post">
						<img class="img-fluid" src="<?php echo base_url('uploads/berita/'.$value->foto) ?>" alt="">
						
						<a href="blog-single.html">
							<h1><?php echo $value->judul ?></h1>
						</a>
						<p>
							<?php echo $value->konten ?>
						</p>
						<?php echo $value->tanggal ?>
					</div><br>
				<?php endforeach ?>	
				<button class="btn btn-primary" href=""> Lihat</button> 																			
			</div>
		</div>
	</div>	
</section>