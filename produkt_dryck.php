<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Produkt - Dryck</title>
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

    <hr class="divider">

      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 col xs-12">
            <p class="lead">Produktinformation</p>
            <div class="list-group">

              <a href="#" class="list-group-item">Antal: <input type="number" name="antaldryck"
                  min="1" max="20" step="1" value="1"></a>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col xs-12">
            <div class="thumbnail">
              <img src="bilder/dricka.jpg" alt="Träningsbyxor">
              <div class="caption">
              <h3 class="pull-right">19 kr</h3>
                <h3>Energidryck</h3>
                <p>Piggna till med en energikick innan din tävling! Vi erbjuder de godaste smakerna.</p>
                <p><a href="kundvagn.php" class="btn btn-primary" role="button">Lägg till i kundvagn</a>
              </div>
            </div>
          </div>

        </div>
      </div>

    <!-- End of page content -->