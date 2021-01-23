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
                            <h3 class="box-title">Tabel Berita</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID Berita</th>
                                            <th class="border-top-0">Judul Berita</th>
                                            <th class="border-top-0">Isi Berita</th>
                                            <th class="border-top-0">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        //memanggil proses_admin.php terus manggil fungsi data_peserta buat nampilin semua data peserta
                                        require("proses_admin.php");
                                        $result = $admin -> data_berita();
                                        //while buat menampilkan semua data yg ada di data alat peserta
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id_berita']; ?></td>
                                            <td><?php echo $row['judul_berita']; ?></td>
                                            <td><?php echo $row['isi_berita']; ?></td>
                                            <! -- buat edit data yg dipilih terus pas diklik langsung ke halaman edit_berita -->
                                            <td><a href="editberita.php?id_berita=<?php echo $row['id_berita']; ?>"><button class="btn btn-primary"><i class="fas fa-edit" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Edit</button></a></td>
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
