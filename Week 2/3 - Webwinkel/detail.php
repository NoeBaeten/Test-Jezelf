<?php 
session_start();

$productid=0;
include_once("products.inc.php");


if (isset($_GET['product'])){
$productid=$_GET['product'];
}

if(!empty($_POST))
	{
		$productcode = $_POST['text'];

		 // Kijken of de sessie bestaat en of deze niet leeg is
		if(isset($_SESSION['cart']) && !empty($_SESSION['cart']))
		{
			// Item toevoegen aan de sessie
			array_push($_SESSION['cart'],$productcode);
		} else {
			// Als de sessie niet bestaat, hier een array met 1 product code inzetten
			$_SESSION['cart'] = array($productcode);
		}

		header("location: products.php");
	}



?>
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo "<form method='post' action=''>";
			foreach ($products as $product) 
			{
				
        if($product['prodid']==$productid){
        		echo "<h2>" . $product['name'] . "</h2>";
				echo "<img src='".$product['photo'] . "' />";
				echo "<input type='text' class='text' name='text' value=".$product['prodid'] .">";
				echo "<br/>";
				echo "<input type='submit' name='submit' value='buy now'>";

				if (isset($_POST['submit'])) {
	array_push($cart, array('test'));
	var_dump($cart);
}
        }
       }
		echo "</form>"; 


include_once("cart.inc.php");
		?>
<a href="products.php">go back</a>
</body>
</html>