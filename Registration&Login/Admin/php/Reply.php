<?php
$dbhost = "127.0.0.1:3308";
$dbuser = "root";
$dbpass = "password";

$conn = new mysqli($dbhost, $dbuser, $dbpass,"cardealer") or die("Connect failed: %s\n". $conn -> error);


if (isset($_GET['message']) && isset($_GET['id'])) {
$ID=$_GET['id'];
    $sql = "SELECT * FROM `messages` WHERE ID=$ID";
    mysqli_select_db($conn,'cardealer');
    $result = $conn->query($sql);
    $subject = 'Reply from CarDealer';

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
       
          $to      = $row["email"];
          $message = $_GET['message'];
          $headers = 'From: sagarwipro143@gmail.com' . "\r\n" .
                      'MIME-Version: 1.0' . "\r\n" .
                      'Content-type: text/html; charset=utf-8';
                    
          mail($to, $subject, $message, $headers);
     
        }
      }
            $status = "ACTION TAKEN";
            $sql1 = $conn->query("UPDATE messages SET sub='$subject',status='$status' WHERE ID='$ID'");
            if ($sql1) {
                header("Location: http://localhost/CarDealer/Registration&Login/Admin/adminportal.php");
                $conn->close();
              } else {
                echo "Error updating record: " . $conn->error;
              }
        }
?>