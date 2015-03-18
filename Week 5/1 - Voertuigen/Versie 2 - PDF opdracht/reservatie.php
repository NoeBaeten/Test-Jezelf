<?php 

	include_once("classes/Voertuig.class.php");
	try 
	{
		$voertuigA = new Voertuig("Audi", 3, 2);
		$voertuigB = new Voertuig("Toyota", 3, 7);
		$voertuigA->Order();
		$voertuigB->Order();	
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

</body>
</html>