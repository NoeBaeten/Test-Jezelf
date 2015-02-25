<?php

	$updates = array(
					array(
							"beschrijving" => "School",
							"deadline" => 1,
							"categorie" => "School"
						 ),
					array(
							"beschrijving" => "Tandarts",
							"deadline" => 30,
							"categorie" => "Vrije Tijd"
						 ),
					array(
							"beschrijving" => "Dokter",
							"deadline" => 11,
							"categorie" => "Vrije Tijd"
						 ),
					array(
							"beschrijving" => "School Taak 2",
							"deadline" => 22,
							"categorie" => "School"
						 ),
					array(
							"beschrijving" => "Freelance Taak 3",
							"deadline" => 34,
							"categorie" => "Vrije Tijd"
						 )
					);

?>
<html lang ="en">
<head>
	<meta charset="UTF-8'">
	<title>To Do-Lijst</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	<?php
		echo "<ul class='todolist'>";
			
				foreach ($updates as $update) {
					echo "<li class='todoitem'>";
					
					if($update['deadline'] < 2) {
						echo "<h2 class='rood'>" ."Categorie: ". $update['categorie'] . "</h2>";
						echo "<p class='rood'>" . $update['beschrijving'] . "</p>";
						echo "<h3 class='rood'>" . "Tijd resterend: " . $update['deadline'] . " uur </h3>";
					} else if($update['deadline'] < 24) {
						echo "<h2 class='oranje'>" ."Categorie: ". $update['categorie'] . "</h2>";
						echo "<p class='oranje'>" . $update['beschrijving'] . "</p>";
						echo "<h3 class='oranje'>" . "Tijd resterend: "  . $update['deadline'] . " uur</h3>";
					} else {
						echo "<h2 class='groen'>" ."Categorie: ". $update['categorie'] . "</h2>";
						echo "<p class='groen'>" . $update['beschrijving'] . "</p>";
						echo "<h3 class='groen'>" . "Tijd resterend: "  . $update['deadline'] . " uur </h3>";
					}
					echo "</li>";
				}
			

		echo "</ul>";
	?>

</body>
</html>

