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

	<title>Contact Us</title>
</head>
<body>
<!-- include the header here -->

<section class="messages">
	<h1 class="heading">Contact Us</h1>
	<br><br>
	<div class="box-container">
		<!-- php here -->
		<div class="box">
			<p>name: <span>name of the person sending message</span></p>
			<p>number: <span>numbers of the person sending message</span></p>
			<p>email: <span>email of the person sending message</span></p>
			<p>message: <span>message of the person sending message</span></p>
			<a href="admin_orders.html" onclick="return confirm('You sure you want to delete this order?');" class="delete-btn">delete</a>
		</div>
	</div>
</section>

<!-- include the footer here -->
</body>
</html>