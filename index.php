<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealer</title>
    <link rel="stylesheet" type="text/css" href="Home/css/main.css">

    <?php include 'Home/php/operation.php';?>
    <?php include 'Home/php/contact.php';?>

</head>

<body>
    <div class="fixed">
        <div class="navbar">
            <a href="#">Home</a>
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
                    $image_src = "./Home/homeimage/".$image;
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
                        </a>
                        <?php 
                } 
             ?>
                    </table>
                </div>
            </div>
            <?php session_start();
            if(!isset($_SESSION['name'])){
            ?>
            <div class="dropdown">
                <button class="dropbtn">Login Avtivities
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="Registration&Login/Login/index.php">Login</a>
                    <a href="Registration&Login/Registeration/index.php">Register</a>
                    <a href="http://localhost/CarDealer/Registration&Login/ForgotU&P/index.php">Forgot Username or
                        Password</a>
                </div>
            </div><?php }?>
            <div class="date" id="datetime"></div>

        </div>

    </div>
    <div class="div2">
    </div>

    <div style="background-image: url(Home/homeimage/road.jpg); height: 30%; width: 100%;">
        <h1 class="fonting">SERVICES</h1>
        <table style="width: 100%;height: 350px;">
            <tr>
                <td>
                    <img src=" Home/homeimage/repair.png" alt="">
                </td>
                <td>
                    <img src="Home/homeimage/repair.png" alt="">
                </td>
                <td>
                    <img src="./Home/homeimage/repair.png" alt="">
                </td>

            </tr>
            <tr style="width: 100%; height: 350px;">
                <td>
                    <h1 class="fonting">REPAIRS</h1>
                    <p class="fonting">General Repairs,<br>Specialist Repairs,<br>& Vintage Repairs</p>
                </td style="width: 60%; height: 80%;">
                <td>
                    <h1 class="fonting">UPHOLSTERS</h1>
                    <p class="fonting">A Range of Fabrics,<br>Including Vintage Leathers,<br>& Wide Variety of
                        Colors.
                    </p>
                </td style="width: 60%; height: 80%;">

                <td style="width: 60%; height: 80%;">
                    <h1 class="fonting">PAINTWORK</h1>
                    <p class="fonting">Spray Paint, Custom<br>Stenciling & Variety of<br>Custom Made ArtWork.
                    </p>
                </td>

            </tr>
        </table>
    </div>
    <div class="div3">
        <h1 style="color: grey;padding-bottom: 60px; text-align: center;">OUR WORK</h1>
        <p style="    padding-bottom: 70px;color: grey;text-align: center;">A collection of cars we' ve renovated with
            passion.</p>
        <div class="fade-in">
            <img class="contain" src="./Home/homeimage/gallery1.jpg" alt=""><img class="contain"
                src="./Home/homeimage/gallery2.jpg" alt=""><img class="contain" src="./Home/homeimage/gallery3.jpg"
                alt="">
            <img class="contain" src="./Home/homeimage/gallery4.jpg" alt=""><img class="contain"
                src="./Home/homeimage/gallery5.jpg" alt=""><img class="contain" src="./Home/homeimage/gallery6.jpg"
                alt="">
            <div style="padding-bottom: 100px;"></div>
        </div>
    </div>
    <div class="div5">
        <div style="background-color: white; height: 20%; width: 40%; text-align:centre; margin-left:32%">
            <h1 style="color: black;padding-bottom: 60px; text-align: center; margin-top: 0; ">About Us</h1>
            <p style="    padding-bottom: 70px;color: grey;text-align: center;">I'm a paragraph. Click here
                to
                add
                your
                own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own
                content
                and
                make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m
                a
                great
                place for you to tell a story and let your users know a little more about you.

                ​

                This is a great space to write long text about your company and your services. You can use
                this
                space to
                go into a little more detail about your company. Talk about your team and what services you
                provide.
            </p>
        </div>
        <img src="./Home/homeimage/car.png" style="height: 200px; width: 20%; margin-left: 42%; margin-top: 15%;">

        <div class="div5">
            <div style="background-color: white; height: 500px; width: 30%; margin-left: 37%;">
                <h1 style="color: black;padding-bottom: 20px; text-align: center; margin-top: 0; ">Contact
                    Us
                </h1>

                <form id="contactform" action="./Home/php/contact.php" method="POST">
                    <table>
                        <tr style="height: 400px;">
                            <td>
                                <p>500 Terry Francois Street<br>
                                    San Francisco, CA 94158</p>
                                <p>info@mysite.com</p>

                                <br>
                                <p>Tel: 123-456-7890</p>

                                <p>OPENING HOURS:</p>
                                <p>Mon - Fri: 7am - 10pm<br>

                                    ​​Saturday: 8am - 10pm<br>

                                    ​Sunday: 8am - 11pm
                                </p>

                            </td>

                            <td style="height: 400px;">
                                <label for="fname">First name:</label><br>
                                <input type="text" pattern="[A-Za-z]{0-15}" id="fname" name="fname" value="John"><br>
                                <label for="lname">Last name:</label><br>
                                <input type="text" pattern="[A-Za-z]{0-15}" id="lname" name="lname" value="Doe"><br><br>
                                <label for="email">Email:</label><br>
                                <input type="email" id="email" name=" email" value="Example@gmail.com"><br><br>
                                <label for="message">Message:</label><br>
                                <textarea id="message" name="message" rows="5" cols="40"></textarea><br>
                                <input onclick="myFunction()" name="submit" type="submit" value="submit">
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>


    </div>


</body>
<footer>
    <a href=" https://www.fb.com"><img class=" sociallogo" src="./Home/homeimage/fblogo.png"></a>
    <a href="https://www.instagram.com"><img class="sociallogo" src="./Home/homeimage/instalogo.png"></a>
    <a href="https://www.twitter.com"><img class="sociallogo" src="./Home/homeimage/twitterlogo.png"></a>
</footer>
<script src="Home/js/home.js"></script>

</html>