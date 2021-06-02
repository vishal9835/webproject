

<html>
<head>
<title>student login</title>



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<style type="text/css">

.start
{
width:400px;
height:500px;
text-align:center;
background-color:blue;
opacity:0.6;
border-radius: 10px;
}
.txtbox{
margin-top:15px;
background:white;
text-align:start;
font-size:15px;
font-family:sans-serif;
height:30px;
width:300px;
padding:15px;
border-radius:15px;
}
.btn{
	width: 300px;
	height:40px;
	border-radius:10px;
	font-size:20px;
	background-color: lightgreen;
}
</style>
</head>
<body class="bg">
<center>
<div class="start">
<h2>USER LOGIN</h2>>
<img src="IMG_20200628_004457.jpg" height="100" width="100" alt=""></br>

<form action="validation.php" method="POST">


<input type="username" name="username" class="txtbox" placeholder="username"/><br/>

<input type="password" name="password" class="txtbox" placeholder="Enter password"/><br/><br/>

<input type="submit" name="login" class="btn" value="LOGIN"/><br/><br/>



<a href="register.html" class="text-white bg-dark">CREATE ACCOUNT.</a>
		






</div>
</form>
</div>
</center>


</body>
</html>






