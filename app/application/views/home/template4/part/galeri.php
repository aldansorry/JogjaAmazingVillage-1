<!--================Our Blog Area =================-->
        <section class="our_blog_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Galeri</h2>
        			<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
        		</div>
        		<div class="blog_inner row">
        			
					<?php foreach ($galeri as $key => $value): ?>
						<div class="col-lg-4">
        				<div class="o_blog_item">
        					<div class="blog_img">
        						<img class="img-fluid mt-4" src="<?php echo base_url('uploads/galeri/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">
        					</div>
        				</div>
        			</div>
					<?php endforeach ?>
        		</div>
        	</div>
        </section>
        <!--================End Our Blog Area =================-->
        