<?php
     session_start();
     require("include/header.php");
     require("include/topbar.php");
     require("include/sidebar.php");
     require("include/breadcumb.php");
     require("proses_user.php");
     $user = new user(); 
     $id_user = $_SESSION['id_user'];
     $result = $user->tampil($id_user);
     $row = mysqli_fetch_assoc($result);
?>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Tabel Data Nilai</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID Peserta</th>
                                            <th class="border-top-0">Nama Lengkap</th>
                                            <th class="border-top-0">Skor Total</th>
                                            <th class="border-top-0">Keterangan</th>
                                            <?php if($row['keterangan'] == 1) { echo" 
                                            <th class='border-top-0'>Aksi</th>
                                            "; }
                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['id_user']; ?></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['skor_total']; ?></td>
                                            <td><?php if($row['keterangan'] == 0) { echo "Tidak Lulus"; } else { echo "Lulus"; } ?></td>
                                            <?php if($row['keterangan'] == 1) { echo" 
                                            <td><a href='cetaksk.php' target='_blank' class='btn btn-primary'><i class='fas fa-print' aria-hidden='true'></i>&nbsp;&nbsp;&nbsp;Cetak SK Penerimaan</a></td>
                                            "; }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

<?php
    require("include/footer.php");
?>
