<?php

	$servername = "localhost";
	$hostname = "root";
	$password = "";
	$dbname = "movie_library";
	$conn = new mysqli($servername,$hostname, $password, $dbname);

	$result = mysqli_query($conn, "SELECT image FROM movies WHERE years=$_POST[year]");
?>

<script src="/assignment/myjs.js"></script>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AAA Movie Library</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="../default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../fonts.css" rel="stylesheet" type="text/css" media="all" />

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
				<li><a href="../index.php" accesskey="1" title="">Homepage</a></li>
				<li><a href="../movies.php" accesskey="2" title="">Movies</a></li>
				<li class="active"><a href="../search.php" accesskey="4" title="">Search</a></li>
				<li><a href="../login.php" accesskey="5" title="">Management</a></li>
			</ul>
		</div>
	</div>
	<div id="banner" class="container"><span>This is a tremendous win <br>for movie lovers everywhere</span></div>
</div>
<div id="wrapper">
	<div id="movieContent">
		<table id="poster">
			<tr>
				<form id="myForm" action="/assignment/result.php" method="POST">
            <input type="hidden" value="" id="myMovie" name="movieName">
        </form>
				<?php
					$i = 1;
					while($rows = mysqli_fetch_assoc($result))
					{
						echo '<td>';
						echo '<div class="box'.$i.'"><img onclick="myFunction(this)" src="'.$rows['image'].'"></div>';
						echo '</td>';
						if($i%3 == 0)
						{
							echo '</tr><tr>';
							$i = 1;
						}
						else
						{
							$i = $i + 1;
						}
					}
				?>
			</table>
			<br><br>
		</div>
	</div>
<div id="copyright" class="container">
	<p>&copy; AAA Movie Library. All rights reserved. | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
