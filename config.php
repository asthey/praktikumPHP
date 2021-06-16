<?php

//koneksi
$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

if(mysqli_connect_errno()){
    echo "Koneksi Gagal";

}