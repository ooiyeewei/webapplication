<?php

session_start();

$servername = "localhost";
$hostname = "root";
$password = "";
$dbname = "movie_library";

$conn = new mysqli($servername,$hostname, $password, $dbname);

if($conn->connect_error){die("Connection failed" . $conn->connect_error);}

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

$sql = "select * from users where username='$_POST[username]' and password='$_POST[password]'";
$result = $conn->query($sql);
$count = mysqli_num_rows($result);

if($count==1){
    header('Location: management.php');
    exit();
}
else{
    header('Location: login.php');
    exit();
}

?>
