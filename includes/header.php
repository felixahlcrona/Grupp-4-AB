	
	
	
	
	<?php 

  require_once('init.php')


  ?>

  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Skidloppet AB</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Hem</a></li>
      <li><a href="bokaevenemang.php">Boka Evenemang</a></li>
      <li><a href="webshop.php">Webshop</a></li>
	  <li><a href="Tävlingsstatistik.php">Tävlingsstatistik</a></li>  
      <li><a href="contact.php">Kontakt</a></li>  
    </ul>

    <ul class="nav navbar-nav navbar-right">


    <?php if(isset($_SESSION['KundID'])) {
      echo '<li><a href="mina_sidor.php"><span class="glyphicon glyphicon-user"></span>Mina sidor</a></li>';
    } else {
      echo '<li><a href="registrera.php"><span class="glyphicon glyphicon-user"></span>Registrera dig</a></li>';
    }
    ?>
      

      <?php if(!isset($_SESSION['KundID'])) {
        echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Logga in</a></li>';
        } else {
          echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logga ut</a></li>';
        }


         ?>
      
      <li><a href="engelska_sidor/engelskHem.php"><img src="bilder/english.png"/></a></li>
      <li><a href="index.php"><img src="bilder/sv.png"/></a></li>
    </ul>
  </div>
	</nav>
