<?php
//    $currentDirectory = getcwd();

    $uploadDirectory = "../../../Home/homeimage/";

  
    if (isset($_POST['submit'])) {

        $fileExt = ['jpeg','jpg','png']; // These will be the only file extensions allowed 
        $fileName = $_FILES['imgfile']['name'];
        $fileSize = $_FILES['imgfile']['size'];
        $fileTmpName  = $_FILES['imgfile']['tmp_name'];
        $fileType = $_FILES['imgfile']['type'];
        $tmp = explode('.', $fileName);
        $fileExtension = end($tmp);
        $uploadPath = $uploadDirectory . basename($fileName); 
        
        $newFileName = $uploadDirectory.substr($fileName, 0, strrpos($fileName, '.')).".txt";
        $newFileContent = $_POST['explain'];

        // file_put_contents($old, $_POST['explain']);
        // rename($old,$uploadDirectory. pathinfo(basename($fileName), PATHINFO_FILENAME).".txt");
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
        if ($didUpload && file_put_contents($newFileName, $newFileContent)) {
            $dbhost = "127.0.0.1:3308";
            $dbuser = "root";
            $dbpass = "password";
            
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