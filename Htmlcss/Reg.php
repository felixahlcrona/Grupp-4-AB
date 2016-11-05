<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ta bort Alien</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--Font Awesome stylesheet-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<!--CSS fil-->
	<link href="Css.css" rel="stylesheet">
</head>

<body background="Space.jpg">


  <div class="jumbotron text-center">
          <h1>A.L.I.E.N</h1>
        <p>Svenska myndigheters system över Alien</p>
<a href="Startsida.php"><i class="fa fa-home fa-5x" aria-hidden="true"></i></a>
<a href="Alien.php"><i class="fa fa-optin-monster fa-5x" aria-hidden="true"></i></a>
<a href="TabortAlien.php"><i class="fa fa-optin-monster fa-5x" aria-hidden="true"></i></a>
<a href="Raser.php"><i class="fa fa-street-view  fa-5x" aria-hidden="true"></i></a>
<a href="UppdateraRymdskepp.php"><i class="fa fa-space-shuttle fa-5x" aria-hidden="true"></i></a>
<a href="RymdskeppSök.php"><i class="fa fa-search fa-5x" aria-hidden="true"></i></a>

<p>
<span>Startsida</span><span>Akutella Aliens</span><span>Ta bort Alien</span><span>Aktuella Raser</span><span>Ändra Rymdskepp</span><span>Sök på Rymdskepp</span>
</p>
    </div>
	
	
	

    <div class="container text-center">
        <div class="row">
		
            <div class="col-sm-8 col-md-offset-2">
			<h2>Lägg till en Alien</h2>

               

<form action="Reg.php" method="post">
  AlienID: <input type="text" name="fornamn" /><br>
    AlienID: <input type="text" name="efternamn" /><br>
	
  </select>
  <input type="submit" value="Lägg till Alien" class="btn btn-success" role="button">
  
  </form>

<table>
  </div>

  
   <div class="col-sm-4 col-md-offset+2">

<?php
    

    $pdo = new PDO('mysql:dbname=Grupp4AB;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
	$pdo->exec("set names utf8");
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    
	
// Only make insert if there is a form post to process
    
        $querystring='INSERT INTO Kund (fornamn,efternamn) VALUES(:fornamn,:efternamn);';
        $stmt = $pdo->prepare($querystring);
        $stmt->bindValue(':fornamn', $_POST['fornamn']);
        $stmt->bindValue(':efternamn', $_POST['efternamn']);
        $stmt->execute();
		  
			
	
	
	
	
		 echo "<table border='1'>";
	
	

echo "<tr style='background-color:grey; font-size: 20px;'>";
    echo "<th>AlienID</th>";
	echo "<th>Farlighetkod</th>";
   echo "<th>Rasnamn</th>";
echo "</tr>";



	 foreach($pdo->query( 'SELECT * FROM Kund' ) as $row){
      echo "<tr style='background-color:#4286f4; font-size: 20px;'>";
      echo "<td> ".$row['fornamn']."</td>";
      echo "<td> ".$row['efternamn']."</td>";        
        
      echo "</tr>";     
	  
	  
	   
	  

    }
		echo "</table>";
	

    
?>
      

</div>
   
   
   
  </div>
</div>
   
<background src="Alienbild.JPG" class="img-center" alt="Cinque Terre">
</body>
</html>