



<!DOCTYPE html>
<html>
<head>
	<title>Fetch data from database</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	
</head>
<body>
	<div class="container">
		<div class="col-lg-12">

	<center><h1 class="text-success">STUDENT RECORD</h2></center>
						
					
		
				<table  class="table table-striped table-hover table-bordered">
					

					<thead class="bg-dark text-white">
		
		<th>id</th>
		<th>registration</th>
		<th>username</th>
		<th>father</th>
		<th>mother</th>
		<th>image</th>
		<th>day</th>
		<th>month</th>
		<th>year</th>
		<th>course</th>
		<th>gender</th>
		<th>category</th>
		<th>aadhar</th>
		<th>mobile</th>
		<th>email</th>
		<th>address</th>
		<th>locality</th>
		<th>city</th>
		<th>state</th>
		<th>pincode</th>
		<th colspan="2">operation</th>
							
					
					</thead>
				
			

			
               <?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"studentrecord");
$query="select * from student";
$result=mysqlI_query($con,$query);
$num=mysqli_num_rows($result);

while($res=mysqli_fetch_array($result)){

	?>  

	<tr>

			<td><?php echo $res['id'];?></td>
			<td><?php echo $res['registration'];?></td>
			<td><?php echo $res['username'];?></td>
			<td><?php echo $res['father'];?></td>
			<td><?php echo $res['mother'];?></td>
			<td>
				<img src="<?php echo "upload/".$res['file']; ?>" width="100px" height="100px" alt="image"></td>
			<td><?php echo $res['day'];?></td>
			<td><?php echo $res['month'];?></td>
			<td><?php echo $res['year'];?></td>
			<td><?php echo $res['abc'];?></td>
			<td><?php echo $res['gender'];?></td>
			<td><?php echo $res['category'];?></td>
			<td><?php echo $res['aadhar'];?></td>
			<td><?php echo $res['mobile'];?></td>
			<td><?php echo $res['email'];?></td>
			<td><?php echo $res['address'];?></td>
			<td><?php echo $res['locality'];?></td>
			<td><?php echo $res['city'];?></td>
			<td><?php echo $res['state'];?></td>
			<td><?php echo $res['pincode'];?></td>
			
			<td> <button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">delete</a></button></td>

			<td> <button class="btn-success btn"><a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">update</a></button></td>
		</tr>

		<?php

      }

      ?>

</tbody>
</table>
</body>
</html>