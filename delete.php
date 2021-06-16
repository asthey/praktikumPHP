<?php
//koneksi database
include 'config.php';

//Menangkap data id yang di kirim dari url karena delete hanya membutuhkan id
$id = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi, "delete from mahasiswa where id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");
?>