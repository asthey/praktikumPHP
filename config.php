<?php

//koneksi
$koneksi = mysqli_connect("localhost", "root", "", "buku");

if(mysqli_connect_errno()){
    echo "Koneksi Gagal";

}