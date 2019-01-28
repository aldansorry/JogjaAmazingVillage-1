<div class="main-content-inner">
    <!-- sales report area start -->
    <div class="sales-report-area mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Pengunjung</h4>
                            <p>Total</p>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2><?php echo $this->db->select('count(id) as jml')->get('pengunjung')->row(0)->jml ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Pengunjung</h4>
                            <p>Last Year</p>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2><?php echo $this->db->select('count(id) as jml')->where('year(tanggal)',date('Y'))->get('pengunjung')->row(0)->jml ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Pengunjung</h4>
                            <p>Last Month</p>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2><?php echo $this->db->select('count(id) as jml')->where('year(tanggal)',date('Y'))->where('month(tanggal)',date('m'))->get('pengunjung')->row(0)->jml ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sales report area end -->
    <!-- overview area start -->
    <div class="row">
        <!-- <div class="col-xl-9 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Overview</h4>
                        <select class="custome-select border-0 pr-3">
                            <option selected>Last 24 Hours</option>
                            <option value="0">01 July 2018</option>
                        </select>
                    </div>
                    <div id="verview-shart"></div>
                </div>
            </div>
        </div> -->
        <div class="col-xl-3 col-lg-4 coin-distribution">
            <div class="card h-full">
                <div class="card-body">
                    <h4 class="header-title mb-0">Menurut Domisili</h4>
                    <div id="coin_distribution" 
                    data-lokal="<?php echo $this->db->select('count(id) as jml')->where('domisili','lokal')->get('pengunjung')->row(0)->jml ?>" 
                    data-regional="<?php echo $this->db->select('count(id) as jml')->where('domisili','regional')->get('pengunjung')->row(0)->jml ?>" 
                    data-internasional="<?php echo $this->db->select('count(id) as jml')->where('domisili','internasional')->get('pengunjung')->row(0)->jml ?>"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 coin-distribution">
            <div class="card h-full">
                <div class="card-body">
                    <h4 class="header-title mb-0">Menurut Umur</h4>
                    <div id="donut-usia" 
                    data-anak="<?php echo $this->db->select('count(id) as jml')->where('umur','anak')->get('pengunjung')->row(0)->jml ?>" 
                    data-remaja="<?php echo $this->db->select('count(id) as jml')->where('umur','remaja')->get('pengunjung')->row(0)->jml ?>" 
                    data-dewasa="<?php echo $this->db->select('count(id) as jml')->where('umur','dewasa')->get('pengunjung')->row(0)->jml ?>"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 coin-distribution">
            <div class="card h-full">
                <div class="card-body">
                    <h4 class="header-title mb-0">Menurut Jenis Kelamin</h4>
                    <div id="donut-jeniskelamin" 
                    data-l="<?php echo $this->db->select('count(id) as jml')->where('jeniskelamin','L')->get('pengunjung')->row(0)->jml ?>" 
                    data-p="<?php echo $this->db->select('count(id) as jml')->where('jeniskelamin','P')->get('pengunjung')->row(0)->jml ?>" 
                    ></div>
                </div>
            </div>
        </div>
        
    </div>
    <br>
    <br>
    <!-- row area start -->
    <div class="row">

        <!-- Live Crypto Price area end -->
        <!-- trading history area start -->
        <div class="col-lg-12 mt-sm-30 mt-xs-30">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h4 class="header-title">Trading History</h4>
                        <div class="trd-history-tabs">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#buy_order" role="tab">In Year</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#sell_order" role="tab">Lifetiem</a>
                                </li>
                            </ul>
                        </div>
                        <select class="custome-select border-0 pr-3">
                            <option selected>Last 24 Hours</option>
                            <option value="0">01 July 2018</option>
                        </select>
                    </div>
                    <div class="trad-history mt-4">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="buy_order" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="dbkit-table">
                                        <tr class="heading-td">
                                            <td>Desawisata</td>
                                            <td>Desa</td>
                                            <td>Kecamatan</td>
                                            <td>Kabupaten</td>
                                            <td>in days</td>
                                            <td>in month</td>
                                            <td>in year</td>
                                        </tr>

                                        <?php 
                                        $this->db->select('
                                            desawisata.*,
                                            (select count(id) from pengunjung where fk_desawisata=desawisata.id AND DATE(tanggal) = CURDATE()) as in_day,
                                            (select count(id) from pengunjung where fk_desawisata=desawisata.id AND MONTH(tanggal) = MONTH(CURDATE())) as in_month,
                                            (select count(id) from pengunjung where fk_desawisata=desawisata.id AND year(tanggal) = year(CURDATE())) as in_year,
                                            (select count(id) from pengunjung where fk_desawisata=desawisata.id) as total
                                            ');
                                        $query = $this->db->get('desawisata');
                                        $data_desawisata = $query->result();
                                        ?>
                                        <?php foreach ($data_desawisata as $value): ?>

                                            <tr>
                                                <td><?php echo $value->nama ?></td>
                                                <td><?php echo $value->desa ?></td>
                                                <td><?php echo $value->kecamatan ?></td>
                                                <td><?php echo $value->kabupaten ?></td>
                                                <td><?php echo $value->in_day ?></td>
                                                <td><?php echo $value->in_month ?></td>
                                                <td><?php echo $value->in_year ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sell_order" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="dbkit-table">
                                        <tr class="heading-td">
                                            <td>Trading ID</td>
                                            <td>Time</td>
                                            <td>Status</td>
                                            <td>Amount</td>
                                            <td>Last Trade</td>
                                        </tr>
                                        <tr>
                                            <td>8964978</td>
                                            <td>4.00 AM</td>
                                            <td>Pending</td>
                                            <td>$445.90</td>
                                            <td>$094545.090</td>
                                        </tr>
                                        <tr>
                                            <td>89675978</td>
                                            <td>4.00 AM</td>
                                            <td>Pending</td>
                                            <td>$78.90</td>
                                            <td>$074852945.090</td>
                                        </tr>
                                        <tr>
                                            <td>78527878</td>
                                            <td>4.00 AM</td>
                                            <td>Pending</td>
                                            <td>$0768.90</td>
                                            <td>$65465.090</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trading history area end -->
    </div>
</div>