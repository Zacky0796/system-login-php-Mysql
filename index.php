<?php 
session_start();
require 'Functions.php';

if ( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // Cek Email
    if ( mysqli_num_rows($result) === 1 ) {
            
        // Cek Password
        $row = mysqli_fetch_assoc($result);
        if( password_verify ($password, $row["password"]) ) {
            
            header("Location: Home.html");
            exit;
        }else {
            echo "<script>
                    alert ('Username dan Password Anda Salah !');
                </script>";
        }
    }else {
        echo "<script>
                alert ('Username Anda Belum Terdaftar! Silahkan Registrasi Dulu yaa !');
            </script>";
    }
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>Membuat System Login dengan PHP & MySql</h1>

 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="" name="login" method="POST">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<button type="submit" class="btn btn-primary" name="login">Login</button>
 
			<br/>
			<br/>
			<div class="mt-1 text-center">
				<a href="register.php">Create Your Account</a>
			</div>
			<div class="footer">
				Copyright &copy; 2023 by: Muhammad Nuruz Zaki
			</div>
		</form>
		
	</div>
 
 
</body>
</html>
