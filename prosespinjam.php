<?php 
// mengaktifkan session pada php
// menghubungkan php dengan koneksi database
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
$barang = $_POST['kode_barang'];
$pinjam = $_POST['t_pinjam'];
$kembali = $_POST['t_kembali'];
$telp = $_POST['telp'];

if(isset($_POST['submit'])){
            $query = $koneksi->query("INSERT INTO tb_peminjaman values ('$nim','$nama','$jurusan','$kelas','$barang','$pinjam','$kembali','$telp')");

        }if($query) {
        header("location:peminjaman.php?pesan");
        } else {
        echo "location:peminjaman.php?pesan";
        }
?>