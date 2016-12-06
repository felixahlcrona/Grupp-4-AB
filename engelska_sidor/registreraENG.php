<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="../app.css">
   <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" style="background: #EDF3F5;">
    <div class="navbar-header">
      <a class="navbar-brand" href="engelskHem.php">Skidloppet AB</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="engelskHem.php">Home</a></li>
      <li><a href="#">Book Event</a></li>
      <li><a href="webshopENG.php">Webshop</a></li>
      <li><a href="contactENG.php">Contact</a></li>  
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="registrera.php"><span class="glyphicon glyphicon-user"></span>Register</a></li>
      <li><a href="loginENG.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
      <li><a href="engelskHem.php"><img src="bilder/english.png"/></a></li>
      <li><a href="../index.php"><img src="bilder/sv.png"/></a></li>
    </ul>
  </div>
  </nav>

  <div class="clearfix" style="margin-bottom:100px;"></div>
  <div class="container">
            <form class="form-horizontal" role="form" action="registreraENG.php" method="post" id="contact-form">
                <h2 class="reg-text">Sign up a free account today!</h2>
        
        
                <div class="form-group">
                    <label for="Fornamn" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="Fornamn" name="Fornamn" placeholder="First name" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Efternamn" class="col-sm-3 control-label">Last name</label>
                    <div class="col-sm-9">
                        <input type="text" id="Efternamn" name="Efternamn" placeholder="Last name" class="form-control">
                    </div>
                </div>
        
         <div class="form-group">
                    <label for="Fodelsedatum" class="col-sm-3 control-label">Date of birth</label>
                    <div class="col-sm-9">
                        <input type="text" id="Fodelsedatum" name="Fodelsedatum" placeholder="Date of birth" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" id="Email" name="Email" placeholder="Email" class="form-control">
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="Klubbnamn" class="col-sm-3 control-label">Club name</label>
                    <div class="col-sm-9">
                      <input type="text" id="Klubbnamn" name="Klubbnamn" placeholder="Clubname" class="form-control">
                    </div>
                </div> 

                <div class="form-group">
                    <label for="Gatunamn" class="col-sm-3 control-label">Street name</label>
                    <div class="col-sm-9">
                        <input type="text" id="Gatunamn" name="Gatunamn" placeholder="Street name" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Postort" class="col-sm-3 control-label">Postal area</label>
                    <div class="col-sm-9">
                        <input type="text" id="Postort" name="Postort" placeholder="Postal area" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Postnummer" class="col-sm-3 control-label">Postcode</label>
                    <div class="col-sm-9">
                        <input type="text" id="Postnummer" name="Postnummer" placeholder="Post code" class="form-control" autofocus>
                    </div>
                </div>
               
                 <div class="form-group">
                    <label for="Losenord" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="Losenord" id="Losenord" name="Losenord" placeholder="Password" class="form-control">
                    </div>
                </div>

                 <div class="form-group">
                    <label for="confirmLosenord" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="confirmLosenord" id="confirmLosenord" name="confirmLosenord" class="form-control">
                    </div>
                </div>


                 <div class="form-group">
                   <label for="nyhetsbrev" class="col-sm-3 control-label">Do you want newsletter?</label>
                   <div class="col-sm-9">
                   <input type="checkbox"  name="nyhetsbrev" id="nyhetsbrev"> 
                   </div>                  
                    </div>
               
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
 <!-- /form -->
    </div> <!-- ./container -->
</body>
</html>