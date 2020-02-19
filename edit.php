<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Logistik</title>
  <link rel="stylesheet" href="style.css">
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
      <li><a href="halaman_admin.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="halaman_admin.php">Home</a>
    <a href="barang.php">Daftar Barang</a>
    <a href="#">Peminjaman</a>
    <a href="#">Pengembalian</a>
    <a href="#">Data peminjam</a>
  </div>
  
  <legend align="center"><h1>Edit Data</h1></legend>

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

</body>
</html>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="barang.php">Home</a>
    <br/><br/>


    <?php
// Create database connection using config file
    include_once("koneksi.php");

// Fetch all users data from database
    $kode=$_GET['id'];

    $query='SELECT * FROM tb_barang WHERE kode_barang="'.$kode.'"';

    $result = mysqli_query($koneksi, $query);

    ?>

  <form method="post" action="prosesedit.php" enctype="multipart/form-data">

    <?php
     
    while($user_data = mysqli_fetch_array($result)) { 
    ?>
      <table>
        <tr>      
          <td>Kode Barang</td>
          <td>
            <input type="text" name="kode_barang" value="<?php echo $user_data['kode_barang']; ?>">
          </td>
        </tr>
        <tr>
          <td>Gambar barang</td>
          <td><input type="file" name="gambar_barang" value="<?php echo $user_data['gambar_barang']; ?>"></td>
        </tr>
        <tr>
        <tr>      
          <td>Nama Barang</td>
          <td>
            <input type="text" name="nama_barang" value="<?php echo $user_data['nama_barang']; ?>">
          </td>
        </tr>
        
          <td>Status</td>
          <td><input type="text" name="status" value="<?php echo $user_data['status']; ?>"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="SIMPAN"></td>
        </tr>   
      </table>
    </form>
    <?php 
  }
  ?>
</body>
</html>