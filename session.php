 <?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'onlinecourse2');

if(isset($_POST['submit'])){
	$session=$_POST['session'];

	$q="INSERT INTO session(session)values('$session')";

	$query=mysqli_query($con,$q);
}
 ?>

 <!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<title>adminsection</title>
 
   <!--  this is new -->
<!-- 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<!-- Popper JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

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

.menu-section .nav > li > a:hover,.menu-section .nav > li > a:focus {
    background-color: #F0677C!important;
}

</style>
</head>
<body>
	


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
<br>
</section>
<br>
             <div class="container">
             	<br>
          
			<h1  class="text-white bg-dark text-center">ADD SESSION</h1>
		
	
	<div class="col-lg-3 m-auto d-block">

	<form action="session.php" method="post">


			<div class="form-group">
				<td><b>CREATE SESSION</b></td>
                 <td><input type="session" name="session"  class="form-control" placeholder="SESSION" required /></td>
		</div>

<button class="btn btn-primary" name="submit" value="submit" >SUBMIT</button>


		
	</form>
</div>
</div>

<div class="container">
		<div class="col-lg-12">
			<h1 class="text-warning text-center">MANAGE SESSION</h1>
			<br>
			<table class="table table-striped table-hover table-bordered">
				<tr class="bg-dark text-white text-center">
					<td> Id </td>
					<td> Session </td>
					<td>Creation date and Time</td>
					<td> Operation</td>
					
				</tr>

				<?php
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'onlinecourse2');

				$q = "select * from session";
				$query = mysqli_query($con,$q);

				while ($res=mysqli_fetch_array($query)){

					?>

					<tr class="text-center">
						<td><?php echo $res['id']; ?></td>
						<td><?php echo $res['session']; ?></td>
						<td><?php echo $res['creationdate']; ?></td>
						
						<td> <button class="btn-danger btn"> <a href="deletesession.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
					</tr>

				<?php
				}
				?>

			</table>
		</div>
	</div>




</body>
</html>
