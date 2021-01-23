<?php
    class landing{
        private $conn;
        public function __construct(){
            $server="localhost";
            $user="root";
            $pass="";
            $db="cops";
            $this->conn=mysqli_connect($server,$user,$pass,$db);
        }
// ================== untuk login
        public function login($username,$password){
            $sql = mysqli_query($this->conn,"SELECT * FROM akun WHERE username = '$username' AND password = md5('$password')");
            $row = mysqli_fetch_assoc($sql);
            $num = mysqli_num_rows($sql);
            if ($num != 0) {
                session_start();
                if ($row['akses'] == "admin") {
                    $_SESSION['id_user'] = $row['id_user'];
                    $_SESSION['username'] = $username;
                    $_SESSION['akses'] = $row['akses'];
                    $_SESSION['login'] = "sukses";
                    header("location: ../admin/dashboard.php");
                } else {
                    $_SESSION['id_user'] = $row['id_user'];
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    $_SESSION['akses'] = $row['akses'];
                    $_SESSION['login'] = "sukses";
                    header("location: ../user/dashboard.php");
                }
            }
            else{
                ?>
                <script>
                    alert("Akun tidak ditemukan");
                    location="../login.php";
                </script>
                <?php
            }
        }

// =========== untuk tampil_berita1()
        public function tampil_berita1(){
            $sql = mysqli_query($this->conn,"SELECT * FROM data_berita WHERE id_berita = 1");
            return $sql;
        }
// =========== untuk tampil_berita2()
        public function tampil_berita2(){
            $sql = mysqli_query($this->conn,"SELECT * FROM data_berita WHERE id_berita = 2");
            return $sql;
        }
// =========== untuk tampil_berita3()
        public function tampil_berita3(){
            $sql = mysqli_query($this->conn,"SELECT * FROM data_berita WHERE id_berita = 3");
            return $sql;
        }
        
    } 

    // digunakan untuk memanggil class landing
    $landing = new landing();
// ======================================================================================================================
    if (isset($_GET['login'])) {
        $landing -> login($_POST['username'],$_POST['password']); 
    } 
//=======================================================================================================================
?>