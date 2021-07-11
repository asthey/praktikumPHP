<?php
// Include konenksi database
include './config.php';

//menangkap data di kirim dari form
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$dis = (10/100)*$_POST['harga'];
$diskon =$_POST['harga']-$dis;

//Menginput data ke database
mysqli_query($koneksi, "insert into databuku values('','$nama','$kategori','$penerbit','$harga','$diskon')");
//Mengembalikan ke halaman awal
header("location:./index.php");