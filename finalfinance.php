

<html>
<body align="center"  ><br><br>














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
	echo "<h1 align='center' STYLE='COLOR:MAROON'>WELCOME TO FARMER SUPPORT CENTER</H1>";
	echo "<hr color='orange' size='22%'><br><hr color='green' size='22%'>	";
	
 $sql = "SELECT vloan,loan,card FROM admin ";
 $result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
	$loan=$row["loan"];
	$card=$row["card"];
	$vloan=$row["vloan"];
	
	echo"<h1 align='center' STYLE='COLOR:SKYBLUE'><u>BANK ANNONCEMENT </U></H1>
 <h3 align='LEFT' STYLE='COLOR:'><img src='r.gif' height='212' width='282' align='left'>$loan </h3>
<hr Color='yellow' size='5'>


<h1 align='center' STYLE='COLOR:SKYBLUE'><u>vechical loan</U></H1>
 <h3 align='LEFT' STYLE='COLOR:blue'><img src='v.jpg' height='312' width='250' align='right'>$vloan </h3>
<hr Color='lawngreen' size='5'>


<h1 align='center' STYLE='COLOR:red'><u>KISSAN CARD</U></H1>
 <h3 align='LEFT' STYLE='COLOR:blue'><img src='cr.jpg' height='212' width='312' align='left'>$card </h3>
	<hr Color='lawngreen' size='5'>";
	
	
	
	
	
	
	
	}
	
}
?></body></html>