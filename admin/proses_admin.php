<?php
    class admin{
        private $conn;
        public function __construct(){
            $server="localhost";
            $user="root";
            $pass="";
            $db="cops";
            $this->conn=mysqli_connect($server,$user,$pass,$db);
        }
// =========== untuk registrasi
        public function registrasi($nama,$username,$password,$alamat,$hp,$kelamin){
                $sql = mysqli_query($this->conn, "INSERT INTO akun (username,password, akses) VALUES ('$username', md5('$password'), 'user')");
                $ambil_id = mysqli_query($this->conn, "SELECT id_user FROM akun WHERE username='$username' AND password=md5('$password')");
                $row = mysqli_fetch_assoc($ambil_id);
                $id_user = $row['id_user'];
                $user = mysqli_query($this->conn, "INSERT INTO data_peserta (nama, username, id_user, alamat, hp, foto, kelamin) VALUES ('$nama', '$username', $id_user, '$alamat', '$hp', 'gambar/default.png','$kelamin')");
                if ($sql && $user) {
                  ?>
                  <script>
                      alert("Registrasi Berhasil");
                      location="datapeserta.php";
                  </script>
                  <?php
                } else {
                  echo mysqli_error($this->conn);
                }
              ?>
              <script>
                  alert("Registrasi Gagal");
                  location="tambahpeserta.php";
              </script>
              <?php
        }
// =========== untuk data_peserta()
        public function data_peserta(){
            $sql = mysqli_query($this->conn, "SELECT * FROM data_peserta");
            return $sql;
        }
// =========== untuk data_pesertalulus()
        public function data_pesertalulus(){
            $sql = mysqli_query($this->conn, "SELECT * FROM data_peserta WHERE keterangan = 1");
            return $sql;
        }

// =========== untuk tampil()
        public function tampil($id_user){
            $sql = mysqli_query($this->conn,"SELECT * FROM data_peserta WHERE id_user = '$id_user'");
            return $sql;
        }
// =========== untuk tampil_admin()
        public function tampil_admin($id_user){
            $sql = mysqli_query($this->conn,"SELECT * FROM akun WHERE id_user = '$id_user'");
            return $sql;
        }
// =========== untuk edit data peserta()
        public function edit_peserta($id_user,$nama,$username,$alamat,$hp){
            $sql = "UPDATE data_peserta SET nama='$nama',
                    alamat='$alamat',hp='$hp' WHERE id_user = '$id_user'";
            if (mysqli_query($this->conn,$sql)) {
              ?>
              <script>
                  alert("Data Berhasil Diubah");
                  location="datapeserta.php";
              </script>
              <?php
          }else{
              ?>
              <script>
                  alert("Data gagal Diubah");
                  location="editpeserta.php";
              </script>
              <?php
            }
        }
// =========== untuk delete data peserta()
        public function delete_peserta($id_user){
            $sql =mysqli_query($this->conn, "DELETE FROM data_peserta  WHERE id_user = '$id_user'");
            $sql2 =mysqli_query($this->conn, "DELETE FROM akun  WHERE id_user = '$id_user'");
            if (mysqli_query($this->conn,$sql) && mysqli_query($this->conn,$sql2)) {
              ?>
              <script>
                  alert("Data Berhasil Diubah");
                  location="datapeserta.php";
              </script>
              <?php
          }else{
              ?>
              <script>
                  alert("Data Berhasil Diubah");
                  location="datapeserta.php";
              </script>
              <?php
            }
          }
// =========== untuk edit data nilai()
        public function edit_nilai($id_user,$kesehatan,$psikotest,$tpa,$fisik){
            $sql = "UPDATE data_peserta SET skor_kesehatan='$kesehatan',
                    skor_psikotest='$psikotest',skor_tpa='$tpa',skor_fisik='$fisik',skor_total='$kesehatan'+'$psikotest'+'$tpa'+'$fisik' WHERE id_user = '$id_user'";
            $sql2 = "UPDATE data_peserta SET keterangan = CASE
                     WHEN skor_total >= 350 THEN 1
                     ELSE 0
                     END 
                     WHERE id_user = '$id_user'";
            if (mysqli_query($this->conn,$sql) && mysqli_query($this->conn,$sql2)) {
              ?>
              <script>
                  alert("Data Berhasil Diubah");
                  location="datanilai.php";
              </script>
              <?php
          }else{
              ?>
              <script>
                  alert("Data gagal Diubah");
                  location="editnilai.php";
              </script>
              <?php
            }
        }
// =========== untuk data_berita()
        public function data_berita(){
            $sql = mysqli_query($this->conn, "SELECT * FROM data_berita");
            return $sql;
        }
// =========== untuk tampil_berita()
        public function tampil_berita($id_berita){
            $sql = mysqli_query($this->conn,"SELECT * FROM data_berita WHERE id_berita = '$id_berita'");
            return $sql;
        }

// =========== untuk edit data berita()
        public function edit_berita($id_berita,$judul,$isi){
            $sql = "UPDATE data_berita SET judul_berita='$judul',
                    isi_berita='$isi' WHERE id_berita = '$id_berita'";
            if (mysqli_query($this->conn,$sql)) {
            ?>
            <script>
                alert("Data Berhasil Diubah");
                location="berita.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Data gagal Diubah");
                location="berita.php";
            </script>
            <?php
            }
        }
//=========================================================================================================================================
//  <-- Page Chart -->
        public function list_tidaklulus(){
            $sql = mysqli_query($this->conn, "SELECT * FROM data_peserta WHERE keterangan=0");
            return $sql;
        }
        public function list_lulus(){
            $sql = mysqli_query($this->conn, "SELECT * FROM data_peserta WHERE keterangan=1");
            return $sql;
        }
        public function list_daftar(){
            $sql = mysqli_query($this->conn, "SELECT * FROM data_peserta");
            return $sql;
        }

    }

    // digunakan untuk memanggil class sewa
    $admin = new admin();

    if (isset($_GET['registrasi'])) {
        $admin -> registrasi($_POST['nama'],$_POST['username'],$_POST['password'],$_POST['alamat'],$_POST['hp'],$_POST['kelamin']);
    } 

    if (isset($_GET['edit_peserta'])) {
        $admin-> edit_peserta($_POST['id_user'],$_POST['nama'],$_POST['username'],$_POST['alamat'],$_POST['hp']);
    }

    if (isset($_GET['delete_peserta'])) {
        $admin-> delete_peserta($_GET['delete_peserta']);
      }

    if (isset($_GET['edit_nilai'])) {
        $admin-> edit_nilai($_POST['id_user'],$_POST['kesehatan'],$_POST['psikotest'],$_POST['tpa'],$_POST['fisik']);
    }

    if (isset($_GET['edit_berita'])) {
        $admin-> edit_berita($_POST['id_berita'],$_POST['judul'],$_POST['isi']);
    }
//=======================================================================================================================
?>