<?php
session_start();
unset($_SESSION["name"]);
header("Location: http://localhost/CarDealer/Registration&Login/Login/index.php");
?>