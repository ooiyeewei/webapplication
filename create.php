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

<script>
function validateForm() {
    var title = document.forms["createForm"]["title"].value;
    var year = document.forms["createForm"]["year"].value;
    var genre = document.forms["createForm"]["genre"].value;
    var image = document.forms["createForm"]["image"].value;
    var synopsis = document.forms["createForm"]["synopsis"].value;

    if (title == "" || year == "" || genre == "" || image == "" || synopsis == "") {
        alert("Must be filled out.");
        return false;
    }
}
</script>

<script>
  function successNotif(){
    alert("Successfully updated!");
  }
</script>

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="../index.php">AAA Movie</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="../index.php" accesskey="1" title="">Homepage</a></li>
				<li><a href="../movies.php" accesskey="2" title="">Movies</a></li>
				<li><a href="../search.php" accesskey="4" title="">Search</a></li>
				<li class="active"><a href="../login.php" accesskey="5" title="">Management</a></li>
			</ul>
		</div>
	</div>
	<div id="banner" class="container"><span>This is a tremendous win <br>for movie lovers everywhere</span></div>
</div>
<div id="wrapper">

	<div id="welcome" class="container">
		<div class="title">
			<h2>Create New Movie</h2>
		</div>
		<form name="createForm" method="post" onsubmit="validateForm()">
			<fieldset>
				<br>
				<div id="login">
					Enter Movie Title: <input type="text" name="title"><br>
					Enter Movie Genre: <input type="text" name="genre"><br>
					Enter Movie Year: <input type="text" name="year"><br>
					Enter Movie Image Link: <input type="text" name="image"><br>
					Enter Movie Synopsis: <br><textarea name="synopsis" rows="5" cols="25"></textarea><br>
					<br>
				</div>
				<br>
				<input type="submit" class="myButton" name="submitButton" value="Enter" >
				<br>
				<br>
				<?php
					$servername = "localhost";
					$hostname = "root";
					$password = "";
					$dbname = "movie_library";
					$conn = new mysqli($servername,$hostname, $password, $dbname);

					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}

					if(isset($_POST['submitButton'])) {
							$title = $_POST["title"];
							$genre = $_POST["genre"];
							$year = $_POST["year"];
							$image = $_POST["image"];
							$synopsis = $_POST["synopsis"];

              if(!empty($title && $genre && $year && $image && $synopsis))
							{
                $sql = "insert into movies (title, genre, years, image, synopsis) values ($title, $genre, $year, $image, $synopsis)";

							  $stmt = $conn->prepare("Insert into movies (title, genre, years, image, synopsis) values(?,?,?,?,?)");
							  $stmt->bind_param("ssiss", $title, $genre, $year, $image, $synopsis);

							  if ($stmt->execute()) {
								 header('Location: ../management.php');
								 $conn->close();
								 exit();
							 } else {
								 echo $result = "Error: " . $sql . "<br>" . mysqli_error($conn);
								 $conn->close();
                 exit();
						   }
              }
              else {
                header('Location: create.php');
              }
					}
				?>
			</fieldset>
		</form>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; AAA Movie Library. All rights reserved. | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
