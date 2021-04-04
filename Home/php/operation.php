<?php
include 'connectivity.php';
   
$conn = OpenCon();

 
   $sql = "SELECT * FROM events";
   mysqli_select_db($conn,'events');
   $retval = mysqli_query(  $conn,$sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
   
   
?>