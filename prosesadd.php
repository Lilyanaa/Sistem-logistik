<?php
include 'koneksi.php';

        $kode = $_POST['kode_barang'];
        $gambar= $_FILES['gambar_barang']['name'];
        $source= $_FILES['gambar_barang']['tmp_name'];
        $folder='./uploads/';
        $nama = $_POST['nama_barang'];
        $status = $_POST['status'];

        move_uploaded_file($source, $folder.$gambar);


        // Insert user data into table
        if(isset($_POST['add'])){
            $query = $koneksi->query("INSERT INTO tb_barang values ('$kode','$gambar','$nama','$status')");
            
        }if ($query) {
        header("location:barang.php?pesan=berhasil");
        } else {
        header("location:barang.php?pesan=gagal");
        }
    ?>