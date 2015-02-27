<div>

	<?php if (isset($_SESSION['cart'])) { ?>

		<ul>
			<h3>Shoppingcart contains: </h3>

			<?php foreach ($_SESSION['cart'] as $cart) { ?>
			<li><?php echo $cart; ?></li>
			<?php } ?>
		</ul>
	<?php } else { ?>

			<h3>Shoppingcart is empty</h3>

	<?php } ?>

	<a href="logout.php">Clear</a>

</div>