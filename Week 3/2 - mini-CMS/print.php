<?php 
	include_once("classes/Db.class.php");
	//query schrijven op de posts op te halen
		$db = new Db();
		// Gegevens van database ophalen door query
		$sql = "select * from week3minicms order by id desc";
		$result = $db->conn->query($sql);

		echo "<div class='row'>";
		echo  "<div class='col-md-12'>";
		// een foreach lus om de gegevens 
		foreach($result as $post) {
			echo "<h3>" . $post['titel'] . "</h3>";
			echo "<p>" . $post['bericht'] . "</p>";
			echo "<hr>" . "</hr>";
		}
 ?>