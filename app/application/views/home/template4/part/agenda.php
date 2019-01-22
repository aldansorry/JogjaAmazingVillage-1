<!--================Feature Area =================-->
        <section class="feature_area">
        	<div class="container">
        		<div class="main_title mt-5">
        			<h2>Agenda</h2>
        			<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
        		</div>
        		<div class="feature_inner row">
        			
					<?php foreach ($agenda as $key => $value): ?>
						<div class="col-lg-4">
        				<div class="feature_item">
        					<img src="<?php echo base_url('uploads/agenda/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">
        					<h4><?php echo $value->judul ?></h4>
        					<p>
							  	<?php echo $value->tanggal ?>
							 </p>	
        					<p><?php echo $value->keterangan ?></p>
        					<a class="main_btn" href="#">View Details</a>
        				</div>
        			</div>
					<?php endforeach ?>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->