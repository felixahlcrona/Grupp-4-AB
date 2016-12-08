<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../app.css">
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



    </style>

  </head>
  <body>
    <!-- Header -->

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


    <!-- End of header -->

    <!-- Slideshow -->

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="bilder/morkt.jpg" alt="...">
      <div class="carousel-caption">
        <h3 style="font-size:38px;">Exskidloppet</h3>
        <p style="font-size:25px;">Do not forget to register for our exclusive ski race</p>
      </div>
    </div>
    <div class="item">
      <img src="bilder/grabbarnacykla.jpg" alt="...">
      <div class="carousel-caption">
        <h3 style="font-size:38px;">Halvbocken</h3>
        <p style="font-size:25px;">Sign up for our unbeatable bicycle races</p>
      </div>
    </div>
   <div class="item">
      <img src="bilder/skoog.jpg" alt="...">
      <div class="carousel-caption">
        <h3 style="font-size:38px;">Bockstensloppet</h3>
        <p style="font-size:25px;">Explore the beautiful countryside on our summer competitions</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div class="clearfix" style="margin-bottom:50px;"></div>
    <div class="container">
    <!-- End of slideshow -->
      <div class="row marketing">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <img src="bilder/webb.png" alt="" class="img-circle"/>
          <h2>Webshop</h2>
          <p>Don't forget to visit our webshop incase you forgot to buy something.</p>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
          <img src="bilder/sseervice.png" alt="" class="img-circle"/>
          <h2>Organizer</h2>
          <p>The people at Skidloppet AB are always working hard to give you competitors the best experience possible.</p>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
          <img src="bilder/teest.png" alt="" class="img-circle"/>
          <h2>Event</h2>
          <p>We have alot of events all season around. Dont forget to book your event and buy all the nessecarities for your event</p>
          <a href="#" class="btn btn-primary">Book here</a>
        </div>

      </div>
    <!-- Marketing -->


    
    <!-- End of marketing -->

    <hr class="divider">


    <footer>
      <p class="pull-right"><a href="#">To the top</a></p>
      <p>Designed by Grupp 4 AB. <a href="#">Privacy</a>. <a href="#">Terms</a></p>
    </footer>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>