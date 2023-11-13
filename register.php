<?php
require 'Functions.php';

if( isset($_POST["register"]) ) {
 
        if ( registrasi($_POST) > 0 ) {
             echo "<script>
                    alert ('Oke Silahkan Login !!');
                </script>";
        }else {
            echo mysqli_error($conn);
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Halaman Registrasi</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Registrasi</p>

		<form action="" method="POST">
			<label for="username">Username</label>
			<input type="text" id="username" name="username" class="form_login" placeholder="Username ..">
 
			<label for="password">Password</label>
			<input type="password" id="password" name="password" class="form_login" placeholder="Password ..">

			<label for="password2">Confirm Password</label>
			<input type="password" id="password2" name="password2" class="form_login" placeholder="Confirm Password ..">
 
			<button type="submit" name="register" class="btn btn-primary">Registrasi</button>
 
			<br/>
			<br/>
			<div class="mt-4 text-center">
				Already have an account ? <a href="index.php">Login</a>
			</div>

			<div class="footer">
				Copyright &copy; 2023 by: Muhammad Nuruz Zaki
			</div>
		</form>
	</div>

</body>
</html>