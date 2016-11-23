<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registrera</title>
    <link rel="stylesheet" type="text/css" href="app.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script type="text/javascript" src="js/main.js"></script>

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

	   .container {
        border:10px solid #eee;
		background-color:#EDF3F5;
      }
  .clearfix {
        border:1px solid #eee;
		background-color:#EDF3F5;
      }
	  
	  td,th,tr {
    height: 50px;
    vertical-align: bottom;
	 width: 25%;
	 height: 100%;
}


    </style>

  </head>
<body>



  <?php require_once('includes/header.php'); 
session_start();
 $pdo = new PDO('mysql:dbname=Grupp4AB;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
	$pdo->exec("set names utf8");

	 
  ?>

  <div class="clearfix" style="margin-bottom:100px;"></div>
  <div class="container">
  

  <br>
  <h3>Mina sidor</h3>
  <ul class="nav nav-pills nav-justified">
   <li><a href="mina_sidor.php">Ändra Kontouppgifter</a></li>
    <li><a href="minaköp.php">Mina Köp</a></li>
    <li class="active"><a href="Tävlingsstatistik.php">Tävlingsstatistik</a></li>
    <li><a href="#">Menu 3</a></li>
  </ul>
</div>
  <div class="container">
  
  
            <form class="form-horizontal" role="form" action="minasidor.php" method="post" id="contact-form" name="myForm" onsubmit="return validateForm()">
                <h2 class="reg-text">Tävlingstatistik över Skidloppet 2016</h2>
        
        <?php  
         	 echo "<table border='1'>";
	
	

echo "<tr style='background-color:grey; font-size: 30px;'>";
    echo "<th>Förnamn</th>";
	echo "<th>Efternamn</th>";
   echo "<th>Klubbnamn</th>";
   echo "<th>Snittfart</th>";
     echo "<th style='background-color:#dce25a;'>Resultat</th>";
echo "</tr>";



	 foreach($pdo->query( 'Select * from Deltagare,Kund where Kund.KundID=Deltagare.KundID order by Resultat ASC' ) as $row){
      echo "<tr style='background-color:lightblue; font-size: 20px;'>";
      echo "<td> ".$row['Fornamn']."</td>";
      echo "<td> ".$row['Efternamn']."</td>";  
      echo "<td> ".$row['Klubbnamn']."</td>"; 
	  echo "<td> ".$row['Snittfart']." km/h</td>"; 
      echo "<td style='background-color:#dce25a;'>".$row['Resultat']."</td>";      
      echo "</tr>";     
	  
	   

    }
		echo "</table>";
		
        ?>
		
		
</form> <!-- /form -->
    </div> <!-- ./container -->
</body>
</html>