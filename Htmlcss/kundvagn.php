<?php


  require_once('db.php');

$p = ['1', '1','1'];


function productAraay($p, $db) {


$productAraay = array();

  foreach($p as $item) {

    $sql = "SELECT * FROM Produkter";
    $query = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($query);

    array_push($productAraay, $row);
}


return $productAraay;
}


?>

 <?php print_r(productAraay($p,$db)); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kundvagn</title>
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



    </style>

  </head>

<body>
    <!-- Header -->

   <?php require_once('includes/header.php'); ?>

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
                <h5><span class="glyphicon glyphicon-shopping-cart"></span>  Din kundvagn</h5>
                <a href="webshop.php"><button type="button" class="btn btn-success" class="pull-right">Fortsätt handla</button></a>
              </div>
            </div>
          </div>
        </div>

        <div class="panel-body">

        <?php foreach(productAraay($p,$db) as $product => $value): ?>




          <div class="row">
            <div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
            </div>
            <div class="col-xs-4">
              <h4 class="product-name"><strong><?= $value['Produktnamn']?></strong></h4><h4><small></small></h4>
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

         <?php endforeach; ?>
          <hr>
          <div class="row">
            <div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
            </div>
            <div class="col-xs-4">
              <h4 class="product-name"><strong>Produkt namn</strong></h4><h4><small>Produkt beskrivning</small></h4>
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
                <h6 class="text-right">Lagt till produkter?</h6>
              </div>
              <div class="col-xs-3">
                <button type="button" class="btn btn-default btn-sm btn-block" style="background-color:lightblue;">
                  Uppdatera kundvagnen
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
              <a href="checkout.php"><button type="button" class="btn btn-success btn-block">Checka ut</button></a>
               
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<!-- Kundvagn slut -->