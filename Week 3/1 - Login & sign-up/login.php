<?php

	if (!empty($_POST)) 
	{
		//velden uitlezen
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//connectie leggen met databank
		$conn = @new mysqli("localhost", "root", "root", "TestJezelf");
		if (! $conn->connect_errno) 
		{
			//connectie is OK
			$query = "SELECT * from week3login where username = '".$conn->real_escape_string($username)."';";
			$result = $conn->query($query);
			//check of password_verify(wachtwoord) == hash
			$row_hash = $result->fetch_array();
			if (password_verify($password, $row_hash['password'])) 
			{
				echo "<h1>Welcome, ".$username."!</h1>";
			}
			else 
			{
				echo "go away";
			}
		}
	}

?>
<html>
<head>
	<title>Log in</title>
</head>
<body>
	<h1>Log in</h1>
	<form method="post" action="">
		
		<label for="username">Username</label>
		<input type="text" id="username" name="username" />

		<label for="password">Password</label>
		<input type="password" id="password" name="password" />

		<button type="submit">Log in</button>

	</form>

	<a href="signup.php">Sign up here</a>
</body>
</html>