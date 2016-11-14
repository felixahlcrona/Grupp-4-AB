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



    </style>

  </head>
<body>

  <?php require_once('includes/header.php'); ?>

  <div class="clearfix" style="margin-bottom:100px;"></div>
  <div class="container">
            <form class="form-horizontal" role="form" action="registrera.php" method="post" id="contact-form" name="myForm" onsubmit="return validateForm()">
                <h2 class="reg-text">Registrera dig hos oss redan idag</h2>
        
        
                <div class="form-group">
                    <label for="Fornamn" class="col-sm-3 control-label">Förnamn</label>
                    <div class="col-sm-9">
                        <input type="text" id="Fornamn" name="Fornamn" placeholder="Förnamn" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Efternamn" class="col-sm-3 control-label">Efternamn</label>
                    <div class="col-sm-9">
                        <input type="text" id="Efternamn" name="Efternamn" placeholder="Efternamn" class="form-control">
                    </div>
                </div>
        
         <div class="form-group">
                    <label for="Fodelsedatum" class="col-sm-3 control-label">Födelsedatum</label>
                    <div class="col-sm-9">
                        <input type="text" id="Fodelsedatum" name="Fodelsedatum" placeholder="ex. 19951014-5593" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" id="Email" name="Email" placeholder="Email" class="form-control">
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="Klubbnamn" class="col-sm-3 control-label">Klubbnamn</label>
                    <div class="col-sm-9">
                      <input type="text" id="Klubbnamn" name="Klubbnamn" placeholder="Klubbnamn" class="form-control">
                    </div>
                </div> 

                <div class="form-group">
                    <label for="Gatunamn" class="col-sm-3 control-label">Gatunamn</label>
                    <div class="col-sm-9">
                        <input type="text" id="Gatunamn" name="Gatunamn" placeholder="Gatunamn" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Postort" class="col-sm-3 control-label">Postort</label>
                    <div class="col-sm-9">
                        <input type="text" id="Postort" name="Postort" placeholder="Postort" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Postnummer" class="col-sm-3 control-label">Postnummer</label>
                    <div class="col-sm-9">
                        <input type="text" id="Postnummer" name="Postnummer" placeholder="Postnummer" class="form-control" autofocus>
                    </div>
                </div>
               
                 <div class="form-group">
                    <label for="Losenord" class="col-sm-3 control-label">Lösenord</label>
                    <div class="col-sm-9">
                        <input type="password" id="Losenord" name="Losenord" placeholder="Lösenord" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="beklosenord" class="col-sm-3 control-label">Bekräfta lösenord</label>
                    <div class="col-sm-9">
                        <input type="password" id="beklosenord" name="beklosenord" class="form-control">
                    </div>
                </div>


                 <div class="form-group">
                   <label for="nyhetsbrev" class="col-sm-3 control-label">Vill du ha nyhetsbrev?</label>
                   <div class="col-sm-9">
                   <input type="checkbox"  name="nyhetsbrev" id="nyhetsbrev"> 
                   </div>                  
                    </div>
               
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Registrera</button>
                    </div>
                </div>

                 
<?php
include("db.php");
  if(isset($_POST['Fornamn'])) {
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$Fornamn=mysqli_real_escape_string($db,$_POST['Fornamn']);
$Efternamn=mysqli_real_escape_string($db,$_POST['Efternamn']); 
$Fodelsedatum=mysqli_real_escape_string($db,$_POST['Fodelsedatum']);
$Email=mysqli_real_escape_string($db,$_POST['Email']);
$Klubbnamn=mysqli_real_escape_string($db,$_POST['Klubbnamn']);
$Gatunamn=mysqli_real_escape_string($db,$_POST['Gatunamn']);
$Postort=mysqli_real_escape_string($db,$_POST['Postort']);
$Postnummer=mysqli_real_escape_string($db,$_POST['Postnummer']);
$Losenord=mysqli_real_escape_string($db,$_POST['Losenord']);
$confirmPassword = mysqli_real_escape_string($db, $_POST['beklosenord']);
$Losenord=md5($Losenord); // Encrypted Password

$sql="INSERT INTO Kund (Fornamn,Efternamn,Fodelsedatum,Email,Klubbnamn,Gatunamn,Postort,Postnummer,Losenord) VALUES('$Fornamn','$Efternamn','$Fodelsedatum','$Email','$Klubbnamn','$Gatunamn','$Postort','$Postnummer','$Losenord');";
$result=mysqli_query($db,$sql);
echo "Registration Successfully";
  }}
?>
        
</form> <!-- /form -->
    </div> <!-- ./container -->
</body>
</html>