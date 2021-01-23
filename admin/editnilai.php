<?php
    require("proses_admin.php");
    $id_user = $_GET['id_user'];
    $result = $admin->tampil($id_user);
    $row = mysqli_fetch_assoc($result);

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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post" action="proses_admin.php?edit_nilai=nilai">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Skor Kesehatan</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="kesehatan" class="form-control p-0 border-0" value="<?php echo $row['skor_kesehatan']; ?>"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Skor Psikotest</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="psikotest" class="form-control p-0 border-0" value="<?php echo $row['skor_psikotest']; ?>"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Skor TPA</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="tpa" class="form-control p-0 border-0" value="<?php echo $row['skor_tpa']; ?>"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Skor Fisik</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="fisik" class="form-control p-0 border-0" value="<?php echo $row['skor_fisik']; ?>"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                                            <input type="submit" class="btn btn-success">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
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