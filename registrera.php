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
<body background="bilder/bakgrund.jpg">

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
                         

<select class="form-control" style="width:20%; margin-right:10px; float:left;" name=year1>
 <option value="" disabled selected hidden>År</option>
  <?php for ($year = 1999; $year > date('Y') -117; $year--) { ?>
	<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
	<?php } ?>
</select>

<select class="form-control" style="width:30%; margin-right:10px; float:left;"name=month1>
 <option value="" disabled selected hidden>Månad</option>
<option value='01'>Januari</option>
<option value='02'>Februari</option>
<option value='03'>Mars</option>
<option value='04'>April</option>
<option value='05'>Maj</option>
<option value='06'>Juni</option>
<option value='07'>Juli</option>
<option value='08'>Augusti	</option>
<option value='09'>September</option>
<option value='10'>Oktober</option>
<option value='11'>November</option>
<option value='12'>December</option>
</select>

<select class="form-control" style="width:20%; " name=day1>
 <option value="" disabled selected hidden>Dag</option>
        <option value="01">1</option>
        <option value="02">2</option>
        <option value="03">3</option>
        <option value="04">4</option>
        <option value="05">5</option>
        <option value="06">6</option>
        <option value="07">7</option>
        <option value="08">8</option>
        <option value="09">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select>
	
	<?php 
if(isset($_POST['year1'],$_POST['month1'],$_POST['day1'])){

$_POST['Fodelsedatum'] = $_POST['year1'] .'-'. $_POST['month1'] .'-'. $_POST['day1']; 
}
?>
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
                   <label for="nyhetsbrev" class="col-sm-3 control-label">Godkänner du <a target="_blank" href="villkor.php">allmänna villkor</a> ?</label>
                   <div class="col-sm-9">
                   <input type="checkbox"  name="nyhetsbrev" id="nyhetsbrev"> 
                   </div>                  
                    </div>
               
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-success btn-block">Registrera</button>
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
$active=mysqli_real_escape_string($db,generateRandomString(20));
$confirmPassword = mysqli_real_escape_string($db, $_POST['beklosenord']);
$Losenord=md5($Losenord); // Encrypted Password

$sql="INSERT INTO Kund (Fornamn,Efternamn,Fodelsedatum,Email,Klubbnamn,Gatunamn,Postort,Postnummer,Losenord,active) VALUES('$Fornamn','$Efternamn','$Fodelsedatum','$Email','$Klubbnamn','$Gatunamn','$Postort','$Postnummer','$Losenord', '$active');";
$result=mysqli_query($db,$sql);

require_once('class.phpmailer.php');
 require_once('class.smtp.php');
  require_once('class.phpmaileroauthgoogle.php');
  
  
  $body = '
<html>
<body>
<p><img src="bilder/morktEmail.jpg" /></p>
<h1>Välkommen '.$Fornamn.' '.$Efternamn.'<br></h1>


Stämmer dina uppgifter? <br><br>

<b>Födelsedatum:</b>'.$Fodelsedatum.'<br>
<b>Email:</b>'.$Email.'<br>
<b>Klubbnamn:</b>'.$Klubbnamn.'<br>
<b>Gatunamn:</b>'.$Gatunamn.'<br>
<b>Postort:</b>'.$Postort.'<br>
<b>Postnummer:</b>'.$Postnummer.'<br>
_________________________________________________________________<br><br>
<b>Skidloppet AB</b><br>
<b>Mail:</b> grupp4ab@gmail.com<br>
<b>Telefon:</b> 0156-10432<br>
<b>Stad:</b>Kiruna<br>
<b>För att aktivera ditt konto var vänlig och klicka på följande länk:</b><br>

http://wwwlab.iit.his.se/a15felah/Grupp-4-AB/activate.php?hash=' .$active.'

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
    $mail->Subject  =  'Välkommen '.$Fornamn.'';
    $mail->IsHTML(true);



            

  
     if($mail->Send())
     {
       	echo '<div class="form-group">';
                  echo  '<div class="col-sm-9 col-sm-offset-3">';
				 echo '<img src="bilder/yes.png" align="right" />';
				  echo "Ditt konto är skapat! <br>Kolla din E-post för mer information";
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