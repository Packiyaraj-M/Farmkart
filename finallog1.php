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
$sql = "SELECT id,na FROM reg where id=$uid";
$result = $conn->query($sql);
if ($result->num_rows>0) {
   
    while($row = $result->fetch_assoc()) {
		$id = $row["id"];
	$na = $row["na"];

	echo "<h1 align='center' STYLE='COLOR:blue'>WELCOME TO FARMKART</H1>";
echo "<h2 align='left' STYLE='COLOR:red'>YOUR ID:$id</h2>";
echo "<h2 align='RIGHT' STYLE='COLOR:cadetblue'>WELCOME MR:$na</h2>";
echo "<hr color='orange' size='22%'><br><hr color='green' size='22%'>	";
	echo"<a href='LOGOUT.php' class='button' align='right'>LOGOUT</a>";
}
}
	
		$sqle = "SELECT * FROM TA where id=$id";
$result = $conn->query($sqle);
if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
		$id = $row["id"];
	$oni = $row["oni"];
	$fa=$row["fa"];
	$beet=$row["beet"];
	$lad=$row["lad"];
	$id=$row["id"];
	$cal=$row["cal"];
	$po=$row["po"];
	$been=$row["been"];
	$bit=$row["bit"];
	$bri=$row["bri"];
	$pum=$row["pum"];
	$date=$row["date"];
	$onip = $row["onip"];
	$beetp=$row["beetp"];
	$ladp=$row["ladp"];
	$calp=$row["calp"];
		$bump=$row["bump"];
	$pop=$row["pop"];
	$beenp=$row["beenp"];
	$bitp=$row["bitp"];
	$brip=$row["brip"];
	$sta=$row["sta"];
echo "<h1 ALIGN='CENTER' STYLE='COLOR:#4CAF50'> <U> HERE YOU CAN UPDATE YOUR PRODUCT PRICE AND QUANITY DETAILS</U></H1>";
			
echo"<html>
<body align='center'>
	<FORM method='post' ><table border='6%' align='center'>
    <tr bgcolor='orange'><td><input type='text' value='onion' readonly style='width:85px;'/>
	<input type='text' name='oni' value='$oni kg' readonly style='width:85px;'>
    <input type='text'  value='$onip rs' readonly style='width:85px;'  >
     <input type='text'  name='uoni' placeholder='kg' style='width:85px;'/>
	 <input type='text'  name='onip' value='$onip' placeholder='rs' style='width:85px;'/></td></tr>
	
	<tr bgcolor='orange'><td><input type='text' value='beetroot' readonly style='width:85px;'/>
	<input type='text' name='beet'  value='$beet kg' readonly style='width:85px;'/>
	<input type='text'  value='$beetp rs' readonly style='width:85px;'/>
    <input type='text' name='ubeet'  placeholder='kg' style='width:85px;'>
	<input type='text'  name='beetp' value='$beetp' placeholder='rs' style='width:85px;'/></td></tr>
	
	<tr bgcolor='orange'><td><input type='text' value='ladyfinger' readonly style='width:85px;'/>
	<input type='text' name='lad'  value='$lad kg' readonly style='width:85px;'/>
	<input type='text'  value='$ladp rs' readonly style='width:85px;'/>
    <input type='text' name='ulad'  placeholder='kg' style='width:85px;'>
	<input type='text'  name='ladp' value='$ladp' placeholder='rs' style='width:85px;'/></td></tr>
	
	<tr bgcolor='orange'><td><input type='text' value='califlower' readonly style='width:85px;'/>
	<input type='text' name='cal'  value='$cal kg' readonly style='width:85px;'/>
	<input type='text'  value='$calp rs' readonly style='width:85px;'/>
    <input type='text' name='ucal'  placeholder='kg' style='width:85px;'>
	<input type='text'  name='calp' value='$calp' placeholder='rs' style='width:85px;'/></td></tr>
	
	<tr bgcolor='sky blue'><td><input type='text' value='potato' readonly style='width:85px;'/>
	<input type='text' name='po'  value='$po kg' readonly style='width:85px;'/>
	<input type='text'  value='$pop rs' readonly style='width:85px;'/>
    <input type='text' name='upo'  placeholder='kg' style='width:85px;'>
	<input type='text'  name='pop' value='$pop' placeholder='rs' style='width:85px;'/></td></tr>
	
	<tr bgcolor='sky blue'><td><input type='text' value='beens' readonly style='width:85px;'/>
	<input type='text' name='been'  value='$been kg' readonly style='width:85px;'/>
	<input type='text'  value='$beenp rs' readonly style='width:85px;'/>
    <input type='text' name='ubeen'  placeholder='kg' style='width:85px;'>
	<input type='text'  name='beenp' value='$beenp' placeholder='rs' style='width:85px;'/></td></tr>
	
	<tr bgcolor='green'><td><input type='text' value='bittergourd' readonly style='width:85px;'/>
	<input type='text' name='bit'  value='$bit kg' readonly style='width:85px;'/>
	<input type='text'  value='$bitp rs' readonly style='width:85px;'/>
    <input type='text' name='ubit'  placeholder='kg' style='width:85px;'>
	<input type='text'  name='bitp' value='$bitp' placeholder='rs' style='width:85px;'/></td></tr>
	
	<tr bgcolor='green'><td><input type='text' value='brinjal' readonly style='width:85px;'/>
	<input type='text' name='bri'  value='$bri kg' readonly style='width:85px;'/>
	<input type='text'  value='$brip rs' readonly style='width:85px;'/>
    <input type='text' name='ubri'  placeholder='kg' style='width:85px;'>
	<input type='text'  name='brip' value='$brip' placeholder='rs' style='width:85px;'/></td></tr>
	
	<tr bgcolor='green'><td><input type='text' value='pumkin' readonly style='width:85px;'/>
	<input type='text' name='bum'  value='$pum kg' readonly style='width:85px;'/>
	<input type='text'  value='$bump rs' readonly style='width:85px;'/>
    <input type='text' name='ubum'  placeholder='kg' style='width:85px;'>
	<input type='text'  name='bump' value='$bump' placeholder='rs' style='width:85px;'/>
	<tr bgcolor='red'><td><input type='text' value='last update' readonly style='width:85px;'/><input type='text'  name='date' value=$date readonly style='width:85px;'>
	<input type='text' name='sta' value='$sta'  style='width:265px;'/></td></tr>
	</table><input type='submit' name='update'>
	</body>
	</html>";
}}
if(isset($_POST['update'])){

     $po=$_POST['upo']+$_POST['po'];
	$beet = $_POST['ubeet']+$_POST['beet'];
	$lad = $_POST['ulad']+$_POST['lad'];
	$been = $_POST['ubeen']+$_POST['been'];
	$bri = $_POST['ubri']+$_POST['bri'];
	$pum = $_POST['ubum']+$_POST['bum'];
	$oni = $_POST['uoni']+$_POST['oni'];
	$cal = $_POST['ucal']+$_POST['cal'];
	$bit = $_POST['ubit']+$_POST['bit'];
	$onip = $_POST["onip"];
	$beetp=$_POST["beetp"];
	$ladp=$_POST["ladp"];
	$calp=$_POST["calp"];
	$bump=$_POST["bump"];
	$pop=$_POST["pop"];
	$beenp=$_POST["beenp"];
	$bitp=$_POST["bitp"];
	$brip=$_POST["brip"];	
	$sta=$_POST["sta"];
	$mysqlDateTime = date('c');
	$sql = "UPDATE ta SET po='$po',pop='$pop',beet='$beet',beetp='$beetp',lad='$lad',ladp='$ladp',sta='$sta',
been='$been',beenp='$beenp',bri='$bri',brip='$brip',pum='$pum',bump='$bump',oni='$oni',onip='$onip',cal='$cal',calp='$calp',bitp='$bitp',bit='$bit',date='$mysqlDateTime' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {

echo "your account in farkart sucessfully updated.....";
}}



