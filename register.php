<?php
include "config.php";
if(isset($_POST['register'])){
    $nama = $_POST ['nama'];
    $email = $_POST ['username'];
    $password = md5( $_POST['password']);
    $sql = "insert into login (nama, username, password) values('$nama','$username','$password')";
    $con = mysqli_query($koneksi, $sql);
    if($con){
        header("location: register.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css">

        <title>Register</title>
    </head>
    <body>
        <div class="container" id="login">
        <div class="container">
            <section class="login-box">
                <h4 class="text-center">REGISTER</h4>
                    <form method="post" action="index.php">
                    
                        <div class="mb-3 mt-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="nama" class="form-control" id="Nama" name="nama" required />
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required />
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required />
                            <div id="emailHelp" class="form-text">Masukkan Password</div>
                        </div>
                        <div id="button">
                            <button type="submit" class="btn btn-primary" style="color: #fbfbfb; background-color: #627544" name="register">Register</button>
                        </div>
                    </form>
            </section>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>