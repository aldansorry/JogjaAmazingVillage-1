<!--================Our Blog Area =================-->
        <section class="our_blog_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Berita</h2>
        			<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
        		</div>
        		<div class="blog_inner row">
        			
					<?php foreach ($berita as $key => $value): ?>
						<div class="col-lg-4">
        				<div class="o_blog_item">
        					<div class="blog_img">
        						<img class="img-fluid" src="<?php echo base_url('uploads/berita/'.$value->foto) ?>" alt="">
        					</div>
        					<div class="blog_text">
        						<div class="blog_cat">
        							<a class="active" href="#">Travel</a>
        							<a href="#">Life style</a>
        						</div>
        						<a href="#"><h4><?php echo $value->judul ?></h4></a>
        						<p><?php echo $value->konten ?></p>
        						<a class="date" href="#"><?php echo $value->tanggal ?></a>
        						<p><?php echo $value->author ?></p>
        					</div>
        				</div>
        			</div>
					<?php endforeach ?>
        		</div>
        	</div>
        </section>
        <!--================End Our Blog Area =================-->
        