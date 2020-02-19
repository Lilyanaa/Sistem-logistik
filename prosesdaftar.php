<?php 
if(isset($_POST['daftar'])){
	include 'koneksi.php';
		$daftar = mysqli_query($koneksi, "INSERT INTO tb_daftar VALUES(
			NULL,
			'".$_POST['nama']."',
			'".$_POST['nim']."',
			'".$_POST['jurusan']."',
			'".$_POST['kelas']."',
			'".$_POST['telepon']."')");
		if($daftar){
			echo 'oke';
		}else{
			echo 'hmmmm'.mysqli_error($koneksi);
		}
	}
?>