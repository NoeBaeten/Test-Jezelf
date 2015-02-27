<?php include("data.inc.php"); 

	function canLogin($p_username, $p_password)
	{
		// this function only checks if a user may or may not log in
		{
			if($p_username == "noe" && $p_password == "noe")
				{
					return true;
				}
				else
				{
					return false;
				}
		}	
	}

	function isLoggedIn()
	{
		// check if a user has previously logged in
		if(isset($_COOKIE['loginCookie']))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function doLogin($p_user)
	{
		// this function sets the cookie required for subsequent logins
		$content = $p_user;
			setcookie("loginCookie", $content, time()+60*60);
	}

	if(!empty($_POST))
		{
			//formulier uitlezen
			$username = $_POST['username'];
			$password = $_POST['password'];

			//check of user mag inloggen
			if (canLogin($username, $password))
				{
					doLogin($username);
					$feedback = "Welcome back! <a href='logout.php'>Logout?</a>";
				}
				else
				{
					$feedback = "sorry, you can't login";
				}
		};
		
	
	?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		
	</title>
	<link rel="stylesheet" href="css/ello.css">
</head>
<body class="homepage">

	
	<?php if( !isLoggedIn() ): ?>
		<form action="" method="post">
			<input class="input" type="text" name="username" placeholder="Your username">
			<input class="input" type="password" name="password" placeholder="Your password">
			<button class="button" type="submit">Log in</button>
		</form>
	<?php else: ?>
		<p>Welcome back</p>
		<a href="logout.php">Logout?</a>
	<?php endif; ?>

	<div class="users_container">
	<ul class="users">
		
		<!--
		<li>
			<a href="profile.php?id=1">
			<img src="" alt="">
			</a>
		</li>
		-->
		
	</ul>
	<br class="clearfix">
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
	$(document).ready(function(){

		$(".users_container").mousemove(function( event ) {
		  var x = Math.round(event.pageX/5) * -1;
		  var y = Math.round(event.pageY/5) * -1;
	  		$(".users").css("transform", "translateX("+x+"px) translateY("+y+"px)");
		});

		$("body").mousemove();

	});
	</script>

</body>
</html>