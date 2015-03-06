<?php
	
	if (!empty($_POST)) 
	{
		//velden uitlezen
		$username = $_POST['username'];
		$email = $_POST['email'];
		$name = $_POST['name'];
		$firstname = $_POST['firstname'];
		
		$options = [ 'cost' => 12,];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT, $options); //PHP 5.5
		
		//connectie leggen met databank
		$conn = @new mysqli("localhost", "root", "root", "TestJezelf");
		if (! $conn->connect_errno) 
		{
			//connectie is OK
			$query = "INSERT INTO week3login (username, email, password, name, firstname) VALUES ('".$username."', '".$email."', '".$password."', '".$name."', '".$firstname."');";
			if($conn->query($query))
			{
				$feedback = "Welcome aboard!";
			};
		}
	}

?>
<html>
<head>
	<title>Sign up for an account</title>
</head>
<body>
	<h1>
		<?php if(isset($feedback)): ?>
			<?php echo $feedback; ?>
		<?php else: ?>
		Please sign up
	<?php endif; ?>
	</h1>
	<form method="post" action="">
		
		<label for="username">Username</label>
		<input type="text" id="username" name="username" />
		<br />
		<label for="email">Email</label>
		<input type="text" id="username" name="email" />
		<br />
		<label for="password">Password</label>
		<input type="password" id="password" name="password" />
		<br />
		<label for="name">Last name</label>
		<input type="text" id="username" name="name" />
		<br />
		<label for="firstname">First name</label>
		<input type="text" id="username" name="firstname" />
		<br />
		<button type="submit">Sign up</button>

	</form>

	<a href="login.php">Log in here</a>

</body>
</html>