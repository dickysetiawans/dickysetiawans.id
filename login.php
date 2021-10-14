<?php 
session_start();
if(isset($_SESSION["login"]) ){
	header("Location: home");
	exit;
}
// import 
require 'functions.php';
// cek submit
if (isset($_POST["submit"]) ){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
	//cek username
	if ( mysqli_num_rows($result) === 1){
		//cek password

		$row = mysqli_fetch_assoc($result); 
		if (password_verify($password, $row["password"]) ){
			$_SESSION["login"]= true;
			echo "<script>
			 		alert('welcom to my website');
			 	   </script>";
			header("Location: home");
			exit;
		}
	}
	$error = true;
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
    <link rel="stylesheet" type="text/css" href="assets/login.css">
    <title>Login</title>
  </head>
  <body>
  	<section class="login-body">
  		<img src="assets/img/bg-register.png" class="login-img">
	   	<div class="login-bar shadow p-3 mb-5 bg-white rounded">
	   		<div class="bar-items">
		   		<h2 align="center">Login</h2>
		   		<?php if( isset($error) ) : ?>
					<p style="color: red;
					font-style: italic; text-align: center;">Username atau password salah</p>
				<?php endif; ?>
			    <form class="d-flex" action="" method="POST">
			    	<li>
			    		<!--username-->
			    		<input class="form-control me-2" type="text" placeholder="Username" aria-label="username" name="username" id="username" autocomplete="off" required="">
			    		<!--Password-->
			    		<input class="form-control me-2" type="password" placeholder="Password" aria-label="password" name="password" id="password" required="">
						<button type="submit" name="submit" class="btn btn-1 ">Submit</button>	
						<a href="Register" class="register-link">Sign up</a>
			    	</li>
		    	</form>
			</div>
		</div>
		</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
  </body>
</html>