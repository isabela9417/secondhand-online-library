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

	<title>Admin Orders</title>
</head>
<body>
	<section class="orders">
		<h1 class="heading">Your orders</h1>
		<br><br>
		<div class="box-container">
			<div class="box">
				<p>user id: <span>user id goes here</span></p>
				<p>placed on: <span>date the order was made</span></p>
				<p>number: <span>number of the person</span></p>
				<p>email: <span>email of the person</span></p>
				<p>address: <span>address of the person</span></p>
				<p>total products: <span>total products of the person</span></p>
				<p>total price: <span>total price of the order</span></p>
				<p>payment method: <span>method of payment the person</span></p>
				<form action="" method="POST">
					<input type="hidden" name="order_id" value="">
					<select class="update_payment">
						<option value="pending">pending</option>
						<option value="completed">completed</option>
					</select>
					<input type="submit" name="update" value="update_order" class="option-btn">
					<a href="admin_orders.html" onclick="return confirm('You sure you want to delete this order?');" class="delete-btn">delete</a>
				</form>
			 
		</div>
	</section>

</body>
</html>

