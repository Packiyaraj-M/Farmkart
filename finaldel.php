<?php
session_start();
?>
<html>
<body bgcolor="#CCFFCC">
<?php













$servername = "localhost";
$username = "root";
$password = "";
$dbname = "packi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




	$t=$_POST['total'];
if($t<250){
	$t=$t+25;
}
else{
	echo"$t";
}
	
	
	
	
	$add=$_POST['add'];
	$name=$_POST['name'];
	$con=$_POST['con'];
		$email = $_POST['email'];

   $sql = "SELECT * FROM kart ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
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
	$mysqlDateTime = date('c');
$sqle ="INSERT INTO del(datee,oni,beet,pum,cal,po,bit,lad,bri,been,id,bill,name,contact,address) 
VALUES ('$mysqlDateTime','$oni','$beet','$pum','$cal','$po','$bit','$lad',
'$bri','$been','$id','$bill','$name','$con','$add')";

if ($conn->query($sqle) === TRUE) {

$sqld = "SELECT * FROM ta where id=$id";
$result = $conn->query($sqld);
	if ($result->num_rows > 0) {
  

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
    
echo".";
	}
	
	
	
	
	
	
	
	
	}
	}
	
	
	
	
	
	}


$bill=$_SESSION["bill"];
 $sql = "SELECT * FROM del where bill=$bill";
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
	
	
	
	
	}
	ECHO"<H1 STYLE='COLOR:ORANGE' align='center'>YOUR ORDER IS PLACED SUCESSFULLY</h1>";
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



<form method='post'>
<table border='5' align='center'>
  <tr>
    <th>PRODUCT</th>
    <th>QUANITY</th>
  
	 
	 <TR><TD>ONION</TD><TD><input type='text'  name='oni' value='$oni kg'  readonly style='width:57px;'/> </td></tr> 
	 <tr><td>BEETROOT</td><TD><input type='text'  name='beet' value='$beet kg'  readonly style='width:57px;'/>  </td></tr> 
	  <tr><td>PUMKIN</TD><TD><input type='text'  name='pum' value='$pum kg'  readonly style='width:57px;'/>  </td></tr> 
	 <tr><td>CALIFLOWER</TD><TD><input type='text'  name='cal' value='$cal kg'  readonly style='width:57px;'/>  </td></tr> 
	 <tr><td>POTATO</TD><TD><input type='text'  name='po' value='$po kg'  readonly style='width:57px;'/>   </td></tr> 
	 <tr><td>BITTERGOURD</TD><TD><input type='text'  name='bit' value='$bit kg'  readonly style='width:57px;'/>   </td></tr> 
	 <tr><td> LADYFINGER</TD><TD><input type='text'  name='lad' value='$lad kg'  readonly style='width:57px;'/> </td></tr> 
 <tr><td>BRINJAL</TD><TD><input type='text'  name='bri' value='$bri kg'  readonly style='width:57px;'/>  </TD></tr> 
	 <tr><td>BEENS</TD><TD><input type='text'  name='been' value='$been kg'  readonly style='width:57px;'/>  </td></tr> 
	
  <tr><td bgcolor='#CCFFCC'align='right'><h4 STYLE='COLOR:blue' align='center'>KEEP CITY CLEAN</h4><a href='https://www.swacha bharat.com'><img src='cln.jpg' width='190' height='90' value='add to kart' ></a></td></td><td align='center' bgcolor='#CCFFCC' ><h4 STYLE='COLOR:blue' align='center'>BACK TO SHOP</h4><a href='finalmarket.php'><img src='cont.jpg' width='190' height='90' value='add to kart' ></a></td></tr><tr></form></tr></table> </body></html>";
	echo"<img src='del.png'   height='112' width='182' align='left'><h1 STYLE='COLOR:BROWN' align='center'>YOUR ORDER IS PLACED SUCESSFULLY</h1>";
	
	
	echo'<BR><BR><HR Color="red" size="55">';

	
	
	}
}
	}

$sqlE="DELETE  FROM `kart` WHERE dd=0" ;
	if ($conn->query($sqlE) === TRUE){
		
	
	
	
	include"classes/class.phpmailer.php";
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=1;
$mail->SMTPAuth =true;
$mail->SMTPSecure='ssl';
$mail->Host ="smtp.gmail.com";
$mail->Port =465;
$mail->IsHTML(true);
$mail->Username="m.packiyaraj20@gmail.com";
$mail->Password="9994258858";
$mail->SetFrom("m.packiyaraj20@gmail.com");
$mail->Subject = "order sucessfully placed in farmkart";
$mail->Body = "<html>
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
<body bgcolor='lawngreen'>



<form method='post'>

 <H1 STYLE='COLOR:RED' align='center'>CONFORMATION MAIL FROM FARMKART</H1>
  <table border='5' align='center' bgcolor='lawngreen'><tr>
    <th>PRODUCT</th>
    <th>QUANITY</th>
  </tr>
	 
	 <TR><TD>ONION</TD><TD><input type='text'  name='oni' value='$oni kg'  readonly style='width:57px;'/> </td></tr> 
	 <tr><td>BEETROOT</td><TD><input type='text'  name='beet' value='$beet kg'  readonly style='width:57px;'/>  </td></tr> 
	  <tr><td>PUMKIN</TD><TD><input type='text'  name='pum' value='$pum kg'  readonly style='width:57px;'/>  </td></tr> 
	 <tr><td>CALIFLOWER</TD><TD><input type='text'  name='cal' value='$cal kg'  readonly style='width:57px;'/>  </td></tr> 
	 <tr><td>POTATO</TD><TD><input type='text'  name='po' value='$po kg'  readonly style='width:57px;'/>   </td></tr> 
	 <tr><td>BITTERGOURD</TD><TD><input type='text'  name='bit' value='$bit kg'  readonly style='width:57px;'/>   </td></tr> 
	 <tr><td> LADYFINGER</TD><TD><input type='text'  name='lad' value='$lad kg'  readonly style='width:57px;'/> </td></tr> 
 <tr><td>BRINJAL</TD><TD><input type='text'  name='bri' value='$bri kg'  readonly style='width:57px;'/>  </TD></tr> 
	 <tr><td>BEENS</TD><TD><input type='text'  name='been' value='$been kg'  readonly style='width:57px;'/>  </td></tr></table>
<br><br><br><table align='center'>	 
	<th bgcolor='skyblue'><H1 STYLE='COLOR:maroon' align='center'>GRAND TOTAL</h1></th></tr>
	
	
	<tr bgcolor='yellow'><H1 STYLE='COLOR:RED' align='center'> $t </h1></tr></table>
	
	
	
	
   </body></html>";
	

$mail->AddAddress($_POST["email"]);
if(!$mail->Send())
{
echo "please check your internet connection";
}
else
{
	header("Location: finalmarket.php");	
	
}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
	
	
	
	
	
	
	
	
	
	</BODY></HTML>