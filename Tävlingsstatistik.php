<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Framsida</title>
    <link rel="stylesheet" type="text/css" href="app.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
		.marketing {
			text-align: center;
			margin-bottom:20px;
	}
		.divider {
			margin:80px 0;
	}
		hr {
			border:1px solid #eee;
	}
	  
		input[type=text] {
		width: 370px;
		box-sizing: border-box;
		border: 2px solid #ccc;
		border-radius: 4px;
		font-size: 16px;
		background-color: white;
		background-position: 10px 10px; 
		background-repeat: no-repeat;
		padding: 12px 20px 12px 40px;
		-webkit-transition: width 0.4s ease-in-out;
		transition: width 0.4s ease-in-out;
	}

		input[type=text]:focus {
		width: 35%;
	}
	
	#statistik {
		border: 2px solid black;
		width: 65%;
		border-collapse: collapse;
		text-align: left;	
		font-size: 18px;
	}
	
	td {
		border-bottom: 1px solid #ddd;
		padding-top: 15px;
		padding-bottom: 15px;
	}
	
	tr:hover {
		background-color: #f5f5f5
	}
	
	form{
		padding-top:50px;
	}
	  
    </style>

  </head>
  <body>


    <!-- Header -->

   <?php require_once('includes/header.php'); ?>

    <!-- End of header -->

    
    <!-- Tävlingsstatistik -->

    <p style="font-size: 30px" "font-weight: bold";>Sök på tävlingsstatistik</p>

	<form method="post">
	  <input type="text" name="Sok" placeholder="Sök på deltagare eller evenemangsnamn">
	</form>
	
	<br><br>
	
	<table id="statistik">

	<?php

	$pdo = new PDO('mysql:dbname=Grupp4AB; host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
	$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

		

		
		if (isset($_POST['Sok'])){
				$Sok=$_POST['Sok'];
				
				
				$sql = 'SELECT * FROM Kund,Evenemang,Deltagare WHERE Kund.KundID=Deltagare.KundID AND Deltagare.EvenemangsID=Evenemang.EvenemangsID and( Kund.Fornamn=:Fornamn or Kund.Efternamn=:Efternamn or Evenemang.Tavlingsnamn=:Tavlingsnamn);';
				
				$stmt = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
				$stmt->bindParam(':Fornamn', $Sok);
				$stmt->bindParam(':Efternamn', $Sok);
				$stmt->bindParam(':Tavlingsnamn', $Sok);
				
				$stmt->execute();
				
				echo "<th>Fornamn</th>";
				echo "<th>Efternamn</th>";
				echo "<th>Evenemangsnamn</th>";
				echo "<th>Evenemangsdatum</th>";
				echo "<th>Position</th>";
				echo "<th>Snittfart</th>";
				echo "<th>Totaltid</th>";
				
				foreach($stmt as $key => $row){
					
					echo "<tr>";
					
						echo "<td>".$row['Fornamn']."<td>".$row['Efternamn']."<td>".$row['Tavlingsnamn']."<td>".$row['Datum'];
					
					if (empty($row ['Position'])){
					echo "<td> Position saknas</td> <td>Snittfart saknas</td> <td>Totaltid saknas</td>";
					}
					else{
					echo "<td>".$row['Position']."<td>".$row['Snittfart']."<td>".$row['Totaltid'];
					}
					
					echo "</tr>";

				}
			}

	?>
	

	</table>
	
    <!-- End of tävlingsstatistik -->

    <hr class="divider">


    <footer>
      <p class="pull-right"><a href="#">Till toppen</a></p>
      <p>Designad av Grupp 4 AB. <a href="#">Privat</a>. <a href="#">Termer</a></p>
    </footer>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>



  </body>
</html>