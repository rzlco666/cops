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
  require("include/header.php");
  require("include/menubar.php");
?>

     <!-- CONTACT -->
     <section class="contact section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 mx-auto col-md-7 col-12 py-1 mt-1 text-center" data-aos="fade-up">

                      <h1 class="mb-4"><strong>Login</strong> Page</h1>

                      <p>Silahkan masukkan username dan password yang telah diberikan</p>
                    </div>

                    <div class="col-lg-8 mx-auto col-md-10 col-12">
                    
                      <form method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form" action="include/proses.php?login=login">
                        <div class="row">
                          <div class="col-lg-12 col-12">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                          </div>

                          <div class="col-lg-12 col-12">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                          </div>

                          <div class="col-lg-5 mx-auto col-7">
                            <input type="submit" class="form-control" id="submit-button" name="submit">
                          </div>
                        </div>

                      </form>
                    </div>

               </div>
          </div>
     </section>
     
<?php
     require("include/footer.php");
?>