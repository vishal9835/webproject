<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>


	
		   <?php


				$con = mysqli_connect('localhost','root');
				mysqli_select_db($con,'studentrecord');

				if(isset($_POST['submit'])){

					$registration=$_POST['registration'];
                    $username=$_POST['username'];
					$father=$_POST['father'];
					$mother=$_POST['mother'];
					$files=$_FILES['file'];
					$day=$_POST['day'];
                    $month=$_POST['month'];
                    $year=$_POST['year'];
                    $abc=$_POST['abc'];
                    $gender=$_POST['gender'];
                    $category=$_POST['category'];
                    $aadhar=$_POST['aadhar'];
                    $mobile=$_POST['mobile'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $locality=$_POST['locality'];
                    $city=$_POST['city'];
                    $state=$_POST['state'];
                    $pincode=$_POST['pincode'];
					

                    

					$filename = $files['name'];
					$fileerror = $files['error'];
					$filetmp =$files['tmp_name'];
				

                    $fileext = explode('.',$filename);
					$filecheck = strtolower(end($fileext));

					$fileextstored = array('png','jpg','jpeg');

					if(in_array($filecheck,$fileextstored)){
				

						$destinationfile ='upload/'.$filename;
						move_uploaded_file($filetmp,$destinationfile);


							$q = "INSERT INTO student(registration,username,father,mother,image,day,month,year,abc,gender,category,aadhar,mobile,email,address,locality,city,state,pincode) values('$registration','$username','$father','$mother','$destinationfile','$day','$month','$year','$abc','$gender','$category','$aadhar','$mobile','$email','$address','$locality','$city','$state','$pincode')";

						$query = mysqli_query($con,$q);



                       }

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