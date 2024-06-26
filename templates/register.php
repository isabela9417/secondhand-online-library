<?php
	include 'config.php';

	if(asset($_POST['submit'])){
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, md5($_POST['password']));
		$cpassword = mysqli_real_escape_string($conn, md5($_POST['password1']));
		$user_type = $_POST['user_type'];

		$select_user = smysqli_query($conn, "SELECT * FROM `students` WHERE email = '$email' AND password = '$password'") or die('query failed');
		
		// ensure that passwords do match
		if(mysqli_num_rows($select_users) > 0){
			$message[] = 'User already exist!';
		}else{
			if($password != $password1){
				$message[] = 'Passweord does not match!';
			}else{
				mysqli_query($conn, "INSERT INTO `students` (name, email, password, user_type) VALUES('$name', '$email', '$password1', $user_type)") or die ('query failed');
			}	
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content = "width=device-width, initioal-scale=1.0">
	<title>register</title>

	<!-- icons link -->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<!-- font awesome cdn link -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

	<!--custom css -->
	<link rel="stylesheet" href="../css/style.css">

</head>
<body>
<div class="form-container">
	<form action="" method="post">
		<h3>Register Your Account</h3>
		<input type="text" name="name" placeholder="Enter Your Name" required class="box">
		<input type="email" name="email" placeholder="Enter Your Email Address" required class="box">
		<input type="password" name="password" placeholder="Enter Your Password" required class="box">
		<input type="password" name="password1" placeholder="Confirm Your Password" required class="box">
		<select name="user_type" class="box">
			<option value="user">Student</option>
			<option value="admin">Admin</option>
		</select>
		<input type="submit" name="submit" value="Register Now" class="btn"><p>Already have an account? <a href="login.php">Login Now</a></p>
	</form>
</div>
</body>
</html> 