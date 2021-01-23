<?php
session_start();
require("proses_user.php");
$user = new user(); 
$id_user = $_SESSION['id_user'];
$result = $user->tampil($id_user);
$row = mysqli_fetch_assoc($result);
?>

<html>
 <head>
  <title>Surat Keterangan Diterima</title>
 </head>

 <body bgcolor="white">
  <img src="gambar/PDRM.svg" height="130" align="left" >
  <img src="gambar/gov.png" height="130" align="right" >
  <font face="Arial" size="5" color="black"> <p align="center"> <b>Polis Diraja Malaysia</b> </p></font>
  <hr>

  <font face="Arial" color="black" size="6"> <p align="center"> <u> <b> SK DITERIMA </b></u></font><br>
  
  <font face="Arial" color="black" size="4"> Nomor: PDRM/<?php echo $row['id_user']; ?>/RMP/GOV/MY </p></font>

  <p><font face="Arial">
  <br>
  Berdasarkan surat ini tanggal <?php echo date('d-m-Y');?> dengan ini kami menerangkan bahwa:
  </p>
  <br>
    <p>Nama    : <?php echo $row['nama']; ?></p>

    <p>Alamat : <?php echo $row['alamat']; ?></p>

    <p>No Pendaftaran  : <?php echo $row['id_user']; ?></p>

<br>
  <p><font face="Arial">
   <b>Telah diterima sebagai anggota PDRM dan silahkan mengikuti prosedur selanjutnya.</b>
  </font></p>
  <br>
  <p align="left">&nbsp&nbsp&nbsp&nbsp&nbspSersan&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspKepala Polis<br>
    <br>
    <br>
    <br>(&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp)</p>
 </body>
 <script>
    window.print();
  </script>
</html>