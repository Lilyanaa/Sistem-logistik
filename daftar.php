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
      <li><a href="index.html">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="index.html">Home</a>
    <a href="#">Daftar Barang</a>
    <a href="#">Peminjaman</a>
    <a href="#">Pengembalian</a>
    <a href="#">Data peminjaman</a>
  </div>
  
  <legend align="center"><h1>FORM TRANSAKSI PEMINJAMAN</h1></legend>
  <form action="prosesdaftar.php" method="post">
  <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr height="46">
              <td width="10%"> </td>
              <td width="25%"> </td>
              <td width="65%"> </td>
      </tr>
      <tr height="46">
          <td> </td>
          <td>Nama Lengkap</td>
          <td><input type="text" name="nama" size="35" maxlength="30" /></td>
      </tr>
      <tr height="46">
          <td> </td>
          <td>NIM </td>
          <td><input type="number" name="nim" size="30" maxlength="7" /></td>
      </tr>
      <tr height="46">
          <td> </td>
          <td>Jurusan</td>
          <td><select name="jurusan">
                  <option value="-">- Pilih Jurusan -
                  <option value="TPTU">Teknik Pendingin dan Tata Udara
                  <option value="TM">Teknik Mesin
                  <option value="TI">Teknik Informatika 
              </select></option></td>
      </tr>
      <tr height="46">
          <td> </td>
          <td>Kelas</td>
          <td><input type="text" name="Kelas" size="20" maxlength="10" /></td>
      </tr>

      <tr height="46">
          <td> </td>
          <td>No. Telp</td>
          <td><input type="text" name="telepon" size="20" maxlength="12" /></td>
      </tr>
      <tr height="46">
          <td> </td>
          <td> </td>
          <td><input type="submit" name="Submit" value="Daftar">   
              <input type="reset" name="reset" value="Cancel"></td>
      </tr>
  </table>
</form>


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