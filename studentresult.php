<?php  

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'studentresult');

if(isset($_POST['submit'])){


    $rollno=$_POST['rollno'];
	$username=$_POST['username'];
	$math=$_POST['math'];
	$phy=$_POST['phy'];
	$chem=$_POST['chem'];
	$eng=$_POST['eng'];
	$eco=$_POST['eco'];
	$marksobt=$_POST['marksobt'];

	$q= "INSERT INTO studentrecord (rollno,username,math,phy,chem,eng,eco,marksobt) values('$rollno','$username','$math','$phy','$chem','$eng','$eco','$marksobt')";



						$query = mysqli_query($con,$q);

						
}


?>

				<!DOCTYPE html>
<html>
<head>
	<title>Insertion</title>
</head>
<body oncontextmenu="return false">
<p><?php
 if($query==1) 
 	echo "Record inserted"; 
else
 echo"Insertion failed";
?>

					
</body>
</html>