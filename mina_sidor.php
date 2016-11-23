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


    </style>

  </head>
<body>



  <?php require_once('includes/header.php'); 
session_start();

  ?>
<?php    
 $pdo = new PDO('mysql:dbname=Grupp4AB;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
	$pdo->exec("set names utf8");
  $sqlkod = "UPDATE Kund SET Gatunamn = :Gatunamn, Postort =:Postort, Postnummer =:Postnummer, Klubbnamn =:Klubbnamn WHERE Email = :Email";
	  $pdo = $pdo->prepare($sqlkod);   
$pdo->bindParam(':Email', $_POST['Email'], PDO::PARAM_INT);
$pdo->bindParam(':Gatunamn', $_POST['Gatunamn'], PDO::PARAM_INT);
$pdo->bindParam(':Postort', $_POST['Postort'], PDO::PARAM_INT);
$pdo->bindParam(':Postnummer', $_POST['Postnummer'], PDO::PARAM_INT);
$pdo->bindParam(':Klubbnamn', $_POST['Klubbnamn'], PDO::PARAM_INT);
$pdo->bindParam(':Email', $_POST['Email'], PDO::PARAM_INT); 

$pdo->execute();    

	 
?>


  <div class="clearfix" style="margin-bottom:100px;"></div>
  <div class="container">
  

  <br>
  <h3>Mina sidor</h3>
  <ul class="nav nav-pills nav-justified">
    <li class="active"><a href="#">Ändra Kontouppgifter</a></li>
    <li><a href="minaköp.php">Mina Köp</a></li>
    <li><a href="Tävlingsstatistik.php">Tävlingsstatistik</a></li>
    <li><a href="#">Menu 3</a></li>
  </ul>
</div>
  <div class="container">
  
  
            <form class="form-horizontal" role="form" action="mina_sidor.php" method="post" id="contact-form" name="myForm" onsubmit="return validateForm()">
                <h2 class="reg-text">Ändra Kontouppgifter</h2>
        
           <div class="form-group">
                    <label for="Email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                     <?php echo '<input required  type = "text" class ="form-control" name = "Email" value="'.$_SESSION["Email"].'" />'?>

						
                    </div>
                </div>
                <div class="form-group">
                    <label for="Email" class="col-sm-3 control-label">Gatunamn</label>
                    <div class="col-sm-9">
                     <?php echo '<input required  type = "text" class ="form-control" name = "Gatunamn" value="'.$_SESSION["Gatunamn"].'" />'?>

						
                    </div>
                </div>

                <div class="form-group">
                    <label for="Fornamn" class="col-sm-3 control-label">Postort</label>
                    <div class="col-sm-9">
                             <?php echo '<input required  type = "text" class ="form-control" name = "Postort" value="'.$_SESSION["Postort"].'" />'?>
						
                    </div>
                </div>
				
				 <div class="form-group">
                    <label for="Efternamn" class="col-sm-3 control-label">Postnummer</label>
                    <div class="col-sm-9">
                             <?php echo '<input required  type = "text" class ="form-control" name = "Postnummer" value="'.$_SESSION["Postnummer"].'" />'?>
						
                    </div>
                </div>
      <div class="form-group">
                    <label for="Efternamn" class="col-sm-3 control-label">Klubbnamn</label>
                    <div class="col-sm-9">
                             <?php echo '<input required  type = "text" class ="form-control" name = "Klubbnamn" value="'.$_SESSION["Klubbnamn"].'" />'?>
						
                    </div>
                </div>
  
  <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Uppdatera</button>
                    </div>
                </div>

        
</form> <!-- /form -->
    </div> <!-- ./container -->
</body>
</html>