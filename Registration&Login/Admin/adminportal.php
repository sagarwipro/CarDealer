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
    <link rel="stylesheet" type="text/css" href="css/main.css?ver=<?php echo rand(111,999)?>">
    <link rel="stylesheet" type="text/css" href="css/table.css?ver=<?php echo rand(111,999)?>">
    <?php include 'php/removeEvent.php';?>
    <?php include 'php/messages.php';?>
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
                            <input type="button" value="Add" onclick="add()" />
                            <table>
                                <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                                <tr>
                                    <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN-->
                                    <th> Select events</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                </tr>

                                <?php   // LOOP TILL END OF DATA  
                while($rows=$retval->fetch_assoc()) 
                { 
                    $image = $rows['imgAddr'];
                    $image_src = "../../Home/homeimage/".$image;
             ?>
                                <tr>
                                    <td class="checkbox">
                                        <input name="check[]" type="checkbox" value="<?php echo $rows['ID']; ?>">
                                    </td>
                                    <td><a
                                            href="http://localhost/CarDealer/Events/process.php?id=<?php echo $rows['ID'] ?>">
                                            <img style=" height: 80px; width:130px;" src='<?php echo $image_src;  ?>'>
                                        </a>
                                    </td>
                                    <td><a href=""><?php echo $rows['des'];?>
                                        </a></td>
                                    <td><a href=""><?php echo $rows['date'];?></a>
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

    <table>
        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
        <th colspan='6' ; style="width: 100%;">Message Recieved</th>
        <tr>
            <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN-->
            <th> Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Status</th>
            <th>Action</th>
            <th>
                <form method="post" action="php/removeMessage.php">
                    <input type="submit" id="remove" name="remove" value="Remove" />
            </th>
        </tr>

        <?php   // LOOP TILL END OF DATA  
            
            while($messageTable=$result->fetch_assoc()) 
                { 
             ?>
        <tr>
            <td style="height: 10px; width:130px">
                <?php echo $messageTable['name'] ?>
            </td>
            <td><?php echo $messageTable['email'] ?>
            </td>
            <td><?php echo $messageTable['message'] ?>
            </td>
            <td><?php echo $messageTable['status'] ?>
            </td>
            <td>
                <input type="button" value="Reply" onclick=" reply(<?php echo $messageTable['ID'] ?>);" />
            </td>
            <td class=" checkbox">
                <input name="check[]" type="checkbox" value="<?php echo $messageTable['ID']; ?>">
            </td>
        </tr>

        <?php 
                } 
             ?>
        </p>


    </table>
    </form>

    <br>

    <div style="display:none;" id="response">
        <form>
            <input style="width:30px" type="text" id="IDForReply" readonly />
            <textarea style="vertical-align:middle" placeholder="Reply here" id="responseMessage" name="responseMessage"
                rows="4" cols="50"></textarea>
            <input type="button" value="Submit" onclick=" responseFunc();" />
        </form>
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
<script src="js/reply.js"></script>

</html>