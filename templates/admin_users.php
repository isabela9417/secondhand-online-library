<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Font Awesome CDN link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

	<!-- Customized CSS -->
	<link rel="stylesheet" href="../css/admin_style.css">

	<title>Admin User</title>
</head>
<body>
<!-- include the header here -->
<section class="users">
	<h1 class="heading">User accounts </h1>
	<div class="box-container">
		<div class="box">
			<p>username: <span>user name here</span></p>
			<p>email: <span>user admin email here</span></p>
			<p>user type: <span>user_type here</span></p>
			<a href="admin_users.html" onclick="return confirm('You sure you want to delete this user?');" class="delete-btn">delete</a>
			
		</div>
		
	</div>
</section>

<!-- include the footer here -->
</body>
</html>