<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cart</title>
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
      <li><a href="engelskHem.php"><img src="bilder/en.png"/></a></li>
      <li><a href="index.php"><img src="bilder/sv.png"/></a></li>
    </ul>
  </div>
  </nav>

    <!-- End of header -->

<!-- Kundvagn -->

<hr class="divider">

    <div class="container">
  <div class="row">
    <div class="col-xs-8">
      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="panel-title">
            <div class="row">
              <div class="col-xs-6">
                <h5><span class="glyphicon glyphicon-shopping-cart"></span>Your cart</h5>
                <button type="button" class="btn btn-success" class="pull-right">Continue shoping</button>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
            </div>
            <div class="col-xs-4">
              <h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product details</small></h4>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6 text-right">
                <h6><strong>99 <span class="text-muted">x</span></strong></h6>
              </div>
              <div class="col-xs-4">
                <input type="text" class="form-control input-sm" value="1">
              </div>
              <div class="col-xs-2">
                <button type="button" class="btn btn-link btn-xs">
                  <span class="glyphicon glyphicon-trash"> </span>
                </button>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
            </div>
            <div class="col-xs-4">
              <h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product details</small></h4>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6 text-right">
                <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
              </div>
              <div class="col-xs-4">
                <input type="text" class="form-control input-sm" value="1">
              </div>
              <div class="col-xs-2">
                <button type="button" class="btn btn-link btn-xs">
                  <span class="glyphicon glyphicon-trash"> </span>
                </button>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="text-center">
              <div class="col-xs-9">
                <h6 class="text-right">Added products?</h6>
              </div>
              <div class="col-xs-3">
                <button type="button" class="btn btn-default btn-sm btn-block" style="background-color:lightblue;">
                  Update cart
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-footer">
          <div class="row text-center">
            <div class="col-xs-9">
              <h4 class="text-right">Total <strong>$50.00</strong></h4>
            </div>
            <div class="col-xs-3">
              <a href="checkoutENG.php"> Check out<button type="button" class="btn btn-success btn-block"></button></a>
               
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Kundvagn slut -->