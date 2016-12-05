<?php 

session_start();

require_once('db.php');


?>

<!DOCTYPE html>
<html lang="sv">
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
	   .sidebar-offcanvas-right {
   position:fixed;
   padding:18px;
   
   
   
  }
	     .col-md-4 {
  
   padding:5px;
  
  }
  
  
       .container{
padding:100px;
padding-right:70px;
 
  }
.form-control {
   
    width: 50px;
    
}

 th{
	 font-size:16px;
	 background-color:#f3f3f3;
 }
  
  h6{
	  
	 padding-left:60px;
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
	<?php
	if(!empty($_SESSION['cart']))
	?>
	
		    <div class="col-xs-6 col-sm-3 sidebar-offcanvas-right"   style="width:20%;"><span class="pull-right">
      <div style="clear:both;"></div>

      <h2>Kundvagn</h2>
      <div class="table-responsive">
      <table class="table table-bordered">
      <tr>
      <th width="60%">Produktnamn</th>
      <th width="10%">Antal</th>
      <th width="10%">Pris</th>
      <th width="20%">Ta bort</th>
	  
      </tr>

      <?php

      if(!empty($_SESSION['cart'])) {

        $_SESSION['totalpris'] = 0;
        foreach($_SESSION['cart'] as $keys => $values) {

          ?>

          <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"]; ?></td>
            <td><?php echo $values["product_price"]; ?>Kr</td>
            
            <td><a href="shop.php?action=delete&ProduktID=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
          </tr>
          <?php

         // $total = $total + ($values["item_quantity"] * $values["product_price"]);

          $_SESSION['totalpris'] = $_SESSION['totalpris'] + ($values["item_quantity"] * $values["product_price"]);

        }

        ?>

        <tr>
        <th colspan="3" align="right">Totalsumma</th>
        <td align="right"><?php echo number_format($_SESSION['totalpris'], 2); ?>Kr</td>
    
         </tr>

        <?php
      }

      ?>
      </table>
	      <a href="checkout.php" class="btn btn-success">Checka ut</a>
      </div>
      </div>


    

      <div class="container" style="width:60%;" ><div style="margin-top:30px;"></div>

      <h2 align="center">Ta en titt och fynda våra produkter!</h2>
      <?php 

      $result = mysqli_query($db, 'SELECT * FROM Produkter');
      if(mysqli_num_rows($result) > 0) 
		  

      {
        while($row = mysqli_fetch_array($result))
        {


          ?>

          <div class="col-md-4">
          <form method="POST" action="shop.php?action=add&ProduktID=<?php echo $row['ProduktID']; ?>">
          <div style="border:2px groove lightblue; margin:-1px 3px -1px; padding:10px; align:center;  background-color:white;">
         <h6 class="text-danger"><?php echo "<img src='".$row['Produktbild']."' alt='' height='160' width='190'/></";   ?> Kr</h6>
		 <h3 class="text-danger pull-right" ><?php echo $row['Pris']; ?> Kr</h3>
          <h3><?php echo $row['Produktnamn']; ?></h3>
		  
		  
          <h5 class="text-info"><?php echo $row['Beskrivning']; ?></h5>
         
          
          <input type="hidden" name="hidden_name" value="<?php echo $row['Produktnamn']; ?>">
          <input type="hidden" name="hidden_price" value ="<?php echo $row['Pris']; ?>">
		   <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success pull-right" value="Lägg till i kundvagnen">
		   <input type="text" name="quantity" class="form-control " value="1">
         
		   
          </div>
		  
          </form>
		  
          </div>

          <?php
		  

        }

      }
	  
      ?>


	  

</body>
</html>