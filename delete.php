<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'photoupload');

$id=$_GET['id'];
$q="DELETE FROM 'picupload' WHERE id = $id ";

mysqli_query($con,$q);

header('location:record.php');
?>