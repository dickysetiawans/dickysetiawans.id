<?php 
// connect database 
$conn = mysqli_connect("localhost","root","","dicky");

function register($data) {
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$nama = strtolower(stripcslashes($data["nama"]));
	$email = strtolower(stripcslashes($data["email"]));
	// cek username already use atau sudah dipakai belum
	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
	if ( mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username already in use')
			  </script>";
		return false;
	}

	// cek nama
	$ceknama = mysqli_query($conn, "SELECT nama FROM users WHERE nama = '$nama'");
	if ( mysqli_fetch_assoc($ceknama)) {
		echo "<script>
				alert('nama already in use')
			  </script>";
		return false;
	}

	// cek email
	$cekemail = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
	if ( mysqli_fetch_assoc($cekemail)) {
		echo "<script>
				alert('email already in use')
			  </script>";
		return false;
	}


	// cek confirm password
	if ($password !== $password2 ){
		echo "<script>
				alert('password tidak sesuai');
			  </script>";
		return false;
	
	}
	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// insert atau tambahkan ke data ke database
	mysqli_query($conn, "INSERT INTO users VALUES('','$username','$password','$nama','$email')");

	return mysqli_affected_rows($conn);

	
}



?>