<?php 
// koneksi database
include_once ("koneksi.php");
 
// menangkap data yang di kirim dari form
$kode = $_POST['kode_barang'];
$gambar= $_FILES['gambar_barang']['name'];
$source= $_FILES['gambar_barang']['tmp_name'];
$folder='./uploads/';
$nama = $_POST['nama_barang'];
$status = $_POST['status'];

move_uploaded_file($source, $folder.$gambar);
 
// update data ke database
$query="UPDATE tb_barang SET gambar_barang='$gambar',nama_barang='$nama',status='$status' WHERE kode_barang='$kode'";

$hasil=mysqli_query($koneksi,$query);
if($hasil){
	header ('location:barang.php');
}else{
	echo "Data gagal dihapus";
}