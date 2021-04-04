<?php

$dbhost = "127.0.0.1:3308";
$dbuser = "root";
$dbpass = "";
$conn = new mysqli($dbhost, $dbuser, $dbpass,"cardealer") or die("Connect failed: %s\n". $conn -> error);


if (isset($_POST['email'])) {
    $email = $_POST['email'];
        $sql = "SELECT * FROM userinfo WHERE email='$email'";
    
        $res = mysqli_query($conn, $sql);
        print_r($email);
        print_r($res);
        if (mysqli_num_rows($res) > 0) {
            $to      = $email;
            $subject = 'Request for new password.';
            $message = 'Forgotten password need to be changed';
            $headers = 'From: sagarwipro143@gmail.com' . "\r\n" .
                        'MIME-Version: 1.0' . "\r\n" .
                        'Content-type: text/html; charset=utf-8';


            mail($to, $subject, $message, $headers);
            $status = "Plasese check your email."; 	
            header("Location: http://localhost/CarDealer/Registration&Login/ForgotU&P/index.php?status=".$status);
            }    
        else{
            $status = "User not found!!!"; 	
            header("Location: http://localhost/CarDealer/Registration&Login/ForgotU&P/index.php?status=".$status);
        }
    }
else{
    $status = "Something went wrong!!!"; 	
    header("Location: http://localhost/CarDealer/Registration&Login/ForgotU&P/index.php?status=".$status);
}

?>