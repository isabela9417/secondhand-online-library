
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