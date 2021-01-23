<?php
     require("include/header.php");
     require("include/topbar.php");
     require("include/sidebar.php");
     require("include/breadcumb.php");
     require("proses_admin.php");
?>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                        <?php 
                        $pendaftar = $admin -> list_daftar();
                        ?>
                            <h3 class="box-title">Total Pendaftar</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ml-auto"><span class="counter text-success"><?php echo mysqli_num_rows($pendaftar); ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                        <?php 
                        $lulus = $admin -> list_lulus();
                        ?>
                            <h3 class="box-title">Total Lulus</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash2"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ml-auto"><span class="counter text-purple"><?php echo mysqli_num_rows($lulus); ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                        <?php 
                        $tdklulus = $admin -> list_tidaklulus();
                        ?>
                            <h3 class="box-title">Total Tidak Lulus</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ml-auto"><span class="counter text-info"><?php echo mysqli_num_rows($tdklulus); ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Grafik Penerimaan</h3>
                            <div class="d-md-flex">
                                <ul class="list-inline d-flex ml-auto">
                                    <li class="pl-3">
                                        <h5><i class="fa fa-circle m-r-5 text-info"></i>Diterima</h5>
                                    </li>
                                    <li class="pl-3">
                                        <h5><i class="fa fa-circle m-r-5 text-inverse"></i>Ditolak</h5>
                                    </li>
                                </ul>
                            </div>
                            <div id="ct-visits">
                                <div class="chartist-tooltip"><span
                                        class="chartist-tooltip-value">2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

<?php
    require("include/footer.php");
?>
            