<?php
    require("proses_admin.php");
    $id_berita = $_GET['id_berita'];
    $result = $admin->tampil_berita($id_berita);
    $row = mysqli_fetch_assoc($result);

     require("include/header.php");
     require("include/topbar.php");
     require("include/sidebar.php");
     require("include/breadcumb.php");
?>
<script src="https://cdn.tiny.cloud/1/gtfq0mfsmjkv60gz3r2b0o2u7o7fm3erd18uwakwtq84hoeh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
                                <form class="form-horizontal form-material" method="post" action="proses_admin.php?edit_berita=berita">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Judul Berita</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="judul" class="form-control p-0 border-0" value="<?php echo $row['judul_berita']; ?>"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Isi Berita</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea name="isi" class="form-control p-0 border-0" id="tiny"><?php echo $row['isi_berita']; ?></textarea>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <input type="hidden" name="id_berita" value="<?php echo $row['id_berita']; ?>"><br>
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
            <script>
                tinymce.init({
                selector: 'textarea#tiny',
                plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
                toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
                toolbar_mode: 'floating',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'COPS',
                });
            </script>
<?php
    require("include/footer.php");
?>