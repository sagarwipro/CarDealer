<?php
$dbhost = "127.0.0.1:3308";
$dbuser = "root";
$dbpass = "password";

$conn = new mysqli($dbhost, $dbuser, $dbpass,"cardealer") or die("Connect failed: %s\n". $conn -> error);

 if ( !empty( $_POST['fname'] ) ) {

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $mess = $_POST['message'];
    $sql = "INSERT INTO `messages`(`name`, `email`, `message`, `status`) VALUES ('$firstname','$email','$mess','action required')";
    mysqli_select_db($conn,'cardealer');
    $result =  mysqli_query( $conn,$sql);
    if (!$result) {
        echo '<script language="javascript">';
        echo 'alert("Your Message successfully sent, we will get back to you ASAP.");';
        echo 'window.location.href="http://localhost/CarDealer/index.php";';
        echo '</script>';
    mysqli_close($conn);
}   

    
else{
    $status= "We will reach to you within 24 hours, Thank you.";
    echo '<script language="javascript">';
    echo 'alert("Your Message successfully sent, we will get back to you ASAP.");';
    echo 'window.location.href="http://localhost/CarDealer/index.php";';
    echo '</script>';
mysqli_close($conn);
}   
}
?>