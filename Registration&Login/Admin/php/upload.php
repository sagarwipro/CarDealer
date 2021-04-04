<?php
//    $currentDirectory = getcwd();

    $uploadDirectory = "../../../Home/homeimage/";

  
    $fileExt = ['txt']; // These will be the only file extensions allowed 
    $fileName = $_FILES['textFile']['name'];
    $fileSize = $_FILES['textFile']['size'];
    $fileTmpName  = $_FILES['textFile']['tmp_name'];
    $fileType = $_FILES['textFile']['type'];
    $tmp = explode('.', $fileName);
    $fileExtension = end($tmp);
    $uploadPath = $uploadDirectory . basename($fileName); 
    $txt=basename($fileName);
    if (isset($_POST['submit'])) {

        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
        $old = $uploadPath;
        $fileExt = ['jpeg','jpg','png']; // These will be the only file extensions allowed 
        $fileName = $_FILES['imgfile']['name'];
        $fileSize = $_FILES['imgfile']['size'];
        $fileTmpName  = $_FILES['imgfile']['tmp_name'];
        $fileType = $_FILES['imgfile']['type'];
        $tmp = explode('.', $fileName);
        $fileExtension = end($tmp);
        $uploadPath = $uploadDirectory . basename($fileName); 
        file_put_contents($old, $_POST['explain']);
        rename($old,$uploadDirectory. pathinfo(basename($fileName), PATHINFO_FILENAME).".txt");
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
        if ($didUpload) {
            $dbhost = "127.0.0.1:3308";
            $dbuser = "root";
            $dbpass = "";
            
            $conn = new mysqli($dbhost, $dbuser, $dbpass,"cardealer") or die("Connect failed: %s\n". $conn -> error);
            
                $fileName=basename($fileName);
                $place = $_POST['place'];
                $date = $_POST['date'];
                $sql = "INSERT INTO `events`(`imgAddr`, `des`, `date`) VALUES ('$fileName','$place','$date')";
                mysqli_select_db($conn,'cardealer');
                $result =  mysqli_query( $conn,$sql);
                    echo '<script language="javascript">';
                    echo 'alert("Added Successfully.");';
                    echo 'window.location.href="http://localhost/CarDealer/Registration&Login/Admin/adminportal.php";';
                    echo '</script>';
            }   
        }
                else {
          echo "An error occurred. Please contact the administrator.";
        }
 
?>