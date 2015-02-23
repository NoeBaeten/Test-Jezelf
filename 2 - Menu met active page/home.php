<html>
<head>
	<title></title>

	<style type="text/css">
		#nav {
		width:150px;
		list-style:none;
		}
		#nav a {
		color:black;
		text-decoration:none;
		}
		#nav a:active, #nav a:focus, #nav a:hover {
		color:red; 
		}
		#nav #current {
		color:red; 
		}
	</style>
</head>
<body<?php $pageName = "Home"; ?>> 
  
<?php include("include_nav.php"); ?>

<p>You are on the Home-page</p>

<?php include("include_footer.php"); ?>

</body>
</html>