<?php

      $con = mysqli_connect('localhost','root');
      mysqli_select_db($con,'onlinecourse2');

      $id = $_GET['id'];

      $q = " DELETE FROM department WHERE id = $id ";

      mysqli_query($con,$q);

      header('location:department.php');
?>