echo "<h1 ALIGN='CENTER' STYLE='COLOR:#FF3300'><U>  HERE YOU CAN SEE YOUR  CUSTOMER <BR>WHO BUY YOUR PRODUCT THROUGH ONLINE </U> </H1>";
	












echo"<HTMl><body align='center'><table border='6' align='center'><tr BGCOLOR='sky blue' ><td>ONION</TD><td>BEETROOT</TD><td>LADYFINGER</TD><td>CALIFLOWER</TD><td>POTATO</TD><td>BEENS</TD>
<td>BRINJAL</TD><td>BITTERGROUD</TD><td>PUMKIN</TD><td>NAME</TD><td>CONTACT</TD><td>DATE</TD></TR></BODY><HTML>";
$sql = "SELECT * FROM del where id=$id ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    

    while($row = $result->fetch_assoc()) {
	$oni = $row["oni"];
	$beet=$row["beet"];
	$lad=$row["lad"];
	$id=$row["id"];
	$cal=$row["cal"];
	$po=$row["po"];
	$been=$row["been"];
	$bit=$row["bit"];
	$bri=$row["bri"];
	$pum=$row["pum"];
	$name=$row["name"];
	$con=$row["contact"];
	$date=$row["datee"];

echo"
    <tr ><td bgcolor='green'>
	<input type='text' name='oni' value='$oni kg' readonly style='width:85px;'>
   </td><td bgcolor='red'>
	
	
	<input type='text' name='beet'  value='$beet kg' readonly style='width:85px;'/>
	</td><td bgcolor='aqua'>
	<input type='text' name='lad'  value='$lad kg' readonly style='width:105px;'/>
	</td><td bgcolor='megenta'>
	<input type='text' name='cal'  value='$cal kg' readonly style='width:105px;'/>
	</td><td bgcolor='blue'>
	<input type='text' name='po'  value='$po kg' readonly style='width:85px;'/>
	</td><td bgcolor='yellow'>
	<input type='text' name='been'  value='$been kg' readonly style='width:85px;'/>
	</td><td bgcolor='blue'>
	<input type='text' name='bit'  value='$bit kg' readonly style='width:85px;'/>
	</td><td bgcolor='orange'>
	<input type='text' name='bri'  value='$bri kg' readonly style='width:125px;'/>
	</td><td bgcolor='cadetblue'>
	<input type='text' name='bum'  value='$pum kg' readonly style='width:85px;'/></td><td bgcolor='black'>
	<input type='text'  value='$name' readonly style='width:85px;'/></td><td bgcolor='orange'>
   
	<input type='text'  name='bump' value='$con' placeholder='rs' style='width:85px;'/></td><td bgcolor='lawngreen'>
	<input type='text'  value='$date' readonly style='width:85px;'/></tr>
	
	
	</body>
	</html>";





	}
	}

?>
<HTML><head>
<style>
.button {
    background-color: red;
    border: none;
    color: white;
    padding: 25px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
</head>














<BODY bgcolor="#CCFFCC"></BODY></HTML>

























