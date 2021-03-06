<?php 
session_start();
 
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Logistik</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>

    <ul class="navbar-nav">
      <li><a href="halaman_user.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="logout.php" align="left">logout</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="halaman_user.php">Home</a>
    <a href="infobarang.php">Daftar Barang</a>
  </div>
   
  <legend align="center"><h1>Daftar Barang</h1></legend>

</body>

<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT * FROM tb_barang ORDER BY kode_barang ASC");
?>

    <?php  
    while($user_data = mysqli_fetch_array($result)) {
    ?>
    <div class="box-gambar">
      <br>
        <?php echo $user_data['nama_barang']."<br><br>"; ?>
        <img src="uploads/<?php echo $user_data['gambar_barang']; ?>" />
        <?php echo $user_data['status']."<br><br>"; ?>

    </div>
    <?php } ?>

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>

</html>