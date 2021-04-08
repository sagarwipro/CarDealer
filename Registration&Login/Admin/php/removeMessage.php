<?php    
if (isset($_POST['remove']) && isset($_POST['check']))

    {
        $dbhost = "127.0.0.1:3308";
        $dbuser = "root";
        $dbpass = "password";
        
        $conn = new mysqli($dbhost, $dbuser, $dbpass,"cardealer") or die("Connect failed: %s\n". $conn -> error);
        foreach($_POST['check'] as $del_id)
		{
			$sql = "DELETE FROM messages WHERE ID=".$del_id;
            $conn -> query($sql);
        }
        if ($conn->affected_rows>0)  {
            echo '<script language="javascript">';
            echo 'alert("Deleted succefully.");';
          echo 'window.location.href="http://localhost/CarDealer/Registration&Login/Admin/adminportal.php";';
          echo '</script>';
                    }
           else {
          
            echo '<script language="javascript">';
            echo 'alert("Ops something went wrong.'.$del_id.'");';
            echo 'window.location.href="http://localhost/CarDealer/Registration&Login/Admin/adminportal.php";';
              echo '</script>';
                }
	} 
    if (isset($_POST['delete']) && !isset($_POST['check'])){
        echo '<script language="javascript">';
        echo 'alert("No recoed selected.");';
        echo 'window.location.href="http://localhost/CarDealer/Registration&Login/Admin/adminportal.php";';
        echo '</script>';

    }
    
    ?>