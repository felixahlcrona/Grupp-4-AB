<!DOCTYPE html>
<?php

date_default_timezone_set('Europe/Stockholm');



$timestamp = strtotime($date);
$cDate = strtotime(date('Y-m-d H:i:s'));
require_once('connect.php');

?>

<?php
// Start the session
session_start();
if (empty($_SESSION["evenemang"])) {
	
$_SESSION["evenemang"]="Inget evenemang valt";
$_SESSION["evenemangpris"]="0";
}
	
$_SESSION["valla"]="Inget vallapaket";
$_SESSION["vallapris"]="0";

$_SESSION["langning"]="Ingen langning";
$_SESSION["langningpris"]="0";

$_SESSION["resa"]="Ingen resa";
$_SESSION["resapris"]="0";

if (isset($_POST['evenemang'])) {


if ($_POST['evenemang'] == 'Skidlopp') {


/* hämtar namn och pris från evenemang 3*/
foreach($pdo->query( 'SELECT * FROM Evenemang where EvenemangsID=01' ) as $row){


$_SESSION["evenemang"]=$row['Tavlingsnamn'];
$_SESSION["evenemangpris"]=$row['Pris'];


}
}
if ($_POST['evenemang'] == 'Cykel') {
	/* hämtar namn och pris från tjänst 1*/
foreach($pdo->query( 'SELECT * FROM Evenemang where EvenemangsID=02' ) as $row){

$_SESSION["evenemang"]=$row['Tavlingsnamn'];
$_SESSION["evenemangpris"]=$row['Pris'];

}
}
else if ($_POST['evenemang'] == 'Marathon') {

$sport_status = 'checked';
	/* hämtar namn och pris från tjänst 2*/
foreach($pdo->query( 'SELECT * FROM Evenemang where EvenemangsID=03' ) as $row){

$_SESSION["evenemang"]=$row['Tavlingsnamn'];
$_SESSION["evenemangpris"]=$row['Pris'];

}
}

}
?>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"
    type="text/javascript"></script>
<script src="yourfile.js" type="text/javascript" ></script>



    <style type="text/css">
     


   

	.collapsboka
	{
	padding-left: 50px;
    width: 100%;
    padding-bottom: 100px;
    position: absolute;
		
	}
<!-- styling för kundvangn !-->
	.pure-table {
	width: 300px;
	}
