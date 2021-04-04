<?php session_start();
if(!isset($_SESSION['name'])){
header("Location: http://localhost/CarDealer/Registration&Login/Login/index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealer</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <?php include '../Home/php/operation.php';?>
    <?php include '../Home/php/contact.php';?>
</head>

<body>
    <div class="fixed">
        <div class="navbar">
            <a href="http://localhost/CarDealer/">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Events
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <table>
                        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                        <?php   // LOOP TILL END OF DATA  
                while($rows=$retval->fetch_assoc()) 
                {
                    $image = $rows['imgAddr'];
                    $detail=substr($image,0,-3)."txt"; 
                    $image_src = "../Home/homeimage/".$image;
                        ?>
                        <tr style="height: 120px; width: 160px">
                            <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN-->

                            <td style="height: 10px; width:130px"><a
                                    href="http://localhost/CarDealer/Events/process.php?id=<?php echo $rows['ID'] ?>">
                                    <img style=" height: 80px; width:130px;" src='<?php echo $image_src;  ?>'>
                            </td></a>
                            <td style="height: 10px; width:130px"><a
                                    href="http://localhost/CarDealer/Events/process.php?id=<?php echo $rows['ID'] ?>"><?php echo $rows['des'];?>
                            </td></a>
                            <td style="height: 10px; width:130px"><a
                                    href="http://localhost/CarDealer/Events/process.php?id=<?php echo $rows['ID'] ?>"><?php echo $rows['date'];?>
                            </td></a>
                            <?php 
                } 
             ?>
                    </table>
                </div>
            </div>
            <a href="http://localhost/CarDealer/Registration&Login/Login/logout.php">Logout </a>
            <a href="">Welcome <?php echo $_SESSION['name']?></a>
            <div class="date" id="datetime"></div>

        </div>

    </div>
    <div class="fonting">
        <img class="display" style="height:400px; width:600px;" src="<?php echo $image_src;?>">
        <h1><?php echo $_GET['des'];?></h1>
        <p><?php echo $_GET['date'];?></p>
        <p>
            <?php $myfile = fopen("../Home/homeimage/".$detail, "r") or die("Unable to open file!");
        echo fread($myfile,filesize("../Home/homeimage/".$detail));
        fclose($myfile);?></p>
    </div>

</body>
<footer>
    <a href=" https://www.fb.com"><img class=" sociallogo" src="../Home/homeimage/fblogo.png"></a>
    <a href="https://www.instagram.com"><img class="sociallogo" src="../Home/homeimage/instalogo.png"></a>
    <a href="https://www.twitter.com"><img class="sociallogo" src="../Home/homeimage/twitterlogo.png"></a>
</footer>
<script src="../Home/js/home.js"></script>

</html>