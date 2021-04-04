<?php session_start();
if(!isset($_SESSION['name'])){
header("Location: http://localhost/CarDealer/Registration&Login/Login/index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <title>Car Dealer</title>
    <link rel="stylesheet" type="text/css" href="../../Home/css/main.css">

    <?php include '../../Home/php/operation.php';?>
    <?php include '../../Home/php/contact.php';?>

    <link type="text/js" href="Home/js/clearform.js">

</head>

<body>
    <div class="fixed">
        <div class="navbar">
            <a href="http://localhost/CarDealer/index.php">Home</a>
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
                    $image_src = "../../Home/homeimage/".$image;
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
                        </tr>
                        <?php 
                } 
             ?>
                    </table>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Hello &nbsp;<?php echo $_SESSION['name'] ?>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="http://localhost/CarDealer/Registration&Login/Login/LogOut.php">Logout </a>
                </div>
            </div>
            <div class="date" id="datetime"></div>

        </div>
    </div>

    <div style="width:40px; height:40px; margin-top:50px;">
        <table style="background-color:white; display:inline-block;">
            <th>
                MENU
            </th>
            <td>
                Participate in events
            </td>
            <td>
                Buy
            </td>
            <td>
                Upcomings
            </td>
        </table>
    </div>


</body>

<footer>
    <a href=" https://www.fb.com"><img class=" sociallogo"
            src="http://localhost/carDealer/Home/homeimage/fblogo.png"></a>
    <a href="https://www.instagram.com"><img class="sociallogo"
            src="http://localhost/carDealer/Home/homeimage/instalogo.png"></a>
    <a href="https://www.twitter.com"><img class="sociallogo"
            src="http://localhost/carDealer/Home/homeimage/twitterlogo.png"></a>
</footer>
<script src="http://localhost/carDealer/Home/js/home.js"></script>

</html>