<?php

require_once('db.php');
require_once('includes/init.php');


if($_SESSION['active'] == 1) {
	header('Location: mina_sidor.php');
}


if(!empty($_GET['hash'])) {

$hash = $_GET['hash'];

$result = mysqli_fetch_array(mysqli_query($db, "SELECT active FROM Kund WHERE active = '$hash'"));

$active = $result['active'];

if($hash == $active) {
	mysqli_query($db, "UPDATE Kund SET active = '1' WHERE active = '$hash'");
	header('Location: login.php');
} else {
	echo 'Fel vid aktivering av konto';
}

} else {
	echo 'Var vänlig aktivera ditt konto genom att logga in på din mail address och klicka på aktiverings länken!';
}





?>
