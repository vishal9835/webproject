<?php
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'reg');




$q="INSERT INTO regis (username,mobile,email,password)values('$username','$mobile','$email','$password')";

$status=mysqli_query($con,$q);
mysqli_close($con);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertion</title>
</head>
<body>
<p><?php
 if($status==1) 
 	echo "REGISTRATION SUCCUSSFUL"; 
else
 echo"Insertion failed";
?>
</body>
</html>