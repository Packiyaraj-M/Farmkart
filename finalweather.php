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
	
 $sql = "SELECT * FROM admin ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
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
tr:nth-child(even){background-color: #f3f3f3}
th {
    background-color: #4CGF50;
    color: blue;
}
</style>
</head>
<body align='center'>


<h1 align='center' STYLE='COLOR:SKYBLUE'><u>NEWS UPDATE </U></H1>
 <h3 align='LEFT' STYLE='COLOR:cadetblue'><img src='1.jpg' height='512' width='382' align='left'>$news </h3>
<hr Color='lawngreen' size='5'>
 <h1 align='CENTER' STYLE='COLOR:blue'><u>WEATHER </U></H1>

<img src='wet.png'   height='212' width='282' align='right'>
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
 <br>
 <br> <br> <br> 
 <hr Color='orange' size='5'>
<h1 align='CENTER' STYLE='COLOR:LAWNGREEN'><u>TODAY TIP </U></H1>
<img src='green.jpg'   height='312' width='282' align='left'><h3 align='LEFT' STYLE='COLOR:orange'>$tip</h3>
<hr Color='blue' size='5'>
<h1 align='center' STYLE='COLOR:AQUA'><u>DAM REPORT </U></H1>
 <img src='dam.gif'   height='212' width='302' align='left'>
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
 
 <br> <br> <br>
 <hr Color='navi' size='5'>
	<h1 align='center' STYLE='COLOR:LAWNGREEN'><u>ADVANCE FARMING </U></H1><
<img src='adv.jpg'   height='362' width='582' align='right'><h3 STYLE='COLOR:yellowgreen' align='center'>$adv</h3>
<hr Color='orange' size='5'>";	
	}
	
	
	
	


?>