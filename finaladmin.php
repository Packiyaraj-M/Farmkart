




<?php
session_start();
if(isset($_POST['submit'])){
$uid= $_POST['uid'];
$pas= $_POST['pas'];
$_SESSION['uid'] = $uid;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "packi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT id,pass FROM admin where id=$uid";
$result = $conn->query($sql);

if ($result->num_rows>0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$id = $row["id"];
		
	$pass = $row["pass"];
	if($uid==$id && $pas==$pass)
	{
	

	header("Location: finaladmin1.php");
 }
	else
	{
	echo " <h1> your user id and password does not match</h1>";
}
	}
}
}
?>
<html>
<head>
<meta charset="utf-8">
<link href="formerstyle1.css" type="text/css" rel="stylesheet">
<title>Seller Login Page</title>
<style>
body {
background-image: url(e.jpg)
</style>
</head>
<body align="center">

<center><img src="A.jpg" width="200px"></center>
<div class="greeting">
<p>Dear&nbsp;<strong>ADMIN</strong>,<br>Welcome !!!</p>
</div>
<div class="discription">
<p>Please Enter Your Log In Details Below to Accessing the Full Featured Site</p>
</div>
<FORM  method="post"  ><table align='center'><tr><td color="red">

<h2 ALIGN='CENTER' STYLE='COLOR:maroon'>USERID:</h2>&nbsp;</td><td><input type="text" name="uid" placeholder="userid" required></td></tr><tr><td>
<h2 ALIGN='CENTER' STYLE='COLOR:maroon'>PASSWORD:</h2>&nbsp;</td><td><input type="password" name="pas" placeholder="password" required></td></tr><tr><Td COLSPAN="2" ALIGN="middle">
   <input name="submit" type="submit" value="log in"></td></tr></form></table>
</body>
</html>