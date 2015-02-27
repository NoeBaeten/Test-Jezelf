<?php
	session_start();
	
	include("products.include.php");
	$item = $_GET['item'];
	if(!empty($_POST))
	{
		$productcode = $_POST['item'];
		
		if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
			array_push($_SESSION['cart'],$productcode);
		} else {
			$_SESSION['cart'] = array($productcode);
		}
	}
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Details</title>
	<style type="text/css">
		img{
			height: 200px;
		}
	</style>
</head>
<body>
	<div>
		<a href="product.php"><p>Back</p></a>
			<?php foreach ($products as $product) {
				if ($product['name'] == $item) { ?>
						<img class='product' src='<?php echo $product['photo']; ?>'/>
						<h3>Extra info: <?php echo $item; ?></h3>
						<p class='info'><?php echo $product['info'] ?></p>
			<?php 	}
				}
			?>

		<form action='' method='post' class="clear">
			<input type="hidden" name="item" value="<?php echo $item ?>">
			<input type='submit' value='Buy now'>
		</form>

		<div>
			<h2>Your cart</h2>
			<?php include("cart.include.php");?>
		</div>
	</div>

</body>
</html>