        <section class="our_blog_area p_120">
        	<div class="container">
        		<div class="main_title text-center mt-5">
        			<h2>Agenda</h2>
        			<p>Dinas Pariwisata Provinsi DIY</p>
        		</div>
        		<div class="blog_inner row">
        			
					<?php foreach ($agenda as $key => $value): ?>
					<div class="col-lg-4">
        				<div class="o_blog_item">
        					<div class="blog_img">
        						<img class="img-fluid mt-4" src="<?php echo base_url('uploads/agenda/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">
        					</div>
        				</div>
                                        <?php echo $value->keterangan ?>
                                        <br>
                                        <button class="btn btn-primary" href ="">Lihat</button>
        			</div>
					<?php endforeach ?>
        		</div>
        	</div>
        </section>
        