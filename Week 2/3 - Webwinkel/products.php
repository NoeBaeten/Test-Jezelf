<?php 
session_start();
include_once("products.inc.php"); 
?>

<!DOCTYPE html>
<html>
<head>


	<title>
		
	</title>
</head>
<body>
<?php 
        echo "<a href='logout.inc.php'>Clear shopping basket</a> ";
		echo "<ul>";
			foreach ($products as $product) 
			{
				echo "<li>";
				echo "<h2>" . $product['name'] . "</h2>";
				echo "<img src='" . $product['photo'] . "' />";
				echo "<br/>";
				echo "<a href='detail.php?product=".$product['prodid']."'>More info</a>";
				echo "</li>";
			}
		echo "</ul>";
		
		include_once("cart.inc.php");
		
	?>

</body>
</html>