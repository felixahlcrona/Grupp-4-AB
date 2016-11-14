<!DOCTYPE html>
<html>
<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["Produktnamn"] . ".<br>";

?>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Skidloppet AB</title>


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
      <a class="navbar-brand" href="index.html">Skidloppet AB</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Hem</a></li>
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

    <!-- End of header -->

    <!-- page content -->

    <hr class="divider">

      <div class="container pull-right">
        <div class="row">
        
          

	


          <div class="col-md-5 ">
            <div class="thumbnail">
              <img src="jacka.png" alt="Träningsbyxor">
              <div class="caption">
              <h3 class="pull-right">499 kr</h3>
                <h3>Träningsjacka</h3>
                <p>Tjock och bekväm träningsjacka för kalla dagar</p>
               
              </div>
            </div>
          </div>
		  
	
<?php
  $pdo = new PDO('mysql:dbname=Grupp4AB;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
	$pdo->exec("set names utf8");
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	

    
	  foreach($pdo->query( 'SELECT * from Produkter;' ) as $row){
      echo '<option value="'.$row['Produktnamn'].'">';
      echo $row['Produktnamn'];      
      echo '</option>';

    }    
	

?>
        </div>
		        <form action="item_detail.php" method="post">
  Antal: <input type="text" name="Antal" /><br>
    Färg:<select name="Produktnamn">
    <option value="Grön">Grön</option>
    <option value="Röd">Röd</option>
	<option value="Blå">Blå</option>
  </select>
    Kön:<select name="Kon">
    <option value="Herr">Herr</option>
    <option value="Dam">Dam</option>
  </select>
  
  Storlek:<select name="Stlk">
    <option value="Small">Small</option>
    <option value="Medium">Medium</option>
	<option value="Large">Large</option>
	<option value="XL">XL</option>
  </select>
  <input type="submit" value="Lägg till Varukorgen" class="btn btn-success" role="button">
  
  </form>
      
      </div>
	  

    <!-- End of page content -->
</body>
</html>