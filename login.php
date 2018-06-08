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
function validateForm() {
    var x = document.forms["loginForm"]["username"].value;
    if (x == "") {
        alert("Username & password must be filled out.");
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
				<li><a href="search.php" accesskey="4" title="">Search</a></li>
				<li class="active"><a href="login.php" accesskey="5" title="">Management</a></li>
			</ul>
		</div>
	</div>
	<div id="banner" class="container"><span>This is a tremendous win <br>for movie lovers everywhere</span></div>
</div>
<div id="wrapper">

	<div id="welcome" class="container">
		<div class="title">
			<h2>AAA Movie Library Management</h2>
		</div>
		<form name="loginForm" action="validation.php" method="post" onsubmit="return validateForm()">
			<fieldset>
				<br>
				<div id="login">
					Username: <input type="text" name="username"><br>
					<br>
					Password: <input type="password" name="password"><br>
					<br>
				</div>
				<br>
				<input type="submit" class="myButton" value="Submit">
				<br>
				<br>
			</fieldset>
		</form>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; AAA Movie Library. All rights reserved. | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
