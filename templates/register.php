<?php
	
	include 'config.php';

	// get data from the user
	if(isset($_POST['submit'])){
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
		$user_type = $_POST['user_type'];

		$select_user = mysqli_query($conn, "SELECT * FROM `students` WHERE email = '$email' AND password = 'cpassword'") or die('query failed');

		if(mysqli_num_rows($select_user) > 0){
			$message[] = 'User Already Exist!';
		}else{
			if($password != $cpassword){
				$message[] = 'Password is not a match!';
			}else{
				mysqli_query($conn, "INSERT INTO `students`(user_name, email, password, user_type) VALUES('$name', '$email', '$cpassword', '$user_type')") or die ('Query Failed');
				$message[] = 'Registratered Successfully!';
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
	<title>Online SecondHand Bookshop</title>

	<!-- icons link -->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<!-- font awesome cdn link -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

	<!--custom css -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
<div class="message">
	<span></span>
	<i class="fas fa-times" onclick="this.parentElement.remove();"></i>
</div>
				
	<!-- setting different error messages for registering an account -->
<?php
	if(isset($message)){
		foreach($message as $message){
			echo '';
				
			}
		}
	?>

<div class="form-container">
	<form action="" method="post">
		<h3>Register Your Account</h3>
		<input type="text" name="name" placeholder="Enter Your Name" required class="box">
		<input type="email" name="email" placeholder="Enter Your Email Address" required class="box">
		<input type="password" name="password" placeholder="Enter Your Password" required class="box">
		<input type="password" name="cpassword" placeholder="Confirm Your Password" required class="box">
		<select name="user_type" class="box">
			<option value="buyStud">Buy A Book</option>
			<option value="sellStud">Sell A Book</option>
		</select>
		<input type="submit" name="submit" value="Register Now" class="btn"><p>Already have an account? <a href="login.php">Login Now</a></p>
	</form>
</div>
</body>
</html> 