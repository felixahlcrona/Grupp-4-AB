<!DOCTYPE html>
<?php
// Start the session
session_start();
    if(isset($_SESSION['current'])){
         $_SESSION['oldlink']=$_SESSION['current'];
    }else{
         $_SESSION['oldlink']='no previous page';
    }
    $_SESSION['current']=$_SERVER['PHP_SELF'];
?>
<html lang="en">
<?php


require_once('connect.php');

?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My site</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script type="text/javascript">

$('#accordion').accordion();
$('#accordion input[type="checkbox"]').click(function(e) {
    e.stopPropagation();
});
</script>
    <style type="text/css">
  .btn btn-primary btn-md
	{
		background-color:#449d44;
border-color: #398439;
	}
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

	.collapsboka
	{
	
		margin-top: 6%;
		margin-right: 5%;
		padding-left: 10%;
		padding-right: 10%;
	}
	.panel-group .panel{
		width: 70%;
	}
	.buttonplacement{
		position:relative;
	float:right;
	
	margin-right:5%;
	

	}
	.collapstext{
			position:relative;
	float:left;

	}
table.table1  {
color: #333; /* Lighten up font color */
font-family: Helvetica, Arial, sans-serif; /* Nicer font */

width: 800px;
border-collapse:
collapse; border-spacing: 0;


}
table.table2  {
color: black; 
font-family: Helvetica, Arial, sans-serif; 
width: 800px;

border-collapse:
collapse; border-spacing: 0;

}
td.headertd{
	border: 0px;
	background: white;
	padding-bottom: 0px;
}
td, th { border: 1px solid #CCC; height: 30px; } /* Make cells a bit taller */

th {
background: #F3F3F3; /* Light grey background */
font-weight: bold; /* Make sure they're bold */
padding-left:15px;
padding-right:10px;
}

td {
background: #FAFAFA; /* Lighter grey background */
padding:15px;
}
td.knapp {
padding:0px;


}

.panel-heading {
    padding: 0px;
}
.panel-body{
    padding: 0px;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    text-align: c;
    text-decoration: none;
    display: inline-block;
    font-size: 11px;
    cursor: pointer;
	height: 40px;
	width : 95px;

}
.button:hover{
     background: #383;
}
.knappar{
	position:relative;
	width: 800px;
	float:right;
	left: 75.1%;
	
	
}
.panel-group .panel {
    width: 801px;
}
    </style>

  </head>
  <body>
    <!-- Header -->
	

   <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Skidloppet AB</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Hem</a></li>
      <li><a href="#">Boka Evenemang</a></li>
      <li><a href="webshop.php">Webshop</a></li> 
      <li><a href="contact.php">Kontakt</a></li> 
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="registrera.php"><span class="glyphicon glyphicon-user"></span>Registrera dig</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logga in</a></li>
      <li><a href="engelska_sidor/engelskHem.php"><img src="bilder/en.png"/></a></li>
      <li><a href="index.php"><img src="bilder/sv.png"/></a></li>
    </ul>
  </div>
  </nav>

    <div class="collapsboka">
<h1> Tävlingar </h1>

<div class="container">
<table class=table2>

<td width=60% class=headertd> Tävlingsnamn </td>
<td width=10% class=headertd>  Status </td>
<td width=15% class=headertd>  Pris </td>
<td width=15% class=headertd> Datum </td>
</tr> 
</table>
 <div class="panel-group"   id="accordion">
    <div class="panel panel-default" >
      <div class="panel-heading" >
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		  <?php

 
echo "<table class=table1>";


   foreach($pdo->query( 'SELECT * FROM Evenemang where EvenemangsID=01' ) as $row){
      echo "<tr>";

		echo "<td  width=60%> ".$row['Tavlingsnamn']."</td>";
		echo "<td width=10%> ".$row['Biljettstatus']." </td>";
		echo "<td width=15%> ".$row['Pris']." sek</td>";
		echo "<td width=15%> ".$row['Datum']."</td>"; 
	
		echo "</table>";

?>
</table></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse ">
        <div class="panel-body"><div class="collapstext"> <img src="bilder/vasaloppet.jpg" alt="vasaloppet" width="790" height="200"/>
		<div class=knappar>
			<button class="button button1">Intresseanmälan</button>
			<a href="bokatjanster.php"><button class="button button1" >Köp startplats</button></a>
			</div>
		<?php

echo "<table class=table1>";

		echo "<tr>";
		echo "<th width=600> Infromation om evnemangt</th>";
	
		echo "<th> Antal Deltagare </th>";

		echo "<th> Total antal starplatser </th>";
		
		echo "</tr>";
		
      echo "<td> ".$row['Evenemanginfo']."</td>";
      echo "<td> ".$row['Antaldeltagare']."</td>";
	  echo "<td> ".$row['Antalstartplatser']."</td>";   

   }
    
?> 
	</table>
      </div>
      </div>
    </div>
    </div>
    <div class="panel panel-default">
		<div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"> <?php

 
echo "<table class=table1>";


   foreach($pdo->query( 'SELECT * FROM Evenemang where EvenemangsID=02' ) as $row){
      echo "<tr>";

     	echo "<td  width=60%> ".$row['Tavlingsnamn']."</td>";
		echo "<td width=10%> ".$row['Biljettstatus']." </td>";
		echo "<td width=15%> ".$row['Pris']." sek</td>";
		echo "<td width=15%> ".$row['Datum']."</td>"; 
		
    echo "</table>";
   
?></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><div class="collapstext"><?php

echo "<table class=table1>";

		echo "<tr>";
		echo "<th width=600> Infromation om evnemangt</th>";
		
		echo "<th> Antal Deltagare </th>";
		echo "<th> Total antal starplatser </th>";?>
		 <td class="knapp" rowspan= 2><button class="button button1">Intresseanmälan</button></td>
 <td class="knapp" rowspan= 2><button class="button button1">köp</button></td>
	<?php	
		echo "</tr>";
		
      echo "<td> ".$row['Evenemanginfo']."</td>";
      echo "<td> ".$row['Antaldeltagare']."</td>";
	  echo "<td> ".$row['Antalstartplatser']."</td>";   

   }
    echo "";

?> 
	</table>
	</div>
      </div>
      </div>
    </div>
    <div class="panel panel-default">
     <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><?php

 
echo "<table class=table1>";


   foreach($pdo->query( 'SELECT * FROM Evenemang where EvenemangsID=03' ) as $row){
      echo "<tr>";

	  	echo "<td  width=60%> ".$row['Tavlingsnamn']."</td>";
		echo "<td width=10%> ".$row['Biljettstatus']." </td>";
		echo "<td width=15%> ".$row['Pris']." sek</td>";
		echo "<td width=15%> ".$row['Datum']."</td>"; 
		
    echo "</table>";
   
?></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"><div class="collapstext"><?php

echo "<table class=table1>";

		echo "<tr>";
		echo "<th width=600> Infromation om evnemangt</th>";
		;
		echo "<th> Antal Deltagare </th>";
		echo "<th> Total antal starplatser </th>"?>
		<td rowspan= 2 ><a href="bokatjanster.php">Intresseanmälan</a></td>
	<td rowspan= 2 ><a href="bokatjanster.php">köp </a></td>
	<?php	
		echo "</tr>";
		
      echo "<td> ".$row['Evenemanginfo']."</td>";
      echo "<td> ".$row['Antaldeltagare']."</td>";
	  echo "<td> ".$row['Antalstartplatser']."</td>";   

   }
    echo "";

?> 
	</table>
      </div>
      </div>
      </div>
    </div>
</div>
</div>
</div>


    <footer>
      <p class="pull-right"><a href="#">Till toppen</a></p>
      <p>Designad av Grupp 4 AB. <a href="#">Privat</a>. <a href="#">Termer</a></p>
    </footer>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
