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
    <link rel="stylesheet" type="text/css" href="../css/main.css?ver=<?php echo rand(111,999)?>">
    <link rel="stylesheet" type="text/css" href="../css/table.css?ver=<?php echo rand(111,999)?>">
    <?php include '../../../Home/php/operation.php';?>
    <?php include 'removeEvent.php';?>
</head>

<body>
    <div>
        <?php if(isset($message)) { echo $message; } ?>

        <div class="fixed">
            <div class="navbar">
                <div class="dropdown">
                    <button class="dropbtn">Events
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <form method="post" action="php/removeEvent.php">
                            <input type="submit" id="delete" name="delete" value="Delete" />
                            <table>
                                <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                                <tr>
                                    <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN-->
                                    <th> Select events</th>
                                    <th></th>
                                    <th>Description</th>
                                    <th>Date</th>
                                </tr>

                                <?php   // LOOP TILL END OF DATA  
                while($rows=$retval->fetch_assoc()) 
                { 
                    $image = $rows['imgAddr'];
                    $image_src = "../../../Home/homeimage/".$image;
             ?>
                                <tr>
                                    <td class="checkbox">
                                        <input name="check[]" type="checkbox" value="<?php echo $rows['ID']; ?>">
                                    </td>
                                    <td style="height: 10px; width:130px"><a
                                            href="http://localhost/CarDealer/Events/process.php?id=<?php echo $rows['ID'] ?>">
                                            <img style=" height: 80px; width:130px;" src='<?php echo $image_src;  ?>'>
                                        </a>
                                    </td>
                                    <td style="height: 10px; width:130px"><a href=""><?php echo $rows['des'];?>
                                        </a></td>
                                    <td style="height: 10px; width:130px"><a href=""><?php echo $rows['date'];?></a>
                                    </td>
                                </tr>
                                <?php 
                } 
             ?>
                                </p>


                            </table>
                        </form>
                    </div>
                </div>
                <a href="http://localhost/CarDealer/Registration&Login/Login/logout.php">Logout </a>
                <a href="Registration&Login/Login/index.php">Welcome <?php echo $_SESSION['name']?></a>
                <div class="date" id="datetime"></div>

            </div>

        </div>
    </div>

    <!-- PHP CODE TO FETCH DATA FROM ROWS-->
    <form style="margin-top:70px; display:inline-block; text-align:centre;" action="upload.php" method="post"
        enctype="multipart/form-data">
        <label style="color:white;">Upload an Image:</label>
        <input type="file" name="imgfile" id="IfileToUpload"><br><br>
        <label style="color:white;">Upload a text file for description:</label>
        <input type="file" name="textFile" id="TfileToUpload"><br><br>
        <input type="text" name="place" id="place" placeholder="Place"><br><br>
        <input type="date" name="date" id="date"><br><br>
        <textarea name="explain" rows=15; cols=30;></textarea><br><br>
        <input type="submit" value="Submit" name="submit"><br>
    </form>

    <br>


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
<script src="../js/reply.js"></script>

</html>