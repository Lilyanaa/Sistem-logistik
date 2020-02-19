<?php 
// mengaktifkan session pada php
// menghubungkan php dengan koneksi database
include 'koneksi.php';
$kode = $_POST['kode_anggota'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
$telp = $_POST['telp'];

if(isset($_POST['submit'])){
            $query = $koneksi->query("INSERT INTO tb_anggota values ('$kode','$nama','$nim','$jurusan','$kelas','$telp')");

        }if($query) {
        header("location:anggota.php");
        } else {
        echo "location:anggota.php";
        }
?>