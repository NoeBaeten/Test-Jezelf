<div>
	<?php if (isset($_SESSION['cart'])) { ?>
		<ul id='winkelmand'>
		<h3>uw winkelmandje: </h3>
			<?php foreach ($_SESSION['cart'] as $cart) { ?>
				<li><?php echo "Item ID: ";
				print_r ($cart); ?></li>
			<?php } ?>
		</ul>
	<?php } else { ?>
		<h3>Uw winkelmandje is leeg!</h3>
	<?php } ?>
</div>