
<html>
<body bgcolor="#CCFFCC">

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
$t=0;
$bbeenp=0;
$bpop=0;
$bladp=0;
$bbrip=0;

$bbitp=0;
$bonip=0;
$bbeetp=0;
$bcalp=0;
$bbitp=0;
$bbump=0;

$oni=0;
$lad=0;
$cal=0;
$beet=0;
$been=0;
$bit=0;
$bri=0;
$pum=0;
$po=0;


  $sql = "SELECT * FROM kart ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$id = $row["id"];
	$oni+= $row["oni"];

	$beet+=$row["beet"];
	$lad+=$row["lad"];
	
	$cal+=$row["cal"];
	$po+=$row["po"];
	$been+=$row["been"];
	$bit+=$row["bit"];
	$bri+=$row["bri"];
	$pum+=$row["pum"];

	
	
	
	
	
	
	
	
	
	
	$onip = $row["onip"];
	$beetp=$row["beetp"];
	$ladp=$row["ladp"];
	$calp=$row["calp"];
		$bump=$row["pump"];
	$pop=$row["pop"];
	$beenp=$row["beenp"];
	$bitp=$row["bitp"];
	$brip=$row["brip"];		
	$t+=$oni*$onip+$beet*$beetp+$lad*$ladp+$cal*$calp+$po*$pop+$been*$beenp+$bit*$bitp+$bri*$brip+$pum*$bump;
	
	$bonip+=$oni*$onip;
	$bbeetp+=$beet*$beetp;
		$bladp+=$lad*$ladp;
		$bcalp+=$cal*$calp;
		$bbump+=$pum*$bump ;
		$bpop+=$pop*$po;
		$bbeenp+=$been*$beenp ;
		$bbitp+=$bitp*$bit;
		$bbrip+=$bri*$brip;
		
    }
} 
echo "<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 75%;
}

th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>



<form method='post' action='finaldel.php'>
<table border='5'>
  <tr>
    <th>PRODUCT</th>
    <th>QUANITY</th>

   <th>TOTAL</th>
     <th>DELIVERY</th>
	 
	 <TR><TD>ONION</TD><TD><input type='text'  name='oni' value='$oni kg'  readonly style='width:57px;'/></TD><TD><input type='text'  name='bonip' value= '$bonip rs' readonly style='width:57px;'/> </td><TD>
	 <textarea name='add' cols='22' rows='5' placeholder='ADDRESS' rows='4' cols='50' required></textarea></td></tr> 
	 <tr><td>BEETROOT</td><TD><input type='text'  name='beet' value='$beet kg'  readonly style='width:57px;'/></TD><TD><input type='text'  name='bbeetp' value= '$bbeetp rs' readonly style='width:57px;'/> </td></td><TD></TD></tr> 
	  <tr><td>PUMKIN</TD><TD><input type='text'  name='pum' value='$pum kg'  readonly style='width:57px;'/> </TD><TD><input type='text'  name='bbumpp' value= '$bbump rs' readonly style='width:57px;'/> </td>
	  <TD><input type='text'  name='name' placeholder='NAME' rows='4' cols='50' required/></TD></tr> 
	 <tr><td>CALIFLOWER</TD><TD><input type='text'  name='cal' value='$cal kg'  readonly style='width:57px;'/>  </TD><TD><input type='text'  name='bcalp' value='$bcalp rs' readonly style='width:57px;'/> </td></td><TD></TD></tr> 
	 <tr><td>POTATO</TD><TD><input type='text'  name='po' value='$po kg'  readonly style='width:57px;'/>  </TD><TD><input type='text'  name='bpop' value= '$bpop rs' readonly style='width:57px;'/> </td>
	 <TD><input type='text'  name='email' placeholder='EMAIL'  required/>	 </TD></tr> 
	 <tr><td>BITTERGOURD</TD><TD><input type='text'  name='bit' value='$bit kg'  readonly style='width:57px;'/>  </TD><TD><input type='text'  name='bbitp' value= '$bbitp rs' readonly style='width:57px;'/> </td></td><TD></TD></tr> 
	 <tr><td> LADYFINGER</TD><TD><input type='text'  name='lad' value='$lad kg'  readonly style='width:57px;'/>  </TD><TD><input type='text'  name='bladp' value= '$bladp rs' readonly style='width:57px;'/> </td>
	 <TD><input type='text'  name='con' required rows='4' cols='50' placeholder='CONTACT'/> </td></tr> 
 <tr><td>BRINJAL</TD><TD><input type='text'  name='bri' value='$bri kg'  readonly style='width:57px;'/>  </TD><TD><input type='text'  name='bbrip' value= '$bbrip rs' readonly style='width:57px;'/> </td><TD></TD></tr> 
	 <tr><td>BEENS</TD><TD><input type='text'  name='been' value='$been kg'  readonly style='width:57px;'/>  </TD><TD><input type='text'  name='bbeenp' value= '$bbeenp rs' readonly style='width:57px;'/> </td>
	  <TD><input type='text'  name='pin' required rows='4' cols='50' placeholder='PIN'/> </td></tr> <br>

