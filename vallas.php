  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Produkt - Valla</title>
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

      a.list-group-item:focus {
        background: lightblue;
      }



    </style>

  </head>
  <body>
     <!-- Header -->

   <?php require_once('includes/header.php'); ?>

    <!-- End of header -->

  <!-- page content -->

    <hr class="divider">

      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 col xs-12">
            <p class="lead">Produktinformation</p>
            <div class="list-group">
              <a href="#" class="list-group-item">Någonting:<select name="selectnogot"><option value="nogot">Något</option>
              </select>
              </a>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col xs-12">
            <div class="thumbnail">
              <img src="bilder/vallaservice.jpg" alt="Träningsbyxor">
              <div class="caption">
              <h3 class="pull-right">299 kr</h3>
                <h3>Valla</h3>
                <p>Unik vallning av högsta kvalité - Valla vi hörs</p>
                <p><a href="kundvagn.php" class="btn btn-primary" role="button">Lägg till i kundvagn</a>
              </div>
            </div>
          </div>

        </div>
      </div>

    <!-- End of page content -->

  </body>
  </html>