<!-- styling för kundvangn headning!-->
		table.table4  {
	color: black; 
	font-family: Helvetica, Arial, sans-serif; 
	width: 300px;
	border-collapse:
	collapse; border-spacing: 0;
	}
	
	td.headertd{
		border: 0px;
		background: white;
		padding-bottom: 0px;
		font-size: 120%;
	}
		
		table.table5{
	color: white;
	font-family: Helvetica, Arial, sans-serif; /* Nicer font */
	width: 650px;
    border-collapse: collapse;
	collapse; border-spacing: 0;
	text-shadow: 2px 2px 15px black;
	font-size: 120%;
	}
	
	table.table5 td{
	background: none;
    border: none !important;
	}
	table.table5 tr{
		
	<!-- border-bottom: 1px solid #ccc; -->

		
	}
		table.table5 th{
		  border: none !important;
		background: none;

	}
	
	td.headertd2{
		padding:0px;
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

	.knappar{
		position:relative;
		width: 800px;
		float:right;
		
		
		
	}
	
	

	.td kanpp{
		padding: 0px;
	}

	
	input[type="submit"]:hover {
		border: 1px solid lightgreen;
	   
		background:lightgreen;
	}
	.order {
		top: 10%;
		position: absolute;
		right: 50px;
	}	

	.mainboka{
	background-image: url("bilder/header.jpg");
	height: 400px;
	width: 100%; 
	background-size:cover
    position: relative;
	background-size: 100% 100%;
	}
	.maintext{
	
	position:relative;
    display:none; 
	top:150px;
	width: 970px;
	height: 100px;
	margin: auto;
	margin-right: 40%;
	margin-left: auto;
	color: white;
	text-shadow: 2px 2px 5px black;
}

	.maintext2{
	opacity:0;
	position:relative;
	top: 180px;
	width: 600px;
	margin: auto;
	color: white;
	text-shadow: 2px 2px 5px black;
}
h3 {
	font-family: Montserrat,sans-serif;
    font-style: normal;
    font-variant: normal;
    font-weight: 700;
    letter-spacing: normal;
    line-height: 1.2em;
    text-transform: none
	font-size: 37px;
	margin:0 px;
	margin-top:0px;
    font-size: 99px!important;
    letter-spacing: -5px!important;
	text-align: center;
 }
h6 {
	font-family: Montserrat,sans-serif;
    font-style: normal;
    font-variant: normal;
    font-weight: 700;
    letter-spacing: normal;
    line-height: 1.2em;
    text-transform: none;
		    font-size: 60px;
			margin:0 px;
			margin-top:0px;
    letter-spacing: -5px!important;
	text-align: center;
  
	}
	.bar {
	
      width: 600px;
      margin: auto; 
  }
  .progressbar {
      counter-reset: step;
  }
  .progressbar li {
      list-style-type: none;
      width: 33%;
      float: left;
      font-size: 12px;
      position: relative;
      text-align: center;
      text-transform: uppercase;
      color: #7d7d7d;
  }
  .progressbar li:before {
      width: 30px;
      height: 30px;
      content: counter(step);
      counter-increment: step;
      line-height: 30px;
      border: 2px solid #7d7d7d;
      display: block;
      text-align: center;
      margin: 0 auto 10px auto;
      border-radius: 50%;
      background-color: white;
  }
  .progressbar li:after {
      width: 100%;
      height: 2px;
      content: '';
      position: absolute;
      background-color: #7d7d7d;
      top: 15px;
      left: -50%;
      z-index: -1;
  }
  .progressbar li:first-child:after {
      content: none;
  }
  .progressbar li.active {
      color: black;
  }
  .progressbar li.active:before {
      border-color: green;
      top: 15px;;
    
  }
  .progressbar li.active + li:after {
      background-color: green;
      top: 15px;;
  }


	
	.accordion {
	  width: 100%;
	  max-width: 900px;
	  height: 380px;
	  overflow: hidden;
	 margin-top: 5%
	}

	.accordion ul {
	  width: 100%;
	  display: table;
	  table-layout: fixed;
	  margin: 0;
	  padding: 0;
	}

	.accordion ul li {
	  display: table-cell;
	  position: relative;
	  width: 16.666%;
	  height: 380px;
	  background-repeat: no-repeat;
	  background-position: center center;
	  transition: all 500ms ease;
	   vertical-align: bottom;
	}

	.accordion ul li div {
	  display: block;
	 background: rgba(0, 0, 0, 0.2);
	 
	  width: 100%;
	  height: 100%;
	  z-index:3;
	 
	 vertical-align: bottom;
	   white-space: nowrap;

	}

	.accordion d {
	  
	  height: 20%;

	}


	.accordion ul li div h2 {
	  font-family: Montserrat, sans-serif;
	  text-overflow: clip;
	  font-size: 28px;
	  text-transform: uppercase;
	  margin-bottom: 2px;
	   padding-top: 15px;
	  color: black;
	  z-index:3;
	  padding-left:15px;
	  margin-top: 0px;


	}

	.accordion ul li div p {
	  font-family: Montserrat, sans-serif;
	  text-overflow: clip;
	  font-size: 14px;
	  text-transform: uppercase;
	padding-left: 30px;
	 color: black;
	  z-index:3;
	   

	}




	.accordion ul li div h4{
			position: absolute;
		text-overflow: clip;
			color: white;
		font-size:60px;
		padding-left: 20px;
		top:300px;
		text-shadow: 2px 2px 5px black;

	}

	.accordion ul li div h5{
			position: absolute;
		
			color: white;
		font-size: 20px;
		padding-left: 160px;
		top:310px;
		text-shadow: 2px 2px 5px black;
	}
	.accordion ul li:nth-child(1) {  

	 background-image: url("bilder/marathon.jpg"); }

	.accordion ul li:nth-child(2) {  background-image: url("bilder/bike.jpg"); }

	.accordion ul li:nth-child(3) {   background-image: url("bilder/track.jpg"); }

	.accordion ul li:nth-child(4) {   background-image: url("bilder/sno.jpg"); }


	.accordion ul:hover li { width: 8%; }

	.accordion ul:hover li:hover { width: 60%; }

	.accordion ul:hover li:hover  { z-index:5; }



	@media screen and (max-width: 600px) {

	.accordion { height: auto; }

	.accordion ul li,
	.accordion ul li:hover,
	.accordion ul:hover li,
	.accordion ul:hover li:hover {
	  position: relative;
	  display: table;
	  table-layout: fixed;
	  width: 80%;
	  -webkit-transition: none;
	  transition: none;
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
 

<div class="mainboka">

<div class="maintext">
<h3> Boka ditt evenemang </h3>
</div>
<div class="maintext2">
<h6 > Välj ditt evenemang </h6>
</div>
</div>
<div class="bar">
      <ul class="progressbar">
          <li class="active">Evenemang</li>
          <li>Tjänster</li>
          <li>Utcheckning</li>
          
  </ul>
 </div>
    <div class="collapsboka">

<div class="order">
<table class=table4>

<td class=headertd2> Din beställning </td>

</tr> 
</table>
<table class =pure-table >
<tr>
<th width=60%;> Evenemang </th>
<th width=40%;> Pris </th>
</tr>
<tr>
<td> <?PHP print $_SESSION["evenemang"]?> </td>
<td> <?PHP print $_SESSION["evenemangpris"]?> SEK </td>

</tr>
<tr>
<th colspan= 2> Tjänster </th>

</tr>
<tr>
<td> 	<?PHP print $_SESSION["valla"] ?> </td> 
<td> 	<?PHP print $_SESSION["vallapris"]  ?> SEK</td> 
</tr>

<tr>
<td> <?PHP print $_SESSION["langning"]?>  </td> 
<td> 	<?PHP print $_SESSION["langningpris"] ?> SEK </td> 
</tr>

<tr>
<td> <?PHP print $_SESSION["resa"]?>  </td> 
<td> <?PHP print $_SESSION["resapris"]?>  SEK </td> 
</tr>
<tr>
<th> Totalpris </th>
<?PHP $_SESSION["totalpris"] = $_SESSION["resapris"] + $_SESSION["langningpris"] + $_SESSION["vallapris"] + $_SESSION["evenemangpris"] ?> 
<th> <?PHP print $_SESSION["totalpris"]?>  SEK  </th>
</tr>
 
 <tr>
 <?PHP 
 if ($_SESSION["evenemang"]== 'Inget evenemang valt'){
echo "<td colspan=2  class='knapp' style='border: none' > <a href='bokatjanster3.php'><button class='btn btn-info btn-lg disabled' style='width:350px;' disabled > Lägg till ett evenemang ></button></a></td> ";
 }
else{
echo "<td colspan=2  class='knapp' style='border: none' > <a href='bokatjanster3.php'><button class='btn btn-info btn-lg ' style='width:350px;'  > Nästa steg ></button></a></td> ";

}
?>
</tr>
</table>
 </div>


<div class="accordion">
  <ul>
    <li style="z-index: 6;">
       <div> 
      <div style=" height:20%; background: #F9F9F9;"> 
	    <?php
		foreach($pdo->query( 'SELECT * FROM Evenemang where EvenemangsID=01' ) as $row){
			
?>
        <h2>  <?php print $row['Tavlingsnamn']?>  </h2> 
        <p>  <?php print $row['Datum'];$Tavling1Date = strtotime($row['Datum']);?>  <p> 
		
		<table class="table5">
		<tr>
		<th width= 250px;> Antal deltagare </th> <th>Infomation om tävligen</th>
		</tr>
		<tr style="border-bottom: none; white-space: normal;">
		<?php
		 echo "<td> ".$row['Antaldeltagare']."</td>";
		 echo "<td> ".$row['Evenemanginfo']."</td>";
		 ?>
		</tr>
		<tr>
		<th> Antal starplatser kvar </th>
		</tr>
		<tr style="border-bottom: none; ">
		<?php
		 echo "<td> ".$row['Antalstartplatser']."</td>";  
		  ?>
		</tr>
		


<tr style="border-bottom: none; ">
<td></td>
		<FORM method ="post" >
<?php if ($row['Antalstartplatser'] == '0'){
echo "<td class='knapp' style='padding-bottom:10px;'><button name='evenemang' disabled class='btn btn-info btn-lg disabled' style='width:350px;' type='submit' value=''>Full bokat</button></td>";
}
else {
	echo "<td class='knapp' style='padding-bottom:10px;'><button name='evenemang'  class='btn btn-info btn-lg ' style='width:350px;' type='submit' value='Skidlopp'>Välj evenemang</button></td>";
}
?>
</FORM>

</tr >
<tr style="border-bottom: none; ">
<td></td>
<FORM method ="post" >
<?php if ($row['Antalstartplatser'] == '0'){
echo "<td class='knapp'><button name='intresse'  class='btn btn-info btn-lg ' style='width:350px;' type='submit' value=''>Intresseanmälan</button></td>";
}
else {
	echo "<td class='knapp' ><button name='intresse'   disabled class='btn btn-info btn-lg disabled' style='width:350px;' type='submit' value=''>Intresseanmälan</button></td>";
}
?>
</FORM>

</tr >


		</table>
        <h4><?php echo "<td> ".$row['Pris']."</td>"; }?></h4>
		<h5>sek</h5>
		
		
         </div>
         </div>
    </li>
    <li style="z-index: 7;">
      <div> 
                 <div style=" height:20%; background: #F0F0F0;">
	    <?php
		foreach($pdo->query( 'SELECT * FROM Evenemang where EvenemangsID=02' ) as $row){
			
?>
        <h2>  <?php print $row['Tavlingsnamn']?>  </h2> 
        <p>  <?php print $row['Datum'] ;$Tavling2Date = strtotime($row['Datum']);?>  <p> 
		
		<table class="table5">
		<tr>
		<th width= 250px;> Antal deltagare </th> <th>Infomation om tävligen</th>
		</tr>
		<tr style="border-bottom: none; white-space: normal;">
		<?php
		 echo "<td> ".$row['Antaldeltagare']."</td>";
		 echo "<td> ".$row['Evenemanginfo']."</td>";
		 ?>
		</tr>
		<tr>
		<th> Antal starplatser kvar </th>
		</tr>
		<tr style="border-bottom: none; ">
		<?php
		 echo "<td> ".$row['Antalstartplatser']."</td>";  
		  ?>
		</tr>
		


<tr style="border-bottom: none; ">
<td></td>
	<FORM method ="post" >
<?php if ($row['Antalstartplatser'] == '0'){
echo "<td class='knapp' style='padding-bottom:10px;'><button name='evenemang' disabled class='btn btn-info btn-lg disabled' style='width:350px;' type='submit' value=''>Full bokat</button></td>";
}
else {
	echo "<td class='knapp' style='padding-bottom:10px;'><button name='evenemang'  class='btn btn-info btn-lg ' style='width:350px;' type='submit' value='Cykel'>Välj evenemang</button></td>";
}
?>
</FORM>

</tr >
<tr style="border-bottom: none; ">
<td></td>
<FORM method ="post" >
<?php if ($row['Antalstartplatser'] == '0'){
echo "<td class='knapp'><button name='intresse'  class='btn btn-info btn-lg ' style='width:350px;' type='submit' value=''>Intresseanmälan</button></td>";
}
else {
	echo "<td class='knapp' ><button name='intresse'   disabled class='btn btn-info btn-lg disabled' style='width:350px;' type='submit' value=''>Intresseanmälan</button></td>";
}
?>
</FORM>

		</table>
        <h4><?php echo "<td width=15%> ".$row['Pris']."</td>"; }?></h4>
		<h5>sek</h5>
		
		
         </div>
         </div>
    </li>
    <li style="z-index: 8;">
      <div> 
        <div style=" height:20%; background: #F9F9F9;">
	    <?php
		foreach($pdo->query( 'SELECT * FROM Evenemang where EvenemangsID=03' ) as $row){
			
?>
        <h2>  <?php print $row['Tavlingsnamn']?>  </h2> 
        <p>  <?php print $row['Datum']; $Tavling3Date = strtotime($row['Datum']);?>  <p> 
		
		<table class="table5">
		<tr>
		<th width= 250px;> Antal deltagare </th> <th>Infomation om tävligen</th>
		</tr>
		<tr style="border-bottom: none;white-space: normal; ">
		<?php
		 echo "<td> ".$row['Antaldeltagare']."</td>";
		 echo "<td> ".$row['Evenemanginfo']."</td>";
	
		 ?>
		</tr>
		<tr>
		<th> Antal starplatser kvar </th>
		</tr>
		<tr style="border-bottom: none; ">
		<?php
		 echo "<td> ".$row['Antalstartplatser']."</td>";  
		  ?>
		</tr>
		


<tr style="border-bottom: none; ">
<td></td>
<FORM method ="post" >
<?php if ($row['Antalstartplatser'] == '0'){
echo "<td class='knapp' style='padding-bottom:10px;'><button name='evenemang' disabled class='btn btn-info btn-lg disabled' style='width:350px;' type='submit' value=''>Full bokat</button></td>";
}
else {
	echo "<td class='knapp' style='padding-bottom:10px;'><button name='evenemang'  class='btn btn-info btn-lg ' style='width:350px;' type='submit' value='Marathon'>Välj evenemang</button></td>";
}
?>
</FORM>

</tr >
<tr style="border-bottom: none; ">
<td></td>
<FORM method ="post" >
<?php if ($row['Antalstartplatser'] == '0'){
echo "<td class='knapp'><button name='intresse'  class='btn btn-info btn-lg ' style='width:350px;' type='submit' value=''>Intresseanmälan</button></td>";
}
else {
	echo "<td class='knapp' ><button name='intresse'   disabled class='btn btn-info btn-lg disabled' style='width:350px;' type='submit' value=''>Intresseanmälan</button></td>";
}
?>
</FORM>
</tr >


		</table>
        <h4><?php echo "<td width=15%> ".$row['Pris']."</td>"; }?></h4>
		<h5>sek</h5>
		
		</div>
		</div>
    </li>
    <li style="z-index: 9;">
      <div> 
      <div style=" height:20%; background: #F0F0F0;"> 
	    <?php
		foreach($pdo->query( 'SELECT * FROM Evenemang where EvenemangsID=01' ) as $row){
			
?>
        <h2>  <?php print $row['Tavlingsnamn']?>  </h2> 
        <p>  <?php print $row['Datum'] ;	$Tavling4Date = strtotime($row['Datum']) - 86400 ;?>  <p> 
		
		
		<table class="table5">
		<tr>
		<th width= 250px;> Antal deltagare </th> <th>Infomation om tävligen</th>
		</tr>
		<tr style="border-bottom: none; white-space: normal;">
		<?php
		
		 echo "<td> ".$row['Antaldeltagare']."</td>";
		 echo "<td> ".$row['Evenemanginfo']."</td>";
		 ?>
		</tr>
		<tr>
		<th> Antal starplatser kvar </th>
		</tr>
		<tr style="border-bottom: none; ">
		<?php
		 echo "<td> ".$row['Antalstartplatser']."</td>";  
		  ?>
		</tr>
		


<tr style="border-bottom: none; ">
<td></td>
<FORM method ="post" >
<?php if ($row['Antalstartplatser'] == '0'){
echo "<td class='knapp' style='padding-bottom:10px;'><button name='evenemang' disabled class='btn btn-info btn-lg disabled' style='width:350px;' type='submit' value=''>Full bokat</button></td>";
}
else {
	echo "<td class='knapp' style='padding-bottom:10px;'><button name='evenemang'  class='btn btn-info btn-lg ' style='width:350px;' type='submit' value='Skidlopp'>Välj evenemang</button></td>";
}
?>
</FORM>

</tr >
<tr style="border-bottom: none; ">
<td></td>
<FORM method ="post" >
<?php 
if ($cDate < $Tavling4Date){
if ($row['Antalstartplatser'] == '0'){
echo "<td class='knapp'><button name='intresse'  class='btn btn-info btn-lg ' style='width:350px;' type='submit' value=''>Intresseanmälan</button></td>";
}
else {
	echo "<td class='knapp' ><button name='intresse'   disabled class='btn btn-info btn-lg disabled' style='width:350px;' type='submit' value=''>Intresseanmälan</button></td>";
}
}
?>
</FORM>
</tr >


		</table>
        <h4><?php echo "<td> ".$row['Pris']."</td>"; }?></h4>
		<h5>sek</h5>
		
		
         </div>
         </div>
    </li>
 
  </ul>
</div>

<?php

if ($cDate < $Tavling4Date){
	echo "LOL";
	}
print $cDate;
print $Tavling4Date;

   
print $Tavling3Date;
print $Tavling2Date;

if ($cDate < $Tavling4Date){
	echo "LOL";
}
   ?>
   </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>