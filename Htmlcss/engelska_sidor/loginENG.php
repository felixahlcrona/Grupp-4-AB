<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
  <title>Log in</title>
  <link rel="stylesheet" type="text/css" href="../app.css">
   <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  <style type="text/css">

  .wrapper {    
  margin-top: 80px;
  margin-bottom: 20px;
}

.form-signin {
  max-width: 420px;
  padding: 30px 38px 66px;
  margin: 0 auto;
  background-color: #eee;
  border: 3px dotted rgba(0,0,0,0.1);  
  }

.form-signin-heading {
  text-align:center;
  margin-bottom: 30px;
}

.form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
}

input[type="text"] {
  margin-bottom: 0px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}


  </style>


</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
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
      <li><a href="registreraENG.php"><span class="glyphicon glyphicon-user"></span>Register</a></li>
      <li><a href="loginENG.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
      <li><a href="engelskHem.php"><img src="bilder/english.png"/></a></li>
      <li><a href="../index.php"><img src="bilder/sv.png"/></a></li>
    </ul>
  </div>
	</nav>

  <div class="clearfix" style="margin-bottom:150px;"></div>

 <div class = "container">
  <div class="wrapper" style="width:45%; margin:0 auto;">
    <form action="" method="post" name="Login_Form" class="form-signin">       
        <h3 class="form-signin-heading">Welcome back! Log in</h3>
        
        <input type="text" class="form-control" name="Username" placeholder="Användarnamn" required="" autofocus="" />
        <input type="password" class="form-control" name="Password" placeholder="Lösenord" required=""/>          
       
        <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Log in</button> 
        <a href="#" class="forgot-password" style="margin-top:20px; text-align: center;">
                Forgot your password?
            </a>       
    </form>     
  </div>
</div>


</body>
</html>