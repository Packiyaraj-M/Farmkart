<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "packi";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlE="DELETE  FROM `kart` WHERE dd=0" ;
	if ($conn->query($sqlE) === TRUE){
	header("Location: finalmarket.php");	
	
	}
	?>
	

