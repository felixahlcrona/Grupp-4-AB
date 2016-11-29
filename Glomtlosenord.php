<?php


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>

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

 h2.reg-text
	  {
		  padding-right:120px;
	  }

    </style>

  </head>
<body background="bilder/registrera.jpg">

  <?php require_once('includes/header.php'); ?>

  <div class="clearfix" style="margin-bottom:100px;"></div>
  <div class="container">
            <form class="form-horizontal" role="form" action="Glomtlosenord.php" method="post" id="contact-form" name="myForm" onsubmit="return validateForm()">
                <h2 class="reg-text">Efterfråga nytt lösenord</h2>
        
        
                <div class="form-group">
                    <label for="Email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" id="Email" name="Email" placeholder="Email" class="form-control">
                    </div>
                </div>
				
				 <div class="form-group">
                    <label for="Losenord" class="col-sm-3 control-label">Nytt Lösenord</label>
                    <div class="col-sm-9">
                        <input type="text" id="Losenord" name="Losenord" placeholder="Lösenord" class="form-control">
                    </div>
					 
                </div>

				
				<div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-success btn-block">Skicka nytt lösenord</button>
                    </div>
                </div>
           

                 
<?php
include("db.php");
if(isset($_POST['Email'])) {
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form

$Email=mysqli_real_escape_string($db,$_POST['Email']);
$Losenord=mysqli_real_escape_string($db,$_POST['Losenord']);
$Losenord=md5($Losenord);
$active=mysqli_real_escape_string($db,generateRandomString(20));
 // Encrypted Password

$sql=" UPDATE Kund 
                 SET Losenord = '$Losenord',active = '$active' 
               WHERE Email = '$Email'";
$result=mysqli_query($db,$sql);

require_once('class.phpmailer.php');
 require_once('class.smtp.php');
  require_once('class.phpmaileroauthgoogle.php');
  
  
  $body = '
<html>
<body>
<p><img src="bilder/morktEmail.jpg" /></p>
<h1>Hej! Här är ditt nya lösenord du efterfråga<br></h1>



<b>För att aktivera ditt konto var vänlig och klicka på följande länk:</b><br>

http://wwwlab.iit.his.se/a15felah/Grupp-4-AB/activate.php?hash=' .$active.'
<br>

_________________________________________________________________<br><br>
<b>Skidloppet AB</b><br>
<b>Mail:</b> grupp4ab@gmail.com<br>
<b>Telefon:</b> 0156-10432<br>
<b>Stad:</b>Kiruna<br>


</body>
</html>
';
 
    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "grupp4ab@gmail.com";
    $mail->Password = "Grupp4ABpass";
    $mail->SMTPSecure = "ssl";  
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "465";
 
    $mail->setFrom('grupp4ab@gmail.com', 'Skidloppet AB');
    $mail->AddAddress($Email, 'receivers name');
    $mail->MsgHTML($body);
    $mail->Subject  =  'Lösenord '.$Email.'';
    $mail->IsHTML(true);



            

  
     if($mail->Send())
     {
       	echo '<div class="form-group">';
                  echo  '<div class="col-sm-9 col-sm-offset-3">';
				 echo '<img src="bilder/yes.png" align="right" />';
				  echo "<br>Aktivera ditt nya lösenord i din E-post";
                    echo '</div>';
             echo   '</div>';
    
     }
     else
     {
        echo "Mail Error - >".$mail->ErrorInfo;
     }

}}
  
?>
<?php


?>



        
</form> <!-- /form -->

    </div> <!-- ./container -->


        <script type="text/javascript" src="js/main.js"></script>
</body>
</html>