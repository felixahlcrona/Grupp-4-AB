
<?php

$dom = new DOMDocument();
$html = file_get_contents('webshop.php');

@$dom->loadHTML($html);

$a = $dom->getElementsByTagName('a.product');

for ($i; $i < $a->length; $i++) {
$attr = $a->item($i)->getAttribute('target');

echo $attr . "\n";

print_r($attr);

}



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Webshop</title>
    <link rel="stylesheet" type="text/css" href="app.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

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

      <?php

if(isset($_SESSION['Email']) && $_SESSION['KundID']) {
  include_once('db.php');

  if(isset($_SESSION['Email']) && $_SESSION['KundID']) {
    $Email = $_SESSION['Email'];
    $KundID = $_SESSION['KundID'];
  }
}

else {
  echo "Var vänlig logga in";
}

?>
  
    <!-- Header -->

   <?php require_once('includes/header.php'); ?>

    <!-- End of header -->

    <!-- Product thumbnail -->
      <hr class="divider">

      <div class="row clearfix" style="margin:0px 80px;">
        <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
        <img src="bilder/treningbyxor.jpg" alt="Träningsbyxor"/>
        <div class="caption">
          <h3 class="pull-right">99 kr</h3>
          <h3>Träningsbyxor</h3>
          <p>Mjuka träningsbyxor med gettyg. Köp endast för att få den ultimata känslan.</p>
          <p><a href="item_detail.php" class="btn btn-success product" target="1" role="button">Välj</a></p>
      </div>
    </div>
  </div>




        <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
        <img src="bilder/vallaservice.jpg" alt="Träningsbyxor"/>
        <div class="caption">
        <h3 class="pull-right">299 kr</h3>
          <h3>Valla</h3>
          <p>Glöm inte att valla valla vallivalla dina valladevallvallor från vivalla</p>
          <p><a href="vallas.php" class="btn btn-success" role="button" target="2">Välj</a>
      </div>
    </div>
  </div>



        <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
        <img src="bilder/dricka.jpg" alt="Träningsbyxor"/>
        <div class="caption">
        <h3 class="pull-right">19 kr</h3>
          <h3>Energidryck</h3>
          <p>Piggna till med en energikick innan din tävling! Vi erbjuder de godaste smakerna.</p>
          <p><a href="produkt_dryck.php" class="btn btn-success" role="button" target="3">Välj</a></p>
      </div>
    </div>
  </div>



        <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
       <img src="bilder/vallningservice.jpg" alt="Träningsbyxor"/>
        <div class="caption">
        <h3 class="pull-right">99 kr</h3>
          <h3>Thumbnail label</h3>
          <p>...</p>
          <p><a href="#" class="btn btn-primary" role="button">Välj</a> <a href="#" class="btn btn-default" role="button" target="4">Detaljer</a></p>
      </div>
    </div>
  </div>

  </div>


    <!-- End of Product thumbnail -->



</body>
</html>