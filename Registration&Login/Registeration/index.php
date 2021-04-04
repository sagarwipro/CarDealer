<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealer</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <?php include '../../Home/php/operation.php';?>
    <?php include 'php/save.php';?>


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
                    <a href="">Register</a>
                    <a href="http://localhost/CarDealer/Registration&Login/ForgotU&P/index.php">Forgot Username or
                        Password</a>
                </div>
            </div>
            <div class="date" id="datetime"></div>

        </div>

    </div>
    <div style="min-height:550px;">
    </div>


    <div class="form-box">
        <img src="" class="avatar">
        <h1> Register </h1>
        <form method="post" action="./php/save.php" id="register_form">
            <p>First Name</p>
            <input type="text" name="fname" />
            <p>Last Name</p>
            <input type="text" name="lname" />
            <?php
            if(isset($_GET['statusForEmail'])){
                $message=$_GET['statusForEmail'];
            }
            else{
                $message=" ";
            }?>
            <p><?php echo $message?></p>

            <p>Email</p>
            <input type="email" name="email" />
            <?php
            if(isset($_GET['statusForUsername'])){
                $message=$_GET['statusForUsername'];
            }
            else{
                $message=" ";
            }?>
            <p><?php echo $message?></p>
            <p>Choose username</p>
            <input type="text" name="username" />
            <p>password</p>
            <input type="password" name="password" />
            <?php
            if(isset($_GET['statusForPass'])){
                $message=$_GET['statusForPass'];
            }
            else{
                $message=" ";
            }?>
            <p><?php echo $message?></p>
            <p>confirm password</p>
            <input type="password" name="conpassword" />
            <p>Contact number:</p>
            <input type="text" name="contact" />
            <input type="submit" name="submit" value="Submit">
            <?php
            if(isset($_GET['statusForSuccess'])){
                $message=$_GET['statusForSuccess'];
            }
            else{
                $message=" ";
            }?>
            <p><?php echo $message?></p>
        </form>
    </div>


</body>
<footer>
    <a href=" https://www.fb.com"><img class=" sociallogo" src="../../Home/homeimage/fblogo.png"></a>
    <a href="https://www.instagram.com"><img class="sociallogo" src="../../Home/homeimage/instalogo.png"></a>
    <a href="https://www.twitter.com"><img class="sociallogo" src="../../Home/homeimage/twitterlogo.png"></a>
</footer>
<script src="Home/js/home.js"></script>

</html>