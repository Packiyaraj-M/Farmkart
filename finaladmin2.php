<!DOCTYPE html>
<html>
<head>
<style>
button {
	background-color: lawngreen;
	color: white;
	font-size: 20px;
	width: 160px;
	text-transform: uppercase;
	padding: 10px;
	border: none;
	border-radius: 50px;
}</style>
</head><body  align="center">









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
$uid=$_SESSION['uid'];
	echo "<h1 align='center' STYLE='COLOR:blue'>WELCOME FARMKART ADMIN</H1>";
	echo "<hr color='orange' size='22%'><br><hr color='green' size='22%'>	";

	echo'<a link href="finaladmin1.php" target="right"><button type="button">HOME</button></a><br><br>';

	
	
	
		echo"<html><body><form mehtod='post'><h1 align='right' STYLE='COLOR:maroon'><u>LOAN DETAILS </U></H1>
<textarea name='loan' cols='120' rows='20' ></textarea>
<hr Color='LAWNGREEN' size='5'>


<h1 align='right' STYLE='COLOR:maroon'><u>KISAN CARD</U></H1>
<textarea name='card' cols='120' rows='20' ></textarea>
<hr Color='GOLD' size='5'>

<h1 align='right' STYLE='COLOR:maroon'><u>PURCHASE</U></H1>
<textarea name='vloan' cols='120' rows='20' ></textarea>
<hr Color='RED' size='5'><input type='submit'  value='update'></form></body></html>";
	$card=$_POST["card"];echo "$vloan";
if(isset($_POST['submit'])){


$card=$_POST["card"];
	$loan=$_POST["loan"];
	$vloan=$_POST["vloan"];
	echo "$vloan";
$mysqlDateTime = date('c');
$sql = "UPDATE admin SET card='$card',loan='$loan',vloan='$vloan' where id='1'";
if ($conn->query($sql) === TRUE) {	
	echo "sucess";
}
	


}








?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	