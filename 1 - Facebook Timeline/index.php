<?php 

	$arr_posts = 	[
						[
							"profile" 	=>	"https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg",
							"username" 	=> 	"David W.",
							"picture" 	=> 	"http://cdn.cstatic.net/images/gridfs/51d4322ff92ea124230276fc/east-river-state-park2.jpg",
							"location" 	=> 	"East River Park",
							"city"		=>	"Brooklyn, NY",
							"time"		=>	"22min ago"
						],
						[
							"profile" 	=>	"https://s3.amazonaws.com/uifaces/faces/twitter/gerrenlamson/128.jpg",
							"username" 	=> 	"Jan H.",
							"picture" 	=> 	"",
							"location" 	=> 	"West River Park",
							"city"		=>	"Brooklyn, NY",
							"time"		=>	"45min ago"
						],
						[
							"profile" 	=>	"https://s3.amazonaws.com/uifaces/faces/twitter/felipenogs/128.jpg",
							"username" 	=> 	"Diego B.",
							"picture" 	=> 	"http://cdn.cstatic.net/images/gridfs/51d4322ff92ea124230276fc/east-river-state-park2.jpg",
							"location" 	=> 	"North River Park",
							"city"		=>	"Brooklyn, NY",
							"time"		=>	"2hrs ago"
						],

					];

?><html>
<head>
	<title>Timeline</title>
	<style type="text/css">
		.post {

		}

		hr {
			
		}

		.circular {
			width: 100px;
			height: 100px;
			border-radius: 150px;
			-webkit-border-radius: 150px;
			-moz-border-radius: 150px;
			float: left;
			margin-bottom: 10px;
		}

		.right {
			
		}

		.right2 {
			
		}

		.name {
			font-size: 28px;
			color: #0099cc;
			margin-left: 20px;
		}

		a {
			text-decoration: none;
		}

		.locatie {
			margin-left: 20px;
			font-size: 22px;
			font-weight: bold;
			color: #2266aa;
		}

		.stad {
			font-size: 14px;
			font-weight: bold;
			margin-left: 20px;
			margin-top: -20px;
		}





	</style>
</head>
<body>
	<p>Here are some checkins</p>

	<?php foreach($arr_posts as $p){ ?>
	<div class="post">
		<img class="circular" src="<?php echo $p['profile']; ?>">
		<a class="right name" href="#"><?php echo $p['username'];?></a>
		<br />
		<br />
		<a class="right locatie"><?php echo $p['location'] ?></p>
		<a class="right stad"><?php echo $p['city'] ?></p>
		<img class="right2" src="<?php echo $p['picture']; ?>">

		<hr></hr>
	</div>
	<?php } ?>

</body>
</html>
