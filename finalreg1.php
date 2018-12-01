<?PHP
$conn = new mysqli('localhost','root','');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_select_db($conn,"packi");
         $na = $_POST['na'];
	$father = $_POST['fa'];
	$da = $_POST['da'];
	$contact = $_POST['contact'];
	$pin = $_POST['pin'];
	$nationality = $_POST['nationality'];	
	$gender = $_POST['gender'];
	$caste = $_POST['caste'];
	$address = $_POST['address'];
 $password = $_POST['PASS'];
 $spassword = $_POST['SPASS'];
 
 function button()
 {
	
	
	echo"<HTML><STYLE>
		
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
}</STYLE>
		<BODY ALIGN='CENTER'>
		<a href='REG.PHP'   class='button'>OK</a>
		
		</BODY></HTML>";
 } 
 if($na!="" && $father!="" && $da!="" && $contact != "" && $pin!="")
	{
		if($password == $spassword)
		{

	$sql ="INSERT INTO reg(na,father,da,contact,nationality,gender,caste,address,pin,pass) 
VALUES ('$_POST[na]','$_POST[fa]','$_POST[da]','$_POST[contact]','$_POST[nationality]','$_POST[gender]','$_POST[caste]',
'$_POST[address]','$_POST[pin]','$_POST[PASS]')";

if ($conn->query($sql) === TRUE) {
  
	$last_id = $conn->insert_id;
    echo "<H1 ALIGN='CENTER' STYLE='COLOR:ORANGE'>YOUR ARE NOW A MEMBER IN FARM KART.......". $last_id;

	echo "<br>";	
		echo "<br>";	
			echo "<br> <H1 ALIGN='CENTER' STYLE='COLOR:RED'>BY USING THIS ID YOU CAN LOG IN  $last_id";	
$sqld="INSERT INTO ta(naa,contact,pin,id) 
VALUES ('$_POST[na]','$_POST[contact]','$_POST[pin]','$last_id')";

if ($conn->query($sqld) === TRUE) {
    echo "</H1>" ;
	

	echo "<br>";	
		echo "<br>";	
			echo "<br>";	
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}						
}
		else
		{
			echo"<h1>please re-enter your password</h1>";
			button();
		}
	}
	else{
		echo"<H1>please fill the name,father name,date of birth,contact no and pincode</H1>";
 button();
	}
	
		
?>