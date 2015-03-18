<?php 
	
	try 
	{
		spl_autoload_register(function($class)
			{
				include_once("classes/".$class.".class.php");
			});

		$t = date("H");

		if ($t <  "12") 
		{
			$voertuigA = new Voertuig("Audi", 3, 2);
			$voertuigB = new Sportwagen("Porsche", 2, 2);
			$voertuigC = new Vrachtwagen("IKEA verhuiswagen", 4, 2);
			$voertuigA->Reserveer();
			$voertuigB->Reserveer();
			$voertuigC->Reserveer();	
		}
		else
		{
			echo "U mag maar tot 12u reserveren. Probeer morgen nog eens";
		}
	}
	catch(Exception $e)
	{
		$error = $e->getMessage();	
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$t = date("H");

if ($t <  "12") {
     echo "Have a good day!";
}
?>
</body>
</html>