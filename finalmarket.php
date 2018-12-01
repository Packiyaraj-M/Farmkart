<html><head>
</head>
<body bgcolor="#99FFCC">


<?php
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

$sql = "SELECT * FROM TA  ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$id = $row["id"];
	$oni = $row["oni"];
	$fa=$row["naa"];
	$beet=$row["beet"];
	$lad=$row["lad"];
	$id=$row["id"];
	$cal=$row["cal"];
	$po=$row["po"];
	$been=$row["been"];
	$bit=$row["bit"];
	$bri=$row["bri"];
	$pum=$row["pum"];
		
	$onip = $row["onip"];
	$fap=$row["fa"];
	$beetp=$row["beetp"];
	$ladp=$row["ladp"];
	
	$calp=$row["calp"];
	$pop=$row["pop"];
	$beenp=$row["beenp"];
	$bitp=$row["bitp"];
	$brip=$row["brip"];
	$bump=$row["bump"];
	$con=$row["contact"];
	$date=$row["date"];
	$pin=$row["pin"];
	$sta=$row["sta"];

		
echo"<html><body>
<form method='post'  ><table border='3' style='display: inline-block; border: 1px solid;  float: left;' >
<tr bgcolor='red'><td> <input type='text' name='id' value=$id readonly style='width:100px;'/> <input type='text' name='contact' value='contact: $con' readonly style='width:140px;'/></td></tr>
<tr bgcolor='green'><td> <input type='text' name='naa' value='Name: $fa ' readonly style='width:0140px;'/>  <input type='text' value='pin :$pin' readonly style='width:100px;'/></td></tr>
<tr bgcolor='red'><td> <input type='text' value='onion' readonly style='width:85px;'/><input type='text'  name='oni' value='$oni kg' readonly style='width:50px;'/> <input type='text'  name='onip' value='$onip rs' readonly style='width:40px;'/>                <input type='number'  name='boni' max='$oni' style='width:65px;' placeholder='quanity' /></td></tr>
<tr bgcolor='green'><td> <input type='text' value='beet root' readonly style='width:85px;'/><input type='text' name='beet' value='$beet kg' readonly style='width:50px;'/> <input type='text'  name='beetp' value='$beetp rs' readonly style='width:40px;'/>         <input type='number'  name='bbeet' max='$beet' style='width:65px;'  placeholder='quanity'/></td></tr>
<tr bgcolor='blue'><td> <input type='text' value='pumkin' readonly style='width:85px;'/><input type='text' name='pum' value='$pum kg' readonly style='width:50px;'/>   <input type='text'  name='bump' value='$bump rs' readonly style='width:40px;'/>             <input type='number'  name='bpum' max='$pum'style='width:65px;'  placeholder='quanity'/></td></tr>
<tr bgcolor='yellow'><td> <input type='text' value='califlower' readonly style='width:85px;'/><input type='text' name='cal' value='$cal kg' readonly style='width:50px;'/>   <input type='text'  name='calp' value='$calp rs' readonly style='width:40px;'/>        <input type='number'  name='bcal' max='$cal'style='width:65px;'  placeholder='quanity'/></td></tr>
<tr bgcolor='orange'><td> <input type='text' value='potato' readonly style='width:85px;'/><input type='text' name='po' value='$po kg' readonly style='width:50px;'/>             <input type='text'  name='pop' value='$pop rs' readonly style='width:40px;'/>    <input type='number'  name='bpo' max='$po'style='width:65px;'  placeholder='quanity'/></td></tr>
<tr bgcolor='aqua'><td> <input type='text' value='bitter groud' readonly style='width:85px;'/><input type='text' name='bit' value='$bit kg' readonly style='width:50px;'/>           <input type='text'  name='bitp' value='$bitp rs' readonly style='width:40px;'/>  <input type='number'  name='bbit' max='$bit'style='width:65px;'  placeholder='quanity'/></td></tr>
<tr bgcolor='black'><td> <input type='text' value='lady finger' readonly style='width:85px;'/><input type='text' name='lad' value='$lad kg' readonly style='width:50px;'/>          <input type='text'  name='ladp' value='$ladp rs' readonly style='width:40px;'/>     <input type='number'  name='blad' max='$lad'style='width:65px;'  placeholder='quanity'/></td></tr>
<tr bgcolor='silver'><td > <input type='text' value='brinjal' readonly style='width:85px;'/><input type='text' name='bri' value='$bri kg' readonly style='width:50px;'/>          <input type='text'  name='brip' value='$brip rs' readonly style='width:40px;'/>          <input type='number'  name='bbri' max='$bri'style='width:65px;'  placeholder='quanity'/></td></tr>
<tr bgcolor='light green'><td><input type='text' value='beens' readonly style='width:85px;'/><input type='text' name='been' value='$been kg' readonly style='width:50px;'/>              <input type='text'  name='beenp' value='$beenp rs' readonly style='width:40px;'/>     <input type='number'  name='bbeen'max='$been' style='width:65px;' placeholder='quanity'/></td></tr>
<tr bgcolor='skyblue'><td><input type='text' value='$date' height='48' readonly style='width:70px;'/><input type='text' value='$sta' height='48' readonly style='width:180px;'/></td></tr>
<tr><td align='center' bgcolor='yellow'><input type='image' name='kart' src='9.png' width='88' height='88' value='add to kart' ></td></form></tr></table></body></html>";
}


}
if(isset($_POST['kart'])){

$id=$_POST['id'];

    $oni = $_POST["oni"];
	$fa=$_POST["naa"];
	$beet=$_POST["beet"];
	$lad=$_POST["lad"];

	$cal=$_POST["cal"];
	$po=$_POST["po"];
	$been=$_POST["been"];
	$bit=$_POST["bit"];
	$bri=$_POST["bri"];
	$pum=$_POST["pum"];
		
	$onip = $_POST["boni"];
	
	$beetp=$_POST["beetp"];
	$ladp=$_POST["ladp"];
	
	$calp=$_POST["calp"];
	$pop=$_POST["pop"];
	$beenp=$_POST["beenp"];
	$bitp=$_POST["bitp"];
	$brip=$_POST["brip"];
	$bump=$_POST["bump"];
	
	
	$boni = $_POST["boni"];
	$bbeet=$_POST["bbeet"];
	$blad=$_POST["blad"];
	$bcal=$_POST["bcal"];
	$bpo=$_POST["bpo"];
	$bbeen=$_POST["bbeen"];
	$bbit=$_POST["bbit"];
	$bri=$_POST["bbri"];
	$bpum=$_POST["bpum"];
	$con=$_POST["contact"];


	$sqle ="INSERT INTO kart(oni,beet,pum,cal,po,bit,lad,bri,been,onip,beetp,pump,calp,pop,bitp,ladp,brip,beenp,id) 
VALUES ('$_POST[boni]','$_POST[bbeet]','$_POST[bpum]','$_POST[bcal]','$_POST[bpo]','$_POST[bbit]','$_POST[blad]',
'$_POST[bbri]','$_POST[bbeen]','$_POST[onip]','$_POST[beetp]','$_POST[bump]','$_POST[calp]','$_POST[pop]','$_POST[bitp]','$_POST[ladp]',
'$_POST[brip]','$_POST[beenp]','$id')";
if ($conn->query($sqle) === TRUE) {
	
echo '<a href="finalkart.php"  target="right" class="button">kart</a>';



}

















	
}

$conn->close();
?></body></html>