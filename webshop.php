<?php 

session_start();

require_once('db.php');


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


?>
  
    <!-- Header -->

   <?php require_once('includes/header.php'); ?>

    <!-- End of header -->


      <div style="margin-top:30px;"></div>

      <div class="container" style="width:60%;">

      <h2 align="center">Fynda dina produkter i vår webshop!</h2>
      <?php 

      $result = mysqli_query($db, 'SELECT * FROM Produkter');
      if(mysqli_num_rows($result) > 0) 

      {
        while($row = mysqli_fetch_array($result))
        {

          ?>

          <div class="col-md-3">
          <form method="POST" action="shop.php?action=add&ProduktID=<?php echo $row['ProduktID']; ?>">
          <div style="border:1px solid lightblue; margin:-1px 19px 3px -1px; padding:10px; align:center;">
          <img src="bilder/treningsjacka.jpg" class="img-responsive">
          <h5 class="text-info"><?php echo $row['Produktnamn']; ?></h5>
          <h5 class="text-info"><?php echo $row['Beskrivning']; ?></h5>
          <h5 class="text-danger"><?php echo $row['Pris']; ?> SEK</h5>
          <input type="text" name="quantity" class="form-control" value="1">
          <input type="hidden" name="hidden_name" value="<?php echo $row['Produktnamn']; ?>">
          <input type="hidden" name="hidden_price" value ="<?php echo $row['Pris']; ?>">
          <input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Lägg til i kundvagnen">
          </div>
          </form>
          </div>

          <?php

        }

      }

      ?>

      <div style="clear:both;"></div>

      <h2>Min kundvagn</h2>
      <div class="table-responsive">
      <table class="table table-bordered">
      <tr>
      <th width="40%">Produktnamn</th>
      <th width="10%">Antal</th>
      <th width="20%">Pris</th>
      <th width="15%">Totalpris</th>
      <th width="5%">Ta bort</th>
      </tr>

      <?php

      if(!empty($_SESSION['cart'])) {

        $total = 0;
        foreach($_SESSION['cart'] as $keys => $values) {

          ?>

          <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"]; ?></td>
            <td><?php echo $values["product_price"]; ?>SEK</td>
            <td><?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td><a href="shop.php?action=delete&ProduktID=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
          </tr>
          <?php

          $total = $total + ($values["item_quantity"] * $values["product_price"]);

        }

        ?>

        <tr>
        <td colspan="3" align="right">Total</td>
        <td align="right"><?php echo number_format($total, 2); ?></td>
        <td><a href="checkout.php" class="btn btn-success">Checka ut</a></td>
         </tr>
        <?php
      }

      ?>
      </table>
      </div>
      </div>

</body>
</html>