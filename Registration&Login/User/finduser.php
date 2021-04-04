<?php
session_start();
$dbhost = "127.0.0.1:3308";
$dbuser = "root";
$dbpass = "password";
$conn = new mysqli($dbhost, $dbuser, $dbpass,"cardealer") or die("Connect failed: %s\n". $conn -> error);
if ( !empty( $_GET['u']) ||  !empty( $_GET['[p]']) ){    
    $username = $_GET['u'];
    $password = $_GET['p'];
    $sql = "SELECT * FROM `users` WHERE username='".$username."' AND password='".$password."';";
    mysqli_select_db($conn,'cardealer');

    $result =  mysqli_query( $conn,$sql);
    $row=mysqli_fetch_assoc($result);

if (!$row) {
    $status="Wrong username or password.";
    header("Location: http://localhost/CarDealer/Registration&Login/Login/index.php?status=".$status);
}   
else if($username=="Admin"){
  $_SESSION['name']=$username;
    header("Location: http://localhost/CarDealer/Registration&Login/Admin/adminportal.php");
    }
else if($username){
    $_SESSION['name']=$username;
    header("Location: http://localhost/CarDealer/Registration&Login/User/user.php");
    }
}
else{
    $status="Wrong username or password.";
    header("Location: http://localhost/CarDealer/Registration&Login/Login/index.php?status=".$status);    
}

?>