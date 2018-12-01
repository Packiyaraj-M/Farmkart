<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset($_SESSION['uid']); 

// destroy the session 
session_destroy($_SESSION['uid']);
	header("Location: finallog.php"); 
?>

</body>
</html>