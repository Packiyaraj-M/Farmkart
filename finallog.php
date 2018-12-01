




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



$sql = "SELECT id,pass FROM reg where id=$uid";
$result = $conn->query($sql);

if ($result->num_rows>0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$id = $row["id"];
		
	$pass = $row["pass"];
	if($uid==$id && $pas==$pass)
	{
	

	header("Location: finallog1.php");
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
<link href="formerstyle.css" type="text/css" rel="stylesheet">
<title>Seller Login Page</title>
<style>
body {
background-image: url(green.jpg)
</style>
</head>
<body>

<center><img src="1.jpg" width="200px"></center>
<div class="greeting">
<p>Dear&nbsp;<strong>FARMER</strong>,<br>Welcome To Our Market!!!</p>
</div>
<div class="discription">
<p>Please Enter Your Log In Details Below to Accessing the Full Featured Site</p>
</div><div class="container">

<FORM  method="post"  >

USERNAME:&nbsp;<input type="text" name="uid" placeholder="userid" required><br><br>
PASSWORD:&nbsp;<input type="password" name="pas" placeholder="password" required><br><BR>
   <input name="submit" type="submit" value="log in"></form><h1 STYLE='COLOR:RED'>Not an member yet <br>
   come on just sign up<BR><button ><a href="finalreg.PHP">sign up</button></h1>
</div>
</body>
</html>