<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Skidloppet AB</title>
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
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logga in</a></li>
    </ul>
  </div>
	</nav>

  <div class="clearfix" style="margin-bottom:100px;"></div>
  <div class="container">
            <form class="form-horizontal" role="form" action="registrera.php" method="post" id="contact-form">
                <h2 style="text-align:center;">Registrera dig hos oss redan idag</h2>
                <div class="form-group">
                    <label for="fornamn" class="col-sm-3 control-label">Förnamn</label>
                    <div class="col-sm-9">
                        <input type="text" id="fornamn" name="fornamn" placeholder="Förnamn" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="efternamn" class="col-sm-3 control-label">Efternamn</label>
                    <div class="col-sm-9">
                        <input type="text" id="efternamn" name="efternamn" placeholder="Efternamn" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" id="email" name="email" placeholder="Email" class="form-control">
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="Klubbnamn" class="col-sm-3 control-label">Klubbnamn</label>
                    <div class="col-sm-9">
                      <input type="text" id="Klubbnamn" name="Klubbnamn" placeholder="Klubbnamn" class="form-control">
                    </div>
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <label for="Gatunamn" class="col-sm-3 control-label">Gatunamn</label>
                    <div class="col-sm-9">
                        <input type="text" id="Gatunamn" name="Gatunamn" placeholder="Gatunamn" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Postadress" class="col-sm-3 control-label">Postadress</label>
                    <div class="col-sm-9">
                        <input type="text" id="Postadress" name="Postadress" placeholder="Postadress" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Postort" class="col-sm-3 control-label">Postort</label>
                    <div class="col-sm-9">
                        <input type="text" id="Postort" name="Postort" placeholder="Postort" class="form-control" autofocus>
                    </div>
                </div>
               
                 <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Lösenord</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="password" placeholder="Lösenord" class="form-control">
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

                 
            
            </form> <!-- /form -->
        </div> <!-- ./container -->
</body>
</html>