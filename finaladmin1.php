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
	echo "<h1 align='center' STYLE='COLOR:blue'>WELCOME FARMKART ADMIN</H1>";
	echo "<hr color='orange' size='22%'><br><hr color='green' size='22%'>	";
	echo"<a href='LOGOUT.php' class='button' align='right'>LOGOUT</a>";
	
 $sql = "SELECT * FROM admin ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
	
$card=$row["card"];
	$loan=$row["loan"];
	$vloan=$row["vloan"];
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
echo "

<html><head><style>
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
<body align='center'>

<form method='post'>
<h1 align='right' STYLE='COLOR:maroon'><u>NEWS UPDATE </U></H1>
<textarea name='news' cols='120' rows='20' > $news </textarea>
<h1 align='right' STYLE='COLOR:blue'><u>WEATHER </U></H1>


<table border='5' align='center'>
  <tr><th>DISTRICT</th>
    <th>YESTERDAY</th>
    <th>TODAY</th>
	<th>TOMORROW</th>
	
  
 <TR><TD>TIRUNELVELI</TD><TD><input type='text' name='tvlwy' value='$tvlwy *c'  style='width:87px;'/>  </td>
 <TD><input type='text' name='tvlwt' value='$tvlwt *c'  style='width:87px;'/>  </td>
 <TD><input type='text' name='tvlwtm' value='$tvlwtm *c'   style='width:87px;'/>  </td></tr>
 
	 <tr><td>KANNIYAKUMARI</td><TD><input type='text' name='kanwy' value='$kanwy *c'   style='width:87px;'/>  </td>
 <TD><input type='text' name='kanwt' value='$kanwt *c'  style='width:87px;'/>  </td>
 <TD><input type='text' name='kanwtm' value='$kanwtm *c'  style='width:87px;'/>  </td></tr> 
	 
	  <tr><td>THOOTHUKUDI</TD><TD><input type='text' name='thowy' value='$thowy *c'  style='width:87px;'/>  </td>
 <TD><input type='text' name='thowt' value='$thowt *c'   style='width:87px;'/>  </td>
 <TD><input type='text' name='thowtm' value='$thowtm *c'  style='width:87px;'/>   </td></tr></table>
 
 
 
<h1 align='right' STYLE='COLOR:maroon'><u>TODAY TIP </U></H1>
<textarea name='tip' cols='120' rows='20' >$tip</textarea>
<hr Color='blue' size='5'>
<h1 align='right' STYLE='COLOR:AQUA'><u>DAM REPORT </U></H1>
 
 <table border='5' align='center'>
  <tr><th>DAM</th>
   <th>CAPACITY</th>
    <th>WATER LEVEL</th>
	    
	
  
 <TR><TD>METTUR</TD><TD><input type='text'  value='93,470 __feet'  readonly style='width:87px;'/>  </td>

 <TD><input type='text' name='mdl' value='$mdl __feet'   style='width:87px;'/>  </td></tr>
 
	 <tr><td>ALIYAR</td><TD><input type='text'  value='930 __feet'  readonly style='width:87px;'/>  </td>
 
 <TD><input type='text' name='adl' value='$adl __feet'   style='width:87px;'/>  </td></tr> 
 
 	 <tr><td>MANIMUTHAR</td><TD><input type='text'  value='5,511 __feet'  readonly style='width:87px;'/>  </td>
 
 <TD><input type='text' name='kdl' value='$kdl __feet'  style='width:87px;'/>  </td></tr>

	 <tr><td>MANJALAR</td><TD><input type='text'  value='306 __feet'  readonly style='width:87px;'/>  </td>

 <TD><input type='text' name='madl' value='$madl __feet'   style='width:87px;'/>  </td></tr>  
	 
	  <tr><td>VAIGAI</TD><TD><input type='text'  value='6,091 __feet'  readonly style='width:87px;'/>  </td>
 
 <TD><input type='text' name='vdl' value='$vdl __feet'  style='width:87px;'/>   </td></tr></table>
 
 
 
	<h1 align='right' STYLE='COLOR:LAWNGREEN'><u>ADVANCE FARMING </U></H1>
<textarea name='advs' cols='120' rows='20' >$adv</textarea>
<hr Color='blue' size='5'>



<h1 align='right' STYLE='COLOR:maroon'><u>LOAN DETAILS </U></H1>
<textarea name='loan' cols='120' rows='20' >$loan</textarea>
<hr Color='LAWNGREEN' size='5'>


<h1 align='right' STYLE='COLOR:maroon'><u>KISAN CARD</U></H1>
<textarea name='card' cols='120' rows='20' >$card</textarea>
<hr Color='GOLD' size='5'>

<h1 align='right' STYLE='COLOR:maroon'><u>PURCHASE</U></H1>
<textarea name='vloan' cols='120' rows='20' >$vloan</textarea>
<hr Color='RED' size='5'>

















<input type='submit' name='submit' value='update'></form>";	
	}
	
if(isset($_POST['submit'])){

	$card=$_POST["card"];
	$loan=$_POST["loan"];
	$vloan=$_POST["vloan"];
	$news=$_POST["news"];
	$tip=$_POST["tip"];
	$adv=$_POST["advs"];
	$tvlwy=$_POST["tvlwy"];
	$tvlwt=$_POST["tvlwt"];
	$tvlwtm=$_POST["tvlwtm"];
	$kanwy=$_POST["kanwy"];
	$kanwt=$_POST["kanwt"];
	$kanwtm=$_POST["kanwtm"];
	$thowy=$_POST["thowy"];
	$thowt=$_POST["thowt"];
	$thowtm=$_POST["thowtm"];
	$mdl=$_POST["mdl"];
	$adl=$_POST["adl"];
	$kdl=$_POST["kdl"];
	$madl=$_POST["madl"];
	$vdl=$_POST["vdl"];

		$mysqlDateTime = date('c');



	$sql = "UPDATE admin SET card='$card',loan='$loan',vloan='$vloan',news='$news',advance='$adv',tips='$tip',tvlwy='$tvlwy',tvlwt='$tvlwt',tvlwtm='$tvlwtm'
,kanwy='$kanwy',thowy='$thowy',thowt='$thowt',thowtm='$thowtm',kanwt='$kanwt',kanwtm='$kanwtm',mdl='$mdl',adl='$adl',kdl='$kdl',madl='$madl',vdl='$vdl',date='$mysqlDateTime' WHERE id='1'";
	if ($conn->query($sql) === TRUE) {	
	
	
	
	
	echo "sucess";
	
	
	
}
	
	
	
	
	
	
}
	
	

































?>

