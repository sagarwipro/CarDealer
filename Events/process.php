<?php
$dbhost = "127.0.0.1:3308";
$dbuser = "root";
$dbpass = "password";
$conn = new mysqli($dbhost, $dbuser, $dbpass,"cardealer") or die("Connect failed: %s\n". $conn -> error);

    $id = $_GET['id'];
    if (!isset($_GET["id"])){
        header("Location: http://localhost/CarDealer/index.php");
    }
    
    $sql = "SELECT * FROM events WHERE ID='$id'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
            
            $img=$row['imgAddr'];
            $des=$row['des'];
            $dat=$row['date'];
         }
         header("Location: http://localhost/CarDealer/Events/index.php?image=$imgAddr&des=$des&date=$dat");         
}

?>}