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
      <li><a href="halaman_admin.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="logout.php" align="left">logout</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="halaman_admin.php">Home</a>
    <a href="anggota.php">Input Data Anggota</a>
    <a href="barang.php">Input Data Barang</a>
    <a href="datapeminjam.php">Data peminjam</a>
    <a href="pengembalian.php">Pengembalian</a>
  </div>
   
  <legend align="center"><h1>Daftar Barang</h1></legend>


<?php 
if(isset($_GET['pesan'])){
  $pesan = $_GET['pesan'];
  if($pesan == "add"){
    echo "Data berhasil di input.<br><br>";
  }else if($pesan == "edit"){
    echo "Data berhasil di update.<br><br>";
  }else if($pesan == "delete"){
    echo "Data berhasil di hapus.<br><br>";
  }
}
?>

<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT * FROM tb_barang ORDER BY kode_barang ASC");
?>

<a href="add.php">Tambah Barang</a><br/><br/>

    <table width='80%' border=1>

    <tr>
         <th>Kode Barang</th> <th>Gambar Barang</th> <th>Nama Barang</th> <th>Status</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {
        ?>
    <tr>
        <td> <?php echo $user_data['kode_barang']; ?></td>
        <td> <?php echo $user_data['gambar_barang']; ?></td>
        <td> <?php echo $user_data['nama_barang']; ?></td>
        <td> <?php echo $user_data['status']; ?></td>     
        <td>
        <a href="edit.php?id=<?php echo $user_data['kode_barang'] ?>">Edit</a>
        |
        <a href="delete.php?id=<?php echo $user_data['kode_barang'] ?>" 
        onclick="return confirm('apakah anda yakin akan menghapus barang <?php echo $user_data['nama_barang']; ?> ?')">Delete</a>

      </td>
    </tr>
    <?php        
    }
    ?>
    </table>

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