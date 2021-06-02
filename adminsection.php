<?php
session_start();
error_reporting(0);

if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=md5($_POST['password']);
$query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="change-password.php";//
$_SESSION['alogin']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['errmsg']="Invalid username or password";
$extra="login2.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>

<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>adminsection</title>
              <!-- font awesome cdnjs link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     

	<style>

        html{
            font-size: 62.5%;

        /*  suppose that 
            1rem=10px
            which means 22px = 22px/10 =>2.2rem*/
        }
       
        @media(max-width: 998px){
        html{
            font-size:55%;
        }
    }
    @media(max-width: 768px){
        html{
            font-size: 45%;
        }
    }
		
		h1{
              
             color: white;
			left: 40rem;
			top: 5rem;
			position: absolute;
		
		}

		header{
			height: 18rem;
			width: 180rem;
			background-color: #C36464 ;      /*( (#C36464) brown or chocolate color)*/
		}



		/*footer{
			top:10px;
			color: white;
			height: 50px;
			width: 100%;
			background-color:  #F0677C;
		}*/

footer {
    padding: 1rem;
    color: #fff;
    font-size: 1.2rem;
    width: 180rem;
    background-color: #F0677C ;     /*(#F0677C pink color)*/    
}

    footer a, footer a:hover {
        color: #fff;
        text-decoration: none;
    }

.marque{
    width: 180rem;
}

	/*	nav ul{
			height: 50px;
			width: 100%;
			color: white;
          background-color: black 
          text-transform:uppercase;    
		}

		nav ul li{
			display:inline-block;
			margin: 5px;
		}*/

/*		body {
    font-family: 'Roboto', sans-serif;
    line-height: 20px;
}*/

/*
		.set-radius-zero {
    border-radius: 0px;
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
}*/

.content-wrapper {
    margin-top: 40px;
    min-height: 600px;
    padding-bottom: 60px;
}

.page-head-line {
    font-weight: 900;
    padding-bottom: 20px;
    border-bottom: 2px solid #F0677C;
    text-transform: uppercase;
    color: #F0677C;
    font-size: 20px;
    margin-bottom: 40px;
}

/*.btn {
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
}

.progress {
    height: 8px;
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
}*/
.login-icon {
    height: 6rem;
width: 6rem;
padding: 1.3rem;
border-radius: 50%;
font-size: 3rem;
margin-bottom: 2rem;
color: #fff;
text-align: center;
cursor:pointer;
background-color:#F0677C;
-webkit-border-radius:50%;
    -moz-border-radius:50%;
}


		.left-div {
    left: 105rem;
    top: 6rem;
    position: absolute;

}
img{
            
            top:5rem;
            left: 105rem;
            border-radius: 50%;
            position: absolute;

        }

    .navbar-brand {
    width: 25rem;
    padding-top: 3rem;
}
/*
 USER SETTINGS DIV */
.user-settings-wrapper .nav > li > a {
    position: relative;
    display: block;
    padding: 1.5rem 1.8rem;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    height: 6rem;
    width: 6rem;
    background-color: #F0677C;
    color: #fff;
}

/*.user-settings-wrapper {
    margin-top: 10px;
}*/

    /*.user-settings-wrapper li {
        display: inline-block;
    }*/

    /*.user-settings-wrapper .dropdown-settings {
        width: 200px;
        padding: 10px;
    }

    .user-settings-wrapper .nav > li > a:hover,.user-settings-wrapper .nav > li > a:focus {
        text-decoration: none;
        background-color: #C36464!important;
    }

     .user-settings-wrapper img {
        height: 64px;
        width: 64px;
        border: 1px solid #000000;
    }
===================================================
    .user-settings-wrapper .dropdown-menu {
        margin: 0px;
        border-radius: 0px!important;
        -moz-border-radius: 0px!important;
        -webkit-border-radius: 0px!important;
    }

    .user-settings-wrapper .btn {
        border-radius: 0px!important;
        -moz-border-radius: 0px!important;
        -webkit-border-radius: 0px!important;
    }

-----------------------------------------------------------
    .user-settings-wrapper .media-heading {
        padding-top: 10px;

    }*/

.menu-section {
     width: 180rem;
    background-color: #3D3D3D;
}

#menu-top a {
    color: #FFF;
    text-decoration: none;
    font-weight: 500;
    padding: 1rem 1rem 1rem 1rem;
    text-transform: uppercase;
}
/*.menu-top-active {
    background-color: #C36464;
}*/
.menu-section .nav > li > a:hover,.menu-section .nav > li > a:focus {
    background-color: #F0677C!important;
}

/*.menu-section .dropdown-menu > li > a:hover,.menu-section .dropdown-menu > li > a:focus {
    background-color: #F0677C!important;
}*/




</style>
</head>
<body>
	<header><h1><b>STUDENT COMPUTER INSTITUTE</b></h1></header> 
     <div class="left-div"> 
		  <i class="fa fa-user-plus login-icon"></i>
        </div>


<section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-14">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">

		<li><a href="session.php">SESSION</a></li>
		<li><a href="semester.php">SEMESTER</a></li>
		<li><a href="department.php">DEPARTMENT</a></li>
		<li><a href="course.php">COURSE </a></li>
        <li><a href="manage student.php">MANAGE STUDENT</a></li>
		<li><a href="enroll histroy.php">ENROLL HISTROY</a></li>
		
		<li><a href="logout1.php">LOGOUT</a></li>
	
	      </ul>
         </div>
      </div>
  </div>
</div>
</section>

     <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Admin Change Password </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Change Password
                        </div>

               
                	<form name="changepwd" method="post" onsubmit="return valid();">
                		
                		<div class="form-group">
                			<td>Current Password:</td>
                			<td><input type="password" name="password" class="form-control" placeholder="Current password" required/></td>
                		</div>

                		<div class="form-group">
                			<td>New Password:</td>
                			<td><input type="password" name="npassword" class="form-control" placeholder="New password" required/></td>
                		</div>

                		<div class="form-group">
                			<td>Confirm Password:</td>
                			<td><input type="password" name="cpassword" class="form-control" placeholder="Confirm password" required/></td>
                		</div>

                		<button  onclick="popup()" type="submit" value="submit" name="submit" class="btn btn-success">Submit</button>

                         <script>
                         	
                         	function popup(){
                         		alert("Are you sure ? want to submit ")
                         	}
                         </script>
                	</form>
                </div>
       
      
 
</body>
</html>