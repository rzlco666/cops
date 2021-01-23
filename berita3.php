<?php
     session_start();
     if(isset($_SESSION['login'])){
         if ($_SESSION['akses'] == "admin") {
           header("admin/dashboard.php");
         } else {
           header("user/dashboard.php");
         }
     }
     if(isset($_GET['logout'])){
         session_destroy();
         header("Location: index.php");
     }

     require("include/proses.php");
     $result = $landing->tampil_berita3();
     $row = mysqli_fetch_assoc($result);

     require("include/header.php");
     require("include/menubar.php");
?>

     <!-- PROJECT DETAIL -->
     <section class="project-detail section-padding-half">
          <div class="container">
               <div class="row">

                    <div class="col-lg-9 mx-auto col-md-10 col-12 mt-lg-5 text-center" data-aos="fade-up">

                      <h4>Berita</h4>

                      <h1><?php echo $row['judul_berita']; ?></h1>
                    </div>

               </div>
          </div>
     </section>

     <div class="full-image text-center" data-aos="zoom-in">
       <img src="./assets/images/project/project-detail/b3.jpg" class="img-fluid" alt="interview process">
     </div>

     <!-- PROJECT DETAIL -->
     <section class="project-detail section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-sm-12" data-aos="fade-up" data-aos-delay="200">

                      <p class="mt-3 mb-4"><?php echo $row['isi_berita']; ?></p>

                    </div>
               </div>
          </div>
     </section>

<?php
     require("include/footer.php");
?>