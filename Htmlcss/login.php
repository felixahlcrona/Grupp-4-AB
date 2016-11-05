<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Skidloppet AB</title>

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
      <a class="navbar-brand" href="index.html">Skidloppet AB</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Hem</a></li>
      <li><a href="#">Boka Evenemang</a></li>
      <li><a href="webshop.html">Webshop</a></li> 
      <li><a href="Kontakt.html">Kontakt</a></li> 
      <li><a href="#">Galleri</a></li> 
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="registrera.php"><span class="glyphicon glyphicon-user"></span>Registrera dig</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logga in</a></li>
    </ul>
  </div>
	</nav>

  <div class="clearfix" style="margin-bottom:150px;"></div>

 <div class = "container">
  <div class="wrapper" style="width:45%; margin:0 auto;">
    <form action="" method="post" name="Login_Form" class="form-signin">       
        <h3 class="form-signin-heading">Välkommen tillbaka! Logga in</h3>
        
        <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
        <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>          
       
        <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Logga in</button> 
        <a href="#" class="forgot-password" style="margin-top:20px; text-align: center;">
                Forgot the password?
            </a>       
    </form>     
  </div>
</div>


</body>
</html>