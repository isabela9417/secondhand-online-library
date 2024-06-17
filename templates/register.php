
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content = "width=device-width, initioal-scale=1.0">
	<title>register</title>

	<!-- icons link -->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<!-- font link -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="form-container">
	<h3>Register Your Account</h3>
	<form action="" method="post">
		<input type="text" name="name" placeholder="Enter Your Name" required class="box">
		<input type="email" name="email" placeholder="Enter Your Email Address" required class="box">
		<input type="pasword" name="pasword" placeholder="Enter Your Password" required class="box">
		<input type="pasword1" name="pasword1" placeholder="Confirm Your Password">
		<select name="user_type">
			<option value="user">Student</option>
			<option value="admin">Admin</option>
		</select>
		<input type="submit" name="submit" value="Register Now" class="btn"><p>Already have an account? <a href="login.php"></a></p>
	</form>
</div>
</body>
</html> 