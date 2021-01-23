<?php
    class user{
        private $conn;
        public function __construct(){
            $server="localhost";
            $user="root";
            $pass="";
            $db="cops";
            $this->conn=mysqli_connect($server,$user,$pass,$db);
        }
//=========================================================================================================================================
// =========== untuk data_peserta()
        public function tampil($id_user){
            $sql = mysqli_query($this->conn,"SELECT * FROM data_peserta WHERE id_user = '$id_user'");
            return $sql;
        }
// =========== untuk edit_profile()
        public function edit_profile($id_user,$password,$foto){
            $nama_foto = $foto['name'];
            $tmp_foto = $foto['tmp_name'];
            $dir = 'gambar/';
            $target = $dir.$nama_foto;
            if (empty($nama_foto)) {
                $sql3 = "UPDATE akun SET password=md5('$password') WHERE id_user ='$id_user'";
                if ( mysqli_query($this->conn,$sql3)) {
                    ?>
                    <script>
                        alert("Password Berhasil Diubah");
                        location="profile.php";
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("Password gagal Diubah");
                        location="editprofile.php";
                    </script>
                    <?php
                } 
            }else{
                if (move_uploaded_file($tmp_foto, $target)) {
                    $sql = "UPDATE data_peserta SET foto='$target' WHERE id_user ='$id_user'";
                    $sql2 = "UPDATE akun SET password=md5('$password') WHERE id_user ='$id_user'";
                    if ( mysqli_query($this->conn,$sql) && mysqli_query($this->conn,$sql2)) {
                        ?>
                        <script>
                            alert("Data Berhasil Diubah");
                            location="profile.php";
                        </script>
                        <?php
                    }else{
                        ?>
                        <script>
                            alert("Data gagal Diubah");
                            location="editprofile.php";
                        </script>
                        <?php
                    }
                }
            }     
        }
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
    $user = new user();

    if (isset($_GET['edit_profile'])) {
        $user-> edit_profile($_POST['id_user'],$_POST['password'],$_FILES['foto']);
    }

//=======================================================================================================================
?>