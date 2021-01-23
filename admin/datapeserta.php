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
                            <h3 class="box-title">Tabel Data Peserta</h3>
                            <p class="text-muted"><a href="tambahpeserta.php">Tambah Peserta</a></p>
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
                                            <th class="border-top-0">Foto</th>
                                            <th class="border-top-0">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        //memanggil proses_admin.php terus manggil fungsi data_peserta buat nampilin semua data peserta
                                        require("proses_admin.php");
                                        $result = $admin -> data_peserta();
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
                                            <td><img width="100" height="100" class="img" src="../user/<?php echo $row['foto']; ?>" /></td>
                                            <! -- buat edit data yg dipilih terus pas diklik langsung ke halaman edit_peserta -->
                                            <td><a href="editpeserta.php?id_user=<?php echo $row['id_user']; ?>"><button class="btn btn-primary"><i class="fas fa-edit" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Edit</button></a></td>
                                            <td>
                                            <! -- buat hapus data yg dipilih terus pas diklik langsung kehapus datanya -->
                                            <a href="proses_admin.php?delete_peserta=<?php echo $row['id_user']; ?>"> <button class="btn btn-danger"><i class="fas fa-eraser" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Hapus</button></a>
                                            </td>
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
