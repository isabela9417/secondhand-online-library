<?php

include 'config.php';

if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = mysqli_real_escape_string($conn, md5($_POST['password']));
	$cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
	$user_type = $_POST['user_type'];

	$select_users = mysqli_query($conn, "SELECT * FROM 'users' WHERE email = '$email' AND password = '$pass'") or die('query failed');

	if(mysqli_num_rows($select_users) > 0){
		$message[] = 'user already exist!';
	}else{
		if($pass != $cpass){
			$message[] = 'Confirm password not matched!';
		}else{
			mysqli_query($conn, "INSERT INTO 'users'(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('query failed')
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta charset="http-equiv='X-UA-Compatible" content="IE=edge">
	<meta charset="viewport" content='width=device-width, initial-scale=1.0'>
	<title>register</title>

	<!-- font awesome cdb link -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

	<!-- customized css -->
	<link rel="stylesheet" type="text/css" href="..//css/style.css">
</head>
<body>
	<div class="form-container">
		<form action="" method="POST">
			<h3>Register for an account</h3>
			<input type="text" name="name" placeholder="Enter your name" required class="box">
			<input type="email" name="email" placeholder="Enter your email" required class="box">
			<input type="password" name="password" placeholder="Enter your name" required class="box">
			<input type="password" name="cpassword" placeholder="Confirm your name" required class="box">
			<select name="user_type" class="box">
				<option value="user">buyer</option>
				<option value="admin">seller</option>
			</select>
			<input type="submit" name="submit" value="sign up" class="btn">
			<p>Already have an account? <a href="login.html">sign in</a></p>
		</form>
	</div>

</body>
</html>