<?php
	$servername = "localhost";
	$hostname = "root";
	$password = "";
	$dbname = "movie_library";

	$conn = new mysqli($servername,$hostname, $password, $dbname);

	if($conn->connect_error){die("Connection failed" . $conn->connect_error);}

	$statement = "SELECT * FROM movies WHERE image='$_POST[movieName]'";
	$result = $conn->query($statement);
	$row  = $result->fetch_assoc();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AAA Movie Library</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="index.php">AAA Movie</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.php" accesskey="1" title="">Homepage</a></li>
				<li class="active"><a href="movies.php" accesskey="2" title="">Movies</a></li>
				<li><a href="search.php" accesskey="4" title="">Search</a></li>
				<li><a href="login.php" accesskey="5" title="">Management</a></li>
			</ul>
		</div>
	</div>
	<div id="banner" class="container"><span>This is a tremendous win <br>for movie lovers everywhere</span></div>
</div>
<div id="wrapper">

	<div id="welcome" class="container">
		<div class="box1"><img src="<?php echo($_POST['movieName']); ?>" /></div>
		<p id="result"> Title: <?php echo $row['title']; ?><br>
		Year: <?php echo $row['years']; ?><br>
		Genre: <?php echo $row['genre']; ?><br>
		Synopsis: <?php echo $row['synopsis']; ?>
		</p>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; AAA Movie Library. All rights reserved. | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
