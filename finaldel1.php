<?php
session_start();
?>
<html>
<body bgcolor="#CCFFCC">
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "packi";
echo $_SESSION["bill"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo" 
	
  <tr><td bgcolor='#CCFFCC'align='right'><h4 STYLE='COLOR:blue' align='center'>KEEP CITY CLEAN</h4><a href='https://www.swacha bharat.com'><img src='cln.jpg' width='190' height='90' value='add to kart' ></a></td></td><td align='center' bgcolor='#CCFFCC' ><h4 STYLE='COLOR:blue' align='center'>BACK TO SHOP</h4><a href='finalmarket.php'><img src='cont.jpg' width='190' height='90' value='add to kart' ></a></td></tr><tr></form></tr></table> </body></html>";
	echo"<img src='del.png'   height='112' width='182' align='left'><h1 STYLE='COLOR:BROWN' align='center'>YOUR ORDER IS PLACED SUCESSFULLY</h1>";
	
	
	echo'<BR><BR><HR Color="red" size="55">';

	
	
	


	?>
	
	
	
	
	
	
	
	
	
	</BODY></HTML>