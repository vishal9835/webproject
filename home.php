<?php
session_start();
if(!isset($_SESSION['username']))
header('location:http://localhost/project1/login2.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
</head>
<body>
<h2>Hello, <?php echo $_SESSION['username'];  

?></h2>
<a href="logout1.php">Logout</a>
</body>
</html>