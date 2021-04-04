<?php
$dbhost = "127.0.0.1:3308";
$dbuser = "root";
$dbpass = "";
$conn = new mysqli($dbhost, $dbuser, $dbpass,"cardealer") or die("Connect failed: %s\n". $conn -> error);


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $op = $_POST['OldPassword'];
    $np = $_POST['NewPassword'];

    if($op==$np){
        $sql_u = "SELECT * FROM users WHERE username='$username' and password='$op'";
    
        $res_u = mysqli_query($conn, $sql_u);
        if (mysqli_num_rows($res_u) > 0) {
            $sql_p = "update users set password='$np' WHERE username='$username'";
            mysqli_query($conn, $sql_p);
            $status = "Password has been changed."; 	
            header("Location: http://localhost/CarDealer/Registration&Login/ForgotU&P/index.php?status=".$status);
        }    
        else{
            $status = "Username not found!!!"; 	
            header("Location: http://localhost/CarDealer/Registration&Login/ForgotU&P/index.php?status=".$status);
        }
    }
    else{
        $status = "Password does not match!!!"; 	
        header("Location: http://localhost/CarDealer/Registration&Login/ForgotU&P/index.php?status=".$status);
    }

}else{
    $status = "Something went wrong!!!"; 	
    header("Location: http://localhost/CarDealer/Registration&Login/ForgotU&P/index.php?status=".$status);
}

?>