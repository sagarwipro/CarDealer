<?php
    $uploadDirectory = "../../../Home/homeimage/";

if (isset($_POST['delete']) && isset($_POST['check']))

    {
        $dbhost = "127.0.0.1:3308";
        $dbuser = "root";
        $dbpass = "";
        
        $conn = new mysqli($dbhost, $dbuser, $dbpass,"cardealer") or die("Connect failed: %s\n". $conn -> error);
        foreach($_POST['check'] as $del_id)
		{    
         	$sql = "Select * FROM events WHERE ID=".$del_id;
            $result = $conn->query($sql);
            $name="";
                // output data of each row
                while($row = $result->fetch_assoc()) {

                  $Path = $uploadDirectory.$row['imgAddr']; 
                  $text=$uploadDirectory.$row['imgAddr'];
                  $from=substr($text, 0, (strlen ($text)) - (strlen (strrchr($text,'.'))));
                  //$text=pathinfo($row['imgAddr'], PATHINFO_FILENAME).".txt";        
                  unlink($path);
                  $file_pointer1 = $uploadDirectory.$text;
                  unlink($file_pointer1);    
        }
    }
    echo '<script language="javascript">';
    echo 'alert("Deleted from local host.");';
    echo '</script>';
    header("http://localhost/CarDealer/Registration&Login/Admin/php/removeEvent.php?check=$ids");   
}?>