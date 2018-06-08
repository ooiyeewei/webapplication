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

<script>
function validateInput() {
    var x = document.forms["titleForm"]["title"].value;
    if (x == "") {
        alert("Title must be filled out");
        return false;
    }
}
</script>

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
				<li><a href="movies.php" accesskey="2" title="">Movies</a></li>
				<li class="active"><a href="search.php" accesskey="4" title="">Search</a></li>
				<li><a href="login.php" accesskey="5" title="">Management</a></li>
			</ul>
		</div>
	</div>
	<div id="banner" class="container"><span>This is a tremendous win <br>for movie lovers everywhere</span></div>
</div>
<div id="wrapper">

	<div id="welcome" class="container">
		<div class="title">
			<h2>Search</h2>
		</div>
		<div id="topnav">
			<table border="0">
				<tr>
					<td>Year</td>
					<td>Genre</td>
					<td>Title</td>
				</tr>
				<tr id="row">
					<td><form action="/assignment/search/year.php" method="post">
						<select name="year">
              <option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
							<option value="2014">2014</option>
						</select>
						<input type="submit" class="theButton" value="Submit">
					</form></td>
					<td><form action="/assignment/search/genre.php" method="post">
						<select name="genre">
							<option value="fantasy">Fantasy</option>
							<option value="superhero">Superhero</option>
							<option value="thriller">Thriller</option>
							<option value="comedy">Comedy</option>
							<option value="romance">Romance</option>
							<option value="horror">Horror</option>
              <option value="war">War</option>
              <option value="science fiction">Science Fiction</option>
              <option value="action">Action</option>
						</select>
						<input type="submit" class="theButton" value="Submit">
					</form></td>
					<td><form name="titleForm" action="/assignment/search/title.php" method="post" onsubmit="return validateInput()">
						<input type="text" name="title" placeholder="Search for title..">
						<input type="submit" class="theButton" value="Submit">
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; AAA Movie Library. All rights reserved. | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
