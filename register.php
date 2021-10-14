<?php
session_start();
if(isset($_SESSION["login"]) ){
	header("Location: home");
	exit;
}
require 'functions.php';

if (isset($_POST["register"]) ){
	if (register($_POST) > 0 ){
		echo "<script>
						alert('user baru telah di tambahkan')
					</script>";
	}else{
		echo mysqli_error($conn);
	}

}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/icon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/register.css">
    <title>Register</title>
  </head>
  <body>
  	<section class="register-body">
  		<img src="assets/img/bg-register.png" class="register-img">
	   	<div class="register-bar shadow p-3 mb-5 bg-white rounded">
	   		<h2 align="center">Register</h2>
		    <form class="d-flex" action="" method="POST">
		    	<li>
		    		<input class="form-control me-2" type="text" placeholder="Username" aria-label="username" name="username" id="username"autocomplete="off" required="">
		    		<!--Password-->
		    		<input class="form-control me-2" type="password" placeholder="Password" aria-label="password" name="password" id="password" autocomplete="off" required="">
		    		<!--confrim Password-->
						<input class="form-control me-2" type="password" placeholder="Confirm password" aria-label="password2" name="password2" id="password2" autocomplete="off" required="">
						<!--nama-->
						<input class="form-control me-2" type="text" placeholder="Name" aria-label="nama" name="nama" id="nama" autocomplete="off" required="">

						<input class="form-control me-2" type="text" placeholder="Email" aria-label="email" name="email" id="email" autocomplete="off" required="">
						<button type="submit" name="register" class="btn btn-1 ">Submit</button>	
						<a href="Login" class="login-link">Login</a>
		    	</li>         
		    </form>
			</div>
		</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
  </body>
</html>