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

	<title>Products</title>
</head>
<body>
<!-- product CRUD section starts -->
<section class="add-products">
	<h1 class="heading">shop products</h1>

	<form action="" method="POST"enctype="multipart/form-data">
		<h3>add a product</h3>
		<input type="text" name="name" class="box" placeholder="enter product name" required>
		<input type="number" name="price" class="box" placeholder="enter product price" required>
		<input type="file" accept="image.jpg, image/png, image/jpeg" class="box" required>
		<input type="submit" value="add product" name="add_product" class="btn">
	</form>
</section>
<!-- product CRUD section ends -->
<section class="show-products">
	<div class="box-container">
		<div class="box">
			<img src="" alt="">
			<div class="name">
				<h1>the name of the book uploaded comes here</h1>
			</div>
			<div class="price">
				<h1>display the price of the book uploaded comes here</h1>
			</div>
			<a href="" class="option-btn" onclick="return confirm('update');">update</a>
			<a href="" class="delete-btn" onclick="return confirm('delete');">delete</a>
		</div>
	</div>
</section>

<section class="edit-product-form">
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="update_p_id" value="">
		<input type="hidden" name="update_old_image" value="">
		<img class="upload/img"></img>
		<input type="text" name="update_name" value="" class="box" required placeholder="Enter name of the book"></input>
		<input type="number" name="update_price" value="" min="0" class="box" required placeholder="Enter the price">
		<input type="file" class="box" name="update_image" accept="image/jpg,image/jpeg, image/png">
		<input type="submit" value="update" name="update_product" class="btn">
		<input type="reset" value="cancel" id="close-update" class="option-btn">
	</form>
</section>

<!-- customized admni js file link -->
<script src="../js/admin_script.js"></script>
</body>
</html>

