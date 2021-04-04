<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <title>Car Dealer</title>
    <link rel="stylesheet" type="text/css" href="Home/css/main.css?ver=<?php echo rand(111,999)?>">

    <?php include 'Home/php/operation.php';?>
    <?php include 'Home/php/contact.php';?>


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
             ?>
                        <tr style="height: 120px; width: 160px">
                            <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN-->
                            <td style="height: 30px; width:40px"><a href=""><?php echo $rows['ID'];?></a></td>
                            <td style="height: 30px; width:40px"><a href="">
                                    <img style="height: 80px; width:80px;"
                                        src="data:image/gif;base64,<?php echo base64_encode($rows['img']);?>" /></a>
                            </td>
                            <td style="height: 30px; width:40px"><a href=""><?php echo $rows['des'];?>
                                </a></td>
                            <td style="height: 30px; width:40px"><a href=""><?php echo $rows['date'];?></a></td>
                        </tr>
                        <?php 
                } 
             ?>
                    </table>
                </div>
            </div>
            <div class="dropdown">
                <a href="Registration&Login/Login/index.php">Login</a>
            </div>
            <div class="date" id="datetime"></div>
        </div>

    </div>