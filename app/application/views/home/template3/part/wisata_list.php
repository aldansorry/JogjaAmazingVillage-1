<!--PORTFOLIO AREA-->
    <section class="portfolio-area padding-100-70 gray-bg" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Wisata</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="portfolio-menu-content wow fadeIn">
                        <ul class="portfolio-menu">
                            <li class="active" data-filter="*">All</li>
                            <?php foreach ($kategori as $key => $value): ?>
                            	<li data-filter="<?php echo '.'.$value->id ?>"><?php echo ucfirst($value->nama) ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row portfolio-list wow fadeIn">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 marketing photography portfolio-item">
                    
                    <?php foreach ($objekwisata as $key => $value): ?>
                    	<div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="<?php echo base_url('uploads/wisata/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">
                        </div>
                        <div class="portfolio-details v-center">
                            <h4><?php echo $value->nama ?></h4>
                            <p><?php echo $value->keterangan ?></p>
                            <p><?php echo $value->harga ?></p>
                            <p><?php echo $value->jamkunjung ?></p>
                        </div>
                    </div>
                    <?php endforeach ?>

                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 digital development portfolio-item">
                    <div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="img/portfolio/portfolio_2.jpg" alt="">
                        </div>
                        <div class="portfolio-details v-center">
                            <h4>Web Design</h4>
                            <p>Business / Service / Product / Template</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 photography marketing portfolio-item">
                    <div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="img/portfolio/portfolio_3.jpg" alt="">
                        </div>
                        <div class="portfolio-details v-center">
                            <h4>App Development</h4>
                            <p>Business / Service / Product / Template</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 web digital portfolio-item">
                    <div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="img/portfolio/portfolio_4.jpg" alt="">
                        </div>
                        <div class="portfolio-details v-center">
                            <h4>Web Marketing</h4>
                            <p>Business / Service / Product / Template</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 development marketing portfolio-item">
                    <div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="img/portfolio/portfolio_5.jpg" alt="">
                        </div>
                        <div class="portfolio-details v-center">
                            <h4>Email Marketing</h4>
                            <p>Business / Service / Product / Template</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 web portfolio-item">
                    <div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="img/portfolio/portfolio_6.jpg" alt="">
                        </div>
                        <div class="portfolio-details v-center">
                            <h4>Web Development</h4>
                            <p>Business / Service / Product / Template</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 photography portfolio-item">
                    <div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="img/portfolio/portfolio_7.jpg" alt="">
                        </div>
                        <div class="portfolio-details v-center">
                            <h4>Creative Thinking</h4>
                            <p>Business / Service / Product / Template</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 development web portfolio-item">
                    <div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="img/portfolio/portfolio_8.jpg" alt="">
                        </div>
                        <div class="portfolio-details v-center">
                            <h4>Web Development</h4>
                            <p>Business / Service / Product / Template</p>
                        </div>
                    </div>
                </div>
                <div class="hidden-sm col-md-4 col-lg-4 col-sm-6 col-xs-12 digital portfolio-item">
                    <div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="img/portfolio/portfolio_9.jpg" alt="">
                        </div>
                        <div class="portfolio-details v-center">
                            <h4>Online Marketing</h4>
                            <p>Business / Service / Product / Template</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PORTFOLIO AREA END-->