</tr> 
	 
  <tr><td align='center' bgcolor='WHITE' ><h4 STYLE='COLOR:blue' align='center'>buy</h4><input type='image' align='right' name='buy' src='buy.jpg' width='90' height='90' value='add to kart' ></td>
  <td align='center' bgcolor='WHITE' ><h4 STYLE='COLOR:blue' align='center'>BACK TO SHOP</h4><a href='finalmarket.php'><img src='cont.jpg' width='190' height='90' value='add to kart' ></a>&nbsp&nbsp
&nbsp  <a href='finalclearkart.php'><img src='ck.jpg' width='190' height='90' value='add to kart' ></a></td>
  <td bgcolor='WHITE'><h4 STYLE='COLOR:blue' align='center'>KEEP CITY CLEAN</h4><a href='https://www.swacha bharat.com'>
  <img src='cln.jpg' width='190' height='90' value='add to kart' ></a></td><td>
  <h4 STYLE='COLOR:BLUE' align='center'> LIKE US ON FACEBOOK</H4><a href='http//www.fb.com'><img src='fb.jpg' width='190' height='90' value='add to kart' ></a>
  </td></tr><tr><input type='text' value='$t' name='total'></form></tr></table> </body></html>";

if($t>250){
	echo "<h1 STYLE='COLOR:#4CAF50' align='center'> YOUR PURCHASE IS ABOVE 250rs <br> FREE DELIVERY IS AVAILABLE FOR YOU</H1>";
	echo'<marquee direction="right"><img src="del.png"   height="112" width="182" ></marquee><hr color="white">';

}ELSE{
	echo "<h1 STYLE='COLOR:#4CAF50' align='center'>YOUR TOTAL AMOUNT IS $t + DELIVERY CHARGE 25rs</h1>";
	echo'<marquee direction="right"><img src="hm.png"   height="112" width="182" ></marquee><hr color="white">';
		
	$t=$t+25;
}





echo "<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>




<table border='5' >
  <tr>
  <th><H1 STYLE='COLOR:white' align='center'>GRAND TOTAL</h1></th></tr>
	
	<tr><td bgcolor='yellow'><H1 STYLE='COLOR:RED' align='center'> $t </h1></td></tr>
    
   
  </table></body></html>";
  
if(isset($_POST['buy'])){
	$add=$_POST['add'];
	$name=$_POST['name'];
	$con=$_POST['con'];

   $sql = "SELECT * FROM kart  ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$id = $row["id"];
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
$bill=$row["myid"];
	$onip = $row["onip"];
	$beetp=$row["beetp"];
	$ladp=$row["ladp"];
	$calp=$row["calp"];
		$bump=$row["pump"];
	$pop=$row["pop"];
	$beenp=$row["beenp"];
	$bitp=$row["bitp"];
	$brip=$row["brip"];
	$_SESSION["bill"] = "$bill";
$sqle ="INSERT INTO del(oni,beet,pum,cal,po,bit,lad,bri,been,id,bill,name,contact,address) 
VALUES ('$oni','$beet','$pum','$cal','$po','$bit','$lad',
'$bri','$been','$id','$bill','$name','$con','$add')";

if ($conn->query($sqle) === TRUE) {

$sqld = "SELECT * FROM ta where id=$id";
$result = $conn->query($sqld);
	if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
		$onii = $row["oni"];
	$beeti=$row["beet"];
	$ladi=$row["lad"];
	$cali=$row["cal"];
	$poi=$row["po"];
	$beeni=$row["been"];
	$biti=$row["bit"];
	$brii=$row["bri"];
	$pumi=$row["pum"];
	
	$onii-=$oni;
	$beeti-=$beet;
	$ladi-=$lad;
	$cali-=$cal;
	$poi-=$po;
	$beeni-=$been;
	$biti-=$bit;
	$brii-=$bri;
	$pumi-=$pum;
	
	$sql = "UPDATE ta SET po='$poi',beet='$beeti',lad='$ladi',
been='$beeni',bri='$brii',pum='$pumi',oni='$onii',cal='$cali',bit='$biti' WHERE id='$id'";
	
	if ($conn->query($sql) === TRUE) {
    
	$sql="DELETE FROM `kart` WHERE myid='$bill'";
	if ($conn->query($sql) === TRUE){
		
	ECHO"<H1 STYLE='COLOR:YELLOW' align='center'>YOUR ORDER IS PLACED SUCESSFULLY</h1>";
	}
	
	
	
	
	
	
	
	
	}
	}
	
	
	
	
	
	}
	
	

}






	}
}





}




$conn->close();
?></body></html>