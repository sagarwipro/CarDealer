<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealer</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <?php include '../../Home/php/operation.php';?>
    <?php include '../../Home/php/contact.php';?>
</head>

<body>
    <?php
 $dbhost = "127.0.0.1:3308";
 $dbuser = "root";
 $dbpass = "password";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,"cardealer") or die("Connect failed: %s\n". $conn -> error);

 $query = "SELECT * FROM messages";
 mysqli_select_db($conn,'events');
 $result = mysqli_query(  $conn,$query );
 
 if(! $result ) {
    die('Could not get data: ' . mysqli_error($conn));
 }
?>
</body>

</html>