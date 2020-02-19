<?php 
if(isset($_GET['pesan'])){
  $pesan = $_GET['pesan'];
  if($pesan == "login"){
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
    <a href="index.php">Home</a>
    <li><a href="#">About</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="login.php">Login</a></li>
  </div>
  
  
  <legend align="center"><h1>Silahkan Login :</h1></legend>
  <form action="proseslogin.php" method="post">
  <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr height="46">
              <td width="10%"> </td>
              <td width="25%"> </td>
              <td width="65%"> </td>
      </tr>
      <tr height="46">
          <td> </td>
          <td>Username </td>
          <td><input type="text" name="username" size="20" maxlength="30" /></td>
      </tr>

      <tr height="46">
          <td> </td>
          <td>Password</td>
          <td><input type="password" name="password" size="20" maxlength="30" /></td>
      </tr>
      <tr height="46">
          <td> </td>
          <td> </td>
          <td><input type="submit" name="login" value="Login">   
              <input type="reset" name="reset" value="Cancel"></td>
      </tr>
      <tr height="46">
        <td colspan="4" align="right">Belum punya akun ? <a href=""><b>Daftar</b></a>
        </td>
      </tr>

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