<?php
session_start();
unset($_SESSION["Email"]);  
session_unset();
header("Location: login.php");
?>