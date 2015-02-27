<?php
	session_start();
	include("products.include.php");
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
		img{
			height: 200px;
		}
	</style>
</head>
<body>
	<div>
		<ul>
			<?php foreach ($products as $product) { ?>
				<li>
					<img src='<?php echo $product['photo']; ?>'/><br/>
					<a href='details.php?item=<?php echo $product['name'];?>'>Meer info</a>
				</li>
			<?php } ?>
		</ul>
		<div>
		<h2>Shopping Cart:</h2>

		<?php include("cart.include.php");
		?>
		</div>
	</div>
</body>
</html>