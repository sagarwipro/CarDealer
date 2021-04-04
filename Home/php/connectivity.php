<?php
function OpenCon()
 {
 $dbhost = "127.0.0.1:3308";
 $dbuser = "root";
 $dbpass = "password";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,"cardealer") or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
   
?>