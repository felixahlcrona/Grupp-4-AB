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
 .mainboka{
	background-image: url("bilder/header.jpg");
	height: 400px;
	width: 100%; 
	background-size:cover
  position: relative;
	background-size: 100% 100%;
	}
	
	.snyggtext {
	font-family: Montserrat,sans-serif;
    font-style: normal;
    font-variant: normal;
    font-weight: 700;
    letter-spacing: normal;
    line-height: 1.2em;
    text-transform: none
	font-size: 27px;
	margin:0 px;
	margin-top:0px;
    font-size: 99px!important;
    letter-spacing: -5px!important;
	text-align: center;
	color: white;
	float: bottom;
 }
  
  .maintext{
	
	position:relative;
  
	top:150px;
	width: 970px;
	height: 100px;
	margin: auto;
	margin-right: 40%;
	margin-left: auto;
	color: white;
	text-shadow: 2px 2px 5px black;
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
  echo "Var v寬ig logga in";
}

?>



  
    <!-- Header -->

   <?php require_once('includes/header.php'); ?>

    <!-- End of header -->
	<?php
	if(!empty($_SESSION['cart']))
	?>

    <div class="main" style="width: 100%;">
		<div class="mainboka">
		<div class="maintext">
		<h3 class="snyggtext"> Skidloppets Webbshop </h3>
	</div>

</div>
	<div class="col-md-3 column margintop20" style="width: 15%; margin-top: 1%;">
    		<ul class="nav nav-pills nav-stacked" style="font-size: 20px;">
			    <li><a href="webshop.php">Kategorier</a></li>
			  <li><a href="KategoriKlader.php">Kläder</a></li>
			  <li><a href="KategoriUtrustning.php">Utrustning</a></li>
			  <li><a href="KategoriDiplom.php">Diplom</a></li>
			  <li><a href="KategoriBussresa.php">Bussresa</a></li>
			  <li><a href="KategoriValla.php">Valla</a></li>
			  <li><a href="KategoriLangning.php">Langning</a></li>
			</ul>
		</div>

      <div class="container" style="width:50%; margin-left: 5%; padding: 0px; float: left;" >
		
		
		
      <h2 align="center">Välkommen till Skidloppets Webbshop!</h2>
      <?php 

		 
		 
      $result = mysqli_query($db, 'SELECT * FROM Produkter');
      if(mysqli_num_rows($result) > 0) 
		  

      {
        while($row = mysqli_fetch_array($result))
        {
		
    
          ?>

          <div class="col-md-4" style="width: 30%; max-height: 350px; min-height: 350px; position: relative; margin: 10px;">
          <form method="POST" action="shop.php?action=add&ProduktID=<?php echo $row['ProduktID']; ?>">
          <div style="border:2px groove lightblue; margin:-1px 3px -1px; padding:10px; align:center;  background-color:white; height: 100%;">
        <a href="Produkt<?php echo $row['ProduktID'] ?>.php"> <h6 class="text-danger"><?php 
			echo "<img src='".$row['Produktbild']."' alt='' height='60%' width='60%'/></";?> Kr
		</h6></a>
		 <h3 style="font-size: 100%;"class="text-danger pull-right" >
			<?php echo $row['Pris']; ?> Kr
		 </h3>
         <h3 style="font-size: 100%;"><?php echo $row['Produktnamn']; ?></h3>
		  
		  
          <h5 style="font-size: 80%;"class="text-info"><?php echo $row['Beskrivning']; ?></h5>
         
          
          <input type="hidden" name="hidden_name" style="border:2px groove lightblue" value="<?php echo $row['Produktnamn']; ?>">
          <input type="hidden" name="hidden_price" value ="<?php echo $row['Pris']; ?>">
			 <input type="text" name="quantity" style="width:40%;" class="form-control " value="1">
		  <input type="submit" name="add" style="margin-top:5px; width: 100%; font-size: 10px;" class="btn btn-info btn-lg " value="Lägg till i kundvagn">
		  
         
		   <!-- --> 
		   
		   
		  
		   
		   
		   <!-- -->
          </div>
		  
          </form>
		  
          </div>
		  
		

          <?php
		  

        }

      }
	  
      ?>

	   

	  </div>
	   <div class="col-xs-6 col-sm-3 sidebar-offcanvas-right" style="width:15%; position: relative; float:right; margin-right: 140px;">
      

      <h2 style="font-size:20px; ">Din kundvagn</h2>
      
      <table style="border:0;" class="table table-bordered" >
      <tr>
      <th width="60%" style="background:#FAFAFA; border:0;">Produktnamn</th>
      <th width="10%" style="background:#FAFAFA; border:0;">Antal</th>
      <th width="10%" style="background:#FAFAFA; border:0;">Pris</th>
      <th width="20%" style="background:#FAFAFA; border:0;">Ta bort</th>
	  
      </tr>

      <?php

      if(!empty($_SESSION['cart'])) {

        $_SESSION['totalpris'] = 0;
        foreach($_SESSION['cart'] as $keys => $values) {
  
          ?>

          <tr>
            <td style="background:#FAFAFA; border:0;""><?php echo $values["item_name"]; ?></td>
            <td style="background:#FAFAFA; border:0;"><?php echo $values["item_quantity"]; ?></td>
            <td style="background:#FAFAFA; border:0;"><?php echo $values["product_price"]; ?>Kr</td>
            
            <td style="background:#FAFAFA; border:0;"><a href="shop.php?action=delete&ProduktID=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
          </tr>
          <?php

         // $total = $total + ($values["item_quantity"] * $values["product_price"]);

          $_SESSION['totalpris'] = $_SESSION['totalpris'] + ($values["item_quantity"] * $values["product_price"]);
		
        }

        ?>

        <tr>
        <th colspan="3" align="right" style="background:#FAFAFA; border:0;">Totalsumma</th>
        <td align="right" style="background:#FAFAFA; border:0;"><?php echo number_format($_SESSION['totalpris'], 2); ?>Kr</td>
    
         </tr>

        <?php
      }

      ?>
      </table>
	      <a href="utcheckningws.php" style="width: 100%;" class="btn btn-info btn-lg">Checka ut</a>
      
		
      </div>
	
	  </div>

</body>
</html>