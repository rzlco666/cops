<?php
     require("include/header.php");
     require("include/topbar.php");
     require("include/sidebar.php");
     require("include/breadcumb.php");
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
                            <h3 class="box-title">Tabel Data Peserta Lulus</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID Peserta</th>
                                            <th class="border-top-0">Nama Lengkap</th>
                                            <th class="border-top-0">Jenis Kelamin</th>
                                            <th class="border-top-0">Username</th>
                                            <th class="border-top-0">Alamat</th>
                                            <th class="border-top-0">No HP</th>
                                            <th class="border-top-0">Skor Total</th>
                                            <th class="border-top-0">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        //memanggil proses_admin.php terus manggil fungsi data_peserta buat nampilin semua data peserta
                                        require("proses_admin.php");
                                        $result = $admin -> data_pesertalulus();
                                        //while buat menampilkan semua data yg ada di data alat peserta
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id_user']; ?></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['kelamin']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['alamat']; ?></td>
                                            <td><?php echo $row['hp']; ?></td>
                                            <td><?php echo $row['skor_total']; ?></td>
                                            <td><?php if($row['keterangan'] == 0) { echo "Tidak Lulus"; } else { echo "Lulus"; } ?></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
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
