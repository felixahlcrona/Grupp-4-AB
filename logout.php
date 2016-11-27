<?php
session_start();
unset($_SESSION["Email"]);
session_destroy();  
session_unset();
header("Location: login.php");
?>