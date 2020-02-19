<?php
// include database connection file
include 'koneksi.php';

// Get id from URL to delete that user
$kode= $_GET['id'];

// Delete user row from table based on given id
$query='DELETE FROM tb_barang WHERE kode_barang="'.$kode.'"';

$hasil=mysqli_query($koneksi,$query);
if($hasil){
	header ('location:barang.php');
}else{
	echo "Data gagal dihapus";
}
?>