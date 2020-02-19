<?php 
if(isset($_GET['pesan'])){
  $pesan = $_GET['pesan'];
  if($pesan == "berhasil"){
    echo "Selamat anda telah login.<br><br>";
  }else if($pesan == "gagal"){
    echo "Silahkan masukan username / password dengan benar.<br><br>";
  }
}
?>

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
      <li><a href="index.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="halaman_admin.php">Home</a>
    <a href="barang.php">Daftar Barang</a>
    <a href="peminjam.php">Data peminjam</a>
  </div>
  
  <legend align="center"><h1>Penambahan Data Barang </h1></legend>


</html><html>
<head>
    <title>Tambah</title>
</head>


    <a href="barang.php">Kembali</a>
    <br/><br/>

    <form action="prosesadd.php" method="post" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr> 
                <td>Kode Barang </td>
                <td><input type="text" name="kode_barang"></td>
            </tr>
            <tr> 
                <td>Nama Barang </td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr> 
                <td>Gambar Barang </td>
                <td><input type="file" name="gambar_barang"></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td><input type="text" name="status"></td>
            </tr>

            <tr> 
                <td></td>
                <td><input type="submit" name="add" value="Add"></td>
            </tr>
        </table>
    </form>

</body>

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
