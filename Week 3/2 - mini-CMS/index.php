<?php 
	// GEGEVENS OPVRAGEN EN OPSLAAN

	if(!empty($_POST)) {
		include_once("classes/post.class.php");
		if (isset($_POST['title']) && isset($_POST['post'])) {
			$postblog = new Blogpost();
			$postblog->Title = $_POST['title'];
			$postblog->Message = $_POST['post'];
			// $postblog->Categorie = $_POST['categorie'];
			$postblog->Save();
		}
	}
 ?><!doctype html>
<html lang="en">
<head>
	<title>Week 3 - mini CMS</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
		<div>
			<form class="blogpost" method="post">
			  <div>
			    <h2>Make a new post!</h2>
			    <input type="text" name="title" placeholder="Title" class="title">
			  </div>
			  <div>
			    <textarea placeholder="Text" name="post" class="message"></textarea>
			  </div>
			  <button type="submit" class="submit">Submit</button>
			</form>
		</div>

	<?php
		include_once("print.php");
	?>
	
</div>
</body>
</html>