<?php

              $con = mysqli_connect('localhost','root');
              mysqli_select_db($con,'studentrecord');


              $id = $_GET['id'];

              $q = " DELETE FROM student WHERE  id = $id ";

              

              mysqli_query($con,$q);

              header('location:manage student.php');
?>