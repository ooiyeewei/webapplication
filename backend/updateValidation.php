<?php

session_start();

$servername = "localhost";
$hostname = "root";
$password = "";
$dbname = "movie_library";

$conn = new mysqli($servername,$hostname, $password, $dbname);

if($conn->connect_error){die("Connection failed" . $conn->connect_error);}

$title = $_POST['movie'];
$year = $_POST['year'];
$genre = $_POST['genre'];
$image = $_POST['image'];
$synopsis = $_POST['synopsis'];
$id = $_POST['id'];
var_dump($_POST['movie']);
$sql = "UPDATE movies SET
				title = '$title',
				genre = '$genre',
				years = $year,
				image = '$image',
				synopsis = '$synopsis'
				WHERE id = $id";

if($conn->query($sql)){
    header('Location: ../management.php');
    exit();
}
else{
    echo "Error: " . $conn->error;
    exit();
}

?>
