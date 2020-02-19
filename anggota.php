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
      <li><a href="halaman_user.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
      <a href="Logout.php">Logout</a>
    </ul>
  </nav>
   <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="halaman_admin.php">Home</a>
    <a href="anggota.php">Input Data Anggota</a>
    <a href="barang.php">Input Data Barang</a>
    <a href="datapeminjaman.php">Peminjaman</a>
    <a href="pengembalian.php">Pengembalian</a>
  </div>
  <legend align="center"><h1>Formulir Peminjaman</h1></legend>
  <form action="prosesanggota.php" method="post">
  <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr height="46">
              <td width="10%"> </td>
              <td width="25%"> </td>
              <td width="65%"> </td>
      </tr>
      <tr height="46">
          <td> </td>
          <td>Kode Anggota </td>
          <td><input type="text" name="kode_anggota" size="30" maxlength="12" /></td>
      </tr>
      <tr height="46">
          <td> </td>
          <td>Nama Lengkap</td>
          <td><input type="text" name="nama" size="35" maxlength="30" /></td>
      </tr>
      <tr height="46">
          <td> </td>
          <td>NIM </td>
          <td><input type="text" name="nim" size="30" maxlength="12" /></td>
      </tr>
      
      <tr height="46">
          <td> </td>
          <td>Jurusan</td>
          <td><select name="jurusan">
                  <option value="-">- Pilih Jurusan -
                  <option value="TPTU">Teknik Pendingin dan Tata Udara
                  <option value="TM">Teknik Mesin
                  <option value="TI">Teknik Informatika 
              </select></td>
      </tr>
      <tr height="46">
          <td> </td>
          <td>Kelas</td>
          <td><input type="text" name="kelas" size="20" maxlength="30" /></td>
      </tr>
      <tr height="46">
          <td> </td>
          <td>No. Telp</td>
          <td><input type="text" name="telp" size="20" maxlength="12" /></td>
      </tr>
      <tr height="46">
          <td> </td>
          <td> </td>
          <td><input type="submit" name="submit" value="submit">   
              <input type="reset" name="reset" value="Cancel"></td>
      </tr>
  </table>

  <?php 
if(isset($_GET['pesan'])){
  $pesan = $_GET['pesan'];
  if($pesan == "submit"){
    echo "Data berhasil di input.";
  }else if($pesan == "update"){
    echo "Data berhasil di update.";
  }else if($pesan == "hapus"){
    echo "Data berhasil di hapus.";
  }
}
?>

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
