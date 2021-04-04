<?php
$dbhost = "127.0.0.1:3308";
$dbuser = "root";
$dbpass = "password";
$conn = new mysqli($dbhost, $dbuser, $dbpass,"cardealer") or die("Connect failed: %s\n". $conn -> error);


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql_u = "SELECT * FROM users WHERE username='$username'";
    $sql_e = "SELECT * FROM userinfo WHERE email='$email'";
    $res_u = mysqli_query($conn, $sql_u);
    $res_e = mysqli_query($conn, $sql_e);
    if (mysqli_num_rows($res_u) > 0) {
  	  $statusForUsername = "Username already taken"; 	
        header("Location: http://localhost/CarDealer/Registration&Login/Registeration/index.php?statusForUsername=".$statusForUsername);
    }else if(mysqli_num_rows($res_e) > 0){
  	  $statusForEmail = "Email already taken"; 	
        header("Location: http://localhost/CarDealer/Registration&Login/Registeration/index.php?statusForEmail=".$statusForEmail);
  	}else{
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['password'];
        $password1 = $_POST['conpassword'];
        $contact = $_POST['contact'];
        if($password==$password1){
            $query = "INSERT INTO userinfo (firstName, LastName, email,contactNumber) 
            VALUES ('$fname', '$lname', '$email','$contact')";
            $query = "INSERT INTO users (username,password) 
            VALUES ('$username', '$password1')";
            $results = mysqli_query($conn, $query);
            $query = "INSERT INTO userinfo (firstName, LastName, email,contactNumber) 
            VALUES ('$fname', '$lname', '$email','$contact')";
            $results = mysqli_query($conn, $query);
            $statusForSuccess="Registered successfully.";
            header("Location: http://localhost/CarDealer/Registration&Login/Registeration/index.php?statusForSuccess=".$statusForSuccess);
        }
        else{
            $statusForPass = "Password does not match!"; 	
            header("Location: http://localhost/CarDealer/Registration&Login/Registeration/index.php?statusForPass=".$statusForPass);
        }
    }
}
?>