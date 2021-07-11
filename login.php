<?php
include "config.php";
session_start();
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = md5( $_POST['password']);
	$sql = "SELECT * from login where email='$email' and password='$password'";
	$con = mysqli_query($koneksi, $sql);
	$jawaban = mysqli_num_rows($con);
	if ($jawaban > 0) {
		$data = mysqli_fetch_array($con);
		$_SESSION['email'] = $data['email'];
		echo "<script type='text/javascript'>alert('LOGIN Berhasil'); window.location='index.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('ULANGI LOGIN!'); </script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="style.css" />

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

		<title>Login Data Buku</title>
	</head>
	<body style="background-color: snow">
		
		<div class="container" id="login">
			<div class="card">
				<div class="card-body">
					<h4 class="text-center" style="color: pink">Data Buku</h4>
					<form method="post" action="">
					
						<div class="mb-3 mt-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required />
						</div>
						<div class="mb-3">
							
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" id="password" name="password" required />
							<div id="emailHelp" class="form-text">Masukkan Kata Sandi yang Sesuai</div>
						</div>
						<div id="button">
							<button type="submit" class="btn btn-primary" style="color: #fbfbfb; background-color: #be768d" name="login">Sign In</button>
						</div>
						<div id="button">
							<a href="daftar.php">Daftar</a>
						</div>
						
					</form>
				</div>
			</div>
		</div>

		<footer class="container" id="footer">Rio Anggara Alfat Nur - 20191040024</footer>
		
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>