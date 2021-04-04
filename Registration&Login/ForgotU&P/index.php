<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealer</title>
    <link rel="stylesheet" type="text/css" href="css/main.css?ver=<?php echo rand(111,999)?>">

    <?php include '../../Home/php/operation.php';?>
    <?php include '../../Home/php/contact.php';?>


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
                <button class="dropbtn">Login Avtivities
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="http://localhost/CarDealer/Registration&Login/Login/index.php">Login</a>
                    <a href="http://localhost/CarDealer/Registration&Login/Registeration/index.php">Register</a>
                    <a href="http://localhost/CarDealer/Registration&Login/ForgotU&P/index.php">Forgot Username or
                        Password</a>
                </div>
            </div>

            <div class="date" id="datetime"></div>
        </div>
    </div>

    <body>
        <div class="form-box">
            <h1>Password Activities</h1>
            <div class="focused myDIV">
                <input class="fall focused" type="button" value="Password Change">
                </button>
                <form class="hide" method="post" action="php/change.php" id="PasswordChange">
                    <input type="text" name="username" placeholder="Username" />
                    <input type="password" name="OldPassword" placeholder="Old Password" />
                    <input type="password" name="NewPassword" placeholder="New Password" />
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div><br>
            <br>
            <div class="focused myDIV">
                <input class="fall focused" type=" button" value="Forgot Password">
                </button>
                <form class="hide" method="post" action="php/SendEmail.php" id="ForgotPassword">
                    <input type="email" name="email" placeholder="Your Registered Email" />
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
            <?php
            if(isset($_GET['status'])){
                $message=$_GET['status'];
            }
            else{
                $message=" ";
            }?>
            <p><?php echo $message?></p>
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