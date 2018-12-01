<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "packi";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $sql = "SELECT * FROM admin ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$news=$row["news"];
	$tip=$row["tips"];
	$adv=$row["advance"];
	$tvlwy=$row["tvlwy"];
	$tvlwt=$row["tvlwt"];
	$tvlwtm=$row["tvlwtm"];
	$kanwy=$row["kanwy"];
	$kanwt=$row["kanwt"];
	$kanwtm=$row["kanwtm"];
	$thowy=$row["thowy"];
	$thowt=$row["thowt"];
	$thowtm=$row["thowtm"];
	$mdl=$row["mdl"];
	$adl=$row["adl"];
	$kdl=$row["kdl"];
	$madl=$row["madl"];
	$vdl=$row["vdl"];
	
	
	
	
	}
	echo"<html><body><form method='post'>
	<textarea name='news' cols='120' rows='20' > $news </textarea>
	<input type='submit' name='submit'></form>";
	if(isset($_POST['submit'])){
	
	
	
	$news=$_POST["news"];
	$sql = "UPDATE admin SET news='$news' where id=1";
	if ($conn->query($sql) === TRUE) {	
	
	
	
	
	echo "sucess";
	
	
	
}
	
	
	
	
	}
	}
	