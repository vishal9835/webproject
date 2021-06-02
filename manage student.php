<!DOCTYPE html>
<html>
<head>
	 	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Manage Student</title>
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
                <div class="col-md-16">
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

         <div class="container">

        <div class="table-responsive"><br>
            <h1 class="text-center bg-dark text-white ">MANAGE STUDENT RECORD </h1><br>
            <table class="table table-hover table-striped table-bordered text-center">

                <thead class="bg-dark text-white">
                    <th>ID</th>
                    <th>Registration No:</th>
                    <th>Student Name:</th>
                    <th>F.Name</th>
                    <th>M.Name</th>
                    <th>Profile Pic</th>
                     <th>Day</th>
                      <th>Month</th>
                       <th>Year</th>
                        <th>Course</th>
                         <th>Gender</th>
                          <th>Category</th>
                           <th>Aadhar</th>
                            <th>Mobile</th>
                             <th>Email</th>
                              <th>Address</th>
                               <th>Locality</th>
                                <th>city</th>
                                 <th>State</th>
                                  <th>Pincode</th>
                </thead>

              <tbody>

                <?php
                $con = mysqli_connect('localhost','root');
                mysqli_select_db($con,'studentrecord');

                $q= "select * from student";
                $query= mysqli_query($con,$q);

                while ($res = mysqli_fetch_array($query)){

                    ?>

                    <tr class="text-center">
                        <td><?php echo $res['id']; ?></td></td>
                        <td><?php echo $res['registration']; ?></td></td>
                        <td><?php echo $res['username']; ?></td></td>
                        <td><?php echo $res['father']; ?></td></td>
                        <td><?php echo $res['mother']; ?></td></td>
                        <td><img src=" <?php echo $result['image']?>"height="100rem" width="100rem"></td>
                        <td><?php echo $res['day']; ?></td></td>
                        <td><?php echo $res['month']; ?></td></td>
                        <td><?php echo $res['year']; ?></td></td>
                        <td><?php echo $res['abc']; ?></td></td>
                        <td><?php echo $res['gender']; ?></td></td>
                        <td><?php echo $res['category']; ?></td></td>
                        <td><?php echo $res['aadhar']; ?></td></td>
                        <td><?php echo $res['mobile']; ?></td></td>
                        <td><?php echo $res['email']; ?></td></td>
                        <td><?php echo $res['address']; ?></td></td>
                        <td><?php echo $res['locality']; ?></td></td>
                        <td><?php echo $res['city']; ?></td></td>
                        <td><?php echo $res['state']; ?></td></td>
                          <td><?php echo $res['pincode']; ?></td></td>
                          <td><button class="btn btn-danger"><a href=deletestudent.php?id=<?php echo $res['id']; ?> class="text-white">Delete</a></button></td>

                           <td><button class="btn btn-success"><a href=updatestudent.php?id=<?php echo $res['id']; ?> class="text-white">Update</a></button></td>

                       </tr>
                       <?php

                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>