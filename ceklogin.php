php<?php
include "config.php";
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5( $_POST['password']);
    $sql = "SELECT * from login where username='$username' and password='$password'";
    $con = mysqli_query($koneksi, $sql);
    $jawaban = mysqli_num_rows($con);
    if ($jawaban > 0) {
        $data = mysqli_fetch_array($con);
        $_SESSION['username'] = $data['username'];
        echo "<script type='text/javascript'>alert('LOGIN SUKSES'); window.location='index.php'</script>";
    } else {
        echo "<script type='text/javascript'>alert('LOGIN GAGAL!'); </script>";
    }
}
?>