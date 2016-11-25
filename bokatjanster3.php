<!DOCTYPE html>
<?php

$timestamp = strtotime($date);
$cDate = strtotime(date('Y-m-d H:i:s'));
require_once('connect.php');

// Start the session
session_start();

if (empty($_SESSION["evenemang"])) {
	
$_SESSION["evenemang"]="Inget evenemang valt";
$_SESSION["evenemangpris"]="0";
}
	
if (empty($_SESSION["valla"])) {
	
$_SESSION["valla"]="Inget vallapaket";
$_SESSION["vallapris"]="0";
}
if (isset($_POST['valla'])) {



if ($_POST['valla'] == 'ingenvalla') {

$_SESSION["valla"]="Inget vallapaket";
$_SESSION["vallapris"]="0";
}

if ($_POST['valla'] == 'elit') {

	/* hämtar namn och pris från tjänst 3*/
foreach($pdo->query( 'SELECT * FROM Tjanster where TjanstID=03' ) as $row){

$_SESSION["valla"]=$row['Tjanstnamn'];
$_SESSION["vallapris"]=$row['Pris'];
}
}
if ($_POST['valla'] == 'motionar') {
	/* hämtar namn och pris från tjänst 1*/
foreach($pdo->query( 'SELECT * FROM Tjanster where TjanstID=01' ) as $row){

$_SESSION["valla"]=$row['Tjanstnamn'];
$_SESSION["vallapris"]=$row['Pris'];
}
}
else if ($_POST['valla'] == 'race') {

$sport_status = 'checked';
	/* hämtar namn och pris från tjänst 2*/
foreach($pdo->query( 'SELECT * FROM Tjanster where TjanstID=02' ) as $row){

$motionär_status = 'checked';
$_SESSION["valla"]=$row['Tjanstnamn'];
$_SESSION["vallapris"]=$row['Pris'];
}
}

}

/* för radiobutton langning */
/* om kund ej valt något paket */
if (empty($_SESSION["langning"])) {
	
$_SESSION["langning"]="Inget vallapaket";
$_SESSION["langningpris"]="0";
}
if (isset($_POST['langning'])) {



if ($_POST['langning'] == 'ingenlangning') {

$_SESSION["langning"]="Ingen lagning";
$_SESSION["langningpris"]="0";
}

if ($_POST['langning'] == 'hellangning') {

foreach($pdo->query( 'SELECT * FROM Tjanster where TjanstID=05' ) as $row){

$_SESSION["langning"]=$row['Tjanstnamn'];
$_SESSION["langningpris"]=$row['Pris'];
}
}

else if ($_POST['langning'] == 'halvlangning') {

foreach($pdo->query( 'SELECT * FROM Tjanster where TjanstID=04' ) as $row){

$_SESSION["langning"]=$row['Tjanstnamn'];
$_SESSION["langningpris"]=$row['Pris'];
}
}

}

/* för radiobutton resor */
/* om kund ej valt något resa */
if (empty($_SESSION["resa"])) {
	
$_SESSION["resa"]="Ingen resa";
$_SESSION["resapris"]="0";
}

if (isset($_POST['resa'])) {

if ($_POST['resa'] == 'ingenresa') {

$_SESSION["resa"]="Ingen resa";
$_SESSION["resapris"]="0";

}

if ($_POST['resa'] == 'startmal') {

foreach($pdo->query( 'SELECT * FROM Tjanster where TjanstID=06' ) as $row){

$_SESSION["resa"]=$row['Tjanstnamn'];
$_SESSION["resapris"]=$row['Pris'];
}
}

else if ($_POST['resa'] == 'malstart') {

foreach($pdo->query( 'SELECT * FROM Tjanster where TjanstID=07' ) as $row){

$_SESSION["resa"]=$row['Tjanstnamn'];
$_SESSION["resapris"]=$row['Pris'];
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
	max-width:1700px;
	min-width:1600px;
    padding-bottom: 100px;
    position: absolute;
	
		
	}
	.pure-table {
	width: 300px;
	border:none;
	}
	
	.pure-table td{
border:none!important;
	}
	
	
<!-- styling för kundvangn headning!-->

#sticky {
	
  margin-top: 100px!important;
    padding: 0.5ex;

    background-color: #333;
    color: #fff;
    font-size: 2em;
    border-radius: 0.5ex;
}

#sticky.stick {
	max-width: 25%;
    margin-top: 70px!important;
    position: fixed;
    top: 0;
    z-index: 10000;
    border-radius: 0 0 0.5em 0.5em;
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
	
	td.empty{
		border-left: none!important;
		background: none!important;
		padding: 0px;
	
	}
	
	th.empty{
		border: none!important;
		background: none!important;
	 padding-left: 35px;
	}
		
		
		table.table10{
	color: white;
	font-family: Helvetica, Arial, sans-serif; /* Nicer font */
	width: 650px;
    border-collapse: collapse;
	collapse; border-spacing: 0;
	text-shadow: 2px 2px 15px black;
	font-size: 120%;
	margin-top: 40px;
	width: 550px;
	}
	
	table.table10 td{
	background: none;
    border: none !important;
	}
	table.table10 tr{
		
	border-bottom: 1px solid #ccc; 
	}
		table.table10 th{
		  border: none !important;
		background: none;

	}
	
		table.table11{
	color: balck;
	font-family: Helvetica, Arial, sans-serif; /* Nicer font */
	width: 500px;
    border-collapse: collapse;
	collapse; border-spacing: 0;

	font-size: 120%;
	}
	
	table.table11 td{
	background: none;
   border: none !important;
	}
	table.table11 tr{
		
	 border-bottom: 1px solid #ccc;
	}
		table.table11 th{
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
	.tabortknapp {
	
width:30px;
height:30px;
display:block;
text-transform:uppercase;
text-decoration:none;
color:#fff;
font-family:"Tahoma", Helvetica, sans-serif;
text-align:center;
font-size:18px;
line-height:1.4em;
border-color: #1472ad;
background-color: #F00;
background-image: -webkit-gradient(linear, left top, left bottom, from(#F00), to(#cc0000));
background-image: -webkit-linear-gradient(top, #F00, #cc0000);
background-image: -moz-linear-gradient(top, #495BC2, #3980bd);
background-image: -o-linear-gradient(top, #F00, #cc0000);
background-image: linear-gradient(to bottom, #B8BBE6, #2c81a2);
box-shadow:0px 0px 2px 0px #666;
-moz-box-shadow:0px 0px 2px 0px #666;
-webkit-box-shadow:0px 0px 2px 0px #666;
border-radius:50%;
-moz-border-radius:50%;
-webkit-border-radius:50%;
text-indent:1px;
font-weight:bold;

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
		margin-top:3%;
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
	
	.mainboka{
		
	background-image: url("bilder/header.jpg");
	height: 400px;
	width: 100%; 
	background-size:cover
    position: relative;
	background-size: 100% 100%;

	}
	
	.maintext1{
	
	position:relative;
	opacity:1;
	top:150px;
	width: 970px;
	height: 100px;
	margin: auto;
	color: white;
	text-shadow: 2px 2px 5px black;

}



	.maintext4{
	
	position:relative;

	top:180px;
	width: 500px;
	margin: auto;
	float: left;
	margin-left: 35%;
	margin-right: auto;
	color: white;
	text-shadow: 2px 2px 5px black;

}
	.maintext5{
	
	position:relative;
margin-right:10%;
	top:180px; 
	width: 300px;
	
display:none; 
	float: right;
	color: white;
	text-shadow: 2px 2px 5px black;

}

h3 {
	font-family: Montserrat,sans-serif;
    font-style: normal;
    font-variant: normal;
    font-weight: 700;
    letter-spacing: 1px;
    line-height: 1.2em;
    text-transform: none
	font-size: 37px;
	margin:0 px;
	margin-top:0px;
    font-size: 99px!important;
    letter-spacing: -5px!important;
	text-align: center;
		

 }
 h7 {
	font-family: Montserrat,sans-serif;
    font-style: normal;
    font-variant: normal;
    font-weight: 300;
    letter-spacing: normal;
    line-height: 1.2em;
    text-transform: none
	font-size: 30px;
	margin:0 px;
	margin-top:0px;
    font-size: 69px!important;

	
		color: white;
			text-shadow: 2px 2px 5px black;

 }
  h10 {
	font-family: Montserrat,sans-serif;
    font-style: normal;
    font-variant: normal;
    font-weight: 700;
    letter-spacing: 1px;
    line-height: 1.2em;
    text-transform: none

	margin:0 px;
	margin-top:0px;
    font-size: 20px!important;
	color: white;

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
      border-color: #24BCF4;
      top: 15px;;
    
  }
  .progressbar li.active + li:after {
      background-color: #24BCF4;
      top: 15px;;
  }


.sidbild1 {
background-repeat: no-repeat;
  background-position: center center;
   background-size: cover;
	background-image: url("bilder/gel.jpg");
  width: 100%;
max-width: 510px;
 margin-right:20px;
  overflow: hidden;
 

}

.bildtext {
	background: -moz-linear-gradient(top, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
	width: 100%;
   height: 100px;
  top: 100px;
  text-align: center;
}

.bildtext3 {
	
	text-shadow: 2px 2px 5px black;
	width: 100%;

 
  display:table-cell;
  color: white;
  vertical-align: bottom;
  text-align: center;
}
.sidbild2 {
  width: 100%;
 max-width: 510px;

  overflow: hidden;


 background-image: url("bilder/buss.jpg");
   background-repeat: no-repeat;
  background-position: center center;
   background-size: cover;
}
.vallabild {
	   background-repeat: no-repeat;
  background-position: center center;
	background-image: url("bilder/valla1.png");
  width: 100%;
  max-width: 800px;
  
  overflow: hidden;
 margin-top: 2%;



}

.accordion {
  width: 100%;
max-width: 760px;
  height: 380px;
  overflow: hidden;

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

 
  width: 100%;
  height: 100%;
  z-index:3;
 
 vertical-align: bottom;
   white-space: nowrap;

}




.accordion ul li div h2 {
 	font-family: Montserrat,sans-serif;
	font-style: normal;
    font-variant: normal;
    font-weight: 300;
    letter-spacing: -1px;
  text-overflow: clip;
  font-size: 28px;
  text-transform: uppercase;
  margin-bottom: 2px;
   padding-top: 15px;
  color: white;
  z-index:3;
  padding-left:15px;
  margin-top: 0px;
text-shadow: 2px 2px 5px black;

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
	
	font-size:60px;
	padding-left: 20px;
	top:300px;

}

.accordion ul li div h5{
		position: absolute;
	
		
	font-size: 20px;
	padding-left: 160px;
	top:310px;
}
.accordion ul li:nth-child(1) {        background: linear-gradient(to bottom right,#EBEBE3, white);; }

.accordion ul li:nth-child(2) {    background: linear-gradient(to bottom right,#EBEBE3, white); }

.accordion ul li:nth-child(3) {    background: linear-gradient(to bottom right,#EBEBE3, white); }

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

<div class="maintext1">
<h3> Boka ditt evenemang </h3>
</div>
<div class="maintext4">
<h6 > Boka evenemang </h6>
</div>
<div class="maintext5">
<h6 > Välj tjänst </h6>
</div>
</div>
<div class="bar">
      <ul class="progressbar">
          <li class="active">Evenemang</li>
          <li class="active">Tjänster</li>
          <li class="active">Utcheckning</li>
          
  </ul>
 </div>
    <div class="collapsboka">
    <div class="order">
	

  <div id="sticky-anchor" ></div>

<div id="sticky" style="right: 50px;">
<table class=table4>

<td class=headertd2> Din beställning </td>

</tr> 
</table>
<table class =pure-table style="width: 400px;" >
<tr style="border-bottom: 1px solid #eee;">
<td  style="font-weight: 600;" width=60%;> EVENEMANG </td>
<td colspan= 2 width=40%; style="font-weight: 600;"> Pris </td>
</tr>
<tr >
<td> <?PHP print $_SESSION["evenemang"]?> </td>
<td colspan= 2 > <?PHP print $_SESSION["evenemangpris"]?> SEK </td>

</tr>
<tr style="border-bottom: 1px solid #eee;" >
<td style="font-weight: 600;" colspan= 3> TJÄNSTER </td>

</tr>
<tr >
<td> 	<?PHP print $_SESSION["valla"] ?> </td> 
<td style="border-right: none" > 	<?PHP print $_SESSION["vallapris"]  ?> SEK</td> 
<FORM method ="post" >
 <?PHP if ($_SESSION["valla"] == 'Motionär' || $_SESSION["valla"] == 'Race' || $_SESSION["valla"] == 'Elit race') {
	echo "<td style='border-left: 0px;' >";
	echo "<button name='valla' class='tabortknapp' type='submit' value='ingenvalla'>";
	echo "x";
	echo "</button>";
	echo "</td>";
 }
 else{
		echo "<td style='border-left: 0px;'></td>";
 }
?>  
</FORM >
</tr>

<tr 	>

<td> <?PHP print $_SESSION["langning"]?>  </td> 
<td style="border-right: none"> 	<?PHP print $_SESSION["langningpris"] ?> SEK </td> 

<FORM method ="post" >
 <?PHP if ($_SESSION["langning"] == 'Halv langning' || $_SESSION["langning"] == 'Hel langning') {
	echo "<td style='border-left: 0px;' >";
	echo "<button name='langning' class='tabortknapp' type='submit' value='ingenlangning'>";
	echo "x";
	echo "</button>";
	echo "</td>";
 }
  else{
		echo "<td style='border-left: 0px;'></td>";
 }
?>  
</FORM >
</tr>

<tr style="border-bottom: 1px solid #eee;">
<td> <?PHP print $_SESSION["resa"]?>  </td> 
<td style="border-right: none"> <?PHP print $_SESSION["resapris"]?>  SEK </td> 
<FORM method ="post" >
 <?PHP if ($_SESSION["resa"] == 'Mål till start' || $_SESSION["resa"] == 'Start till mål'){
	echo "<td style='border-left: 0px;'>";
	echo "<button name='resa' class='tabortknapp' type='submit' value='ingenresa'>";
	echo "x";
	echo "</button>";
	echo "</td>";
 }
  else{
		echo "<td style='border-left: 0px;'></td>";
 }
?>  
</FORM >
</tr>
<tr>
<td style="font-weight: 600;"> TOTALPRIS </td>
<?PHP $_SESSION["totalpris"] = $_SESSION["resapris"] + $_SESSION["langningpris"] + $_SESSION["vallapris"] +  $_SESSION["evenemangpris"] ?> 
<td colspan= 2 style="font-weight: 600;"> <?PHP print $_SESSION["totalpris"]?>  SEK  </td>
</tr>
 
 <tr>
<td colspan=3  class="knapp" style="border: none" > <a href="evenemang3.php"><button class="btn btn-info btn-lg"  style="width:399px;" ><h10> < TILLBAKA</h10></button></a></td> 
</tr>
<tr>
<td colspan=3  class="knapp" style="border: none" > <a href="utcheckningev.php"><button class="btn btn-info btn-lg"  style="width:399px;" ><h10>TILL UTCHEKNING ></10></button></a></td> 
</tr>
</table>
 </div>
 </div>
 
<div style="float:left; margin-top: 5%;" >
<div class="sidbild1"> 

<div class="bildtext"><h7>Langning</h7> </div>
</div>
<div class="accordion" style="width:510px;  margin-right:30px;">
  <ul>
   
     <li style="z-index: 8;">
      <div ;> 
        <div style=" height:20%; background: #F9F9F9;">
	    <?php
		foreach($pdo->query( 'SELECT * FROM Tjanster where TjanstID=04' ) as $row){
			
?>
        <h2>  <?php print $row['Tjanstnamn']?>  </h2> 
  
		
		<table class="table11">
		<tr>
		<th width=260px;>Infomation om Tjänst</th> <th>Halv langning inehåller</th> 
		</tr>
		<tr style="white-space: normal;border-bottom: none; ">
		<?php
		 echo "<td  > ".$row['Beskrivning']."</td>";
		 ?>
		
	
		 <td > 
	- 3 gel<br>- 2 tune bars
 </td>
		 
		
		



<tr style="border-bottom: none;"  >
<td></td>
	<FORM name ="form6" method ="post" >
	
<td class="knapp" style="padding-top: 130px; "><button name="langning" class="btn btn-info btn-lg" style="width: 180px;;" type="submit" value="halvlangning">Lägg till</button></td>

</FORM>

</tr >


		</table>
        <h4><?php echo "<td width=15%> ".$row['Pris']."</td>"; }?></h4>
		<h5>sek</h5>
		
		</div>
		</div>
	</li>
    <li style="z-index: 8;">
      <div ;> 
        <div style=" height:20%; background: #F9F9F9;">
	    <?php
		foreach($pdo->query( 'SELECT * FROM Tjanster where TjanstID=05' ) as $row){
			
?>
        <h2>  <?php print $row['Tjanstnamn']?>  </h2> 
  
		
		<table class="table11">
		<tr>
		<th width=260px;>Infomation om Tjänst</th> <th style="
    padding-left: 0px;
" >Hel langning inehåller</th> 
		</tr>
		<tr style="white-space: normal; border-bottom: none; ">
		<?php
		 echo "<td  > ".$row['Beskrivning']."</td>";
		 ?>
		
	
		 <td > 

	- 2 gel<br>- 3 liquid <br>  - 4 tune bars
 </td>
		 
		
		



<tr style="border-bottom: none;"  >
<td></td>
	<FORM name ="form6" method ="post" >
	
<td class="knapp" style="padding-top: 105px; "><button name="langning" class="btn btn-info btn-lg" style="width: 180px;;" type="submit" value="hellangning">Lägg till</button></td>

</FORM>

</tr >


		</table>
        <h4><?php echo "<td width=15%> ".$row['Pris']."</td>"; }?></h4>
		<h5>sek</h5>
		
		</div>
		</div>
	</li>
  </ul>
</div>
</div>

<div style="margin-top: 5%;">
<div class="sidbild2"> 
<div class="bildtext"><h7>Bussresa</h7> </div>
 </div>
<div class="accordion" style="width:510px;">

  <ul>
   
     <li style="z-index: 8;">
      <div > 
        <div style=" height:20%; background: #F9F9F9;">
	    <?php
		foreach($pdo->query( 'SELECT * FROM Tjanster where TjanstID=06' ) as $row){
			
?>
        <h2>  <?php print $row['Tjanstnamn']?>  </h2> 
  
		
		<table class="table11">
		<tr>
		<th width=260px;>Infomation om Tjänst</th> <th style="
    padding-left: 0px;
">Halv langning inehåller</th> 
		</tr>
		<tr style="border-bottom: none; white-space: normal; ">
		<?php
		 echo "<td  > ".$row['Beskrivning']."</td>";
		 ?>
		
	
	
		
		



<tr style="border-bottom: none;"  >
<td></td>
	<FORM name ="form6" method ="post" >
	
<td class="knapp" style="padding-top: 130px; "><button name="resa" class="btn btn-info btn-lg" style="width: 180px;;" type="submit" value="startmal">Lägg till</button></td>

</FORM>

</tr >


		</table>
        <h4><?php echo "<td width=15%> ".$row['Pris']."</td>"; }?></h4>
		<h5>sek</h5>
		
		</div>
		</div>
	</li>
	
    <li style="z-index: 8;">
      <div ";> 
        <div style="height:20%; background:#F9F9F9;">
	    <?php
		foreach($pdo->query( 'SELECT * FROM Tjanster where TjanstID=07' ) as $row){
			?>
        <h2>  <?php print $row['Tjanstnamn']?>  </h2> 
  
		
		<table class="table11">
		<tr>
		<th width=260px;>Infomation om Tjänst</th> <th style="
    padding-left: 0px;
" >Hel langning inehåller</th> 
		</tr>
		<tr style="border-bottom: none; white-space: normal; ">
		<?php
		 echo "<td  > ".$row['Beskrivning']."</td>";
		 ?>
		
	
		 <td > 

 </td>
		 
		
		



<tr style="border-bottom: none;"  >
<td></td>
	<FORM name ="form6" method ="post" >
	
<td class="knapp" style="padding-top: 105px; "><button name="resa" class="btn btn-info btn-lg" style="width: 180px;;" type="submit" value="malstart">Lägg till</button></td>

</FORM>

</tr >


		</table>
        <h4><?php echo "<td width=15%> ".$row['Pris']."</td>"; }?></h4>
		<h5>sek</h5>
		
		</div>
		</div>
	</li>
  </ul>
</div>
</div>


<div class="vallabild"> 
<div class="bildtext"><h7>Valla</h7> </div>
<div class="bildtext3"><p>*Vallningservice erbjuds endast i samband med skidevenemng</p> </div>
</div>
<div class="accordion">
  <ul>
    <li style="z-index: 6;">
      <div> 
        <div style=" height:20%; background: #F9F9F9;">
	    <?php
		foreach($pdo->query( 'SELECT * FROM Tjanster where TjanstID=01' ) as $row){
			
?>
        <h2>  <?php print $row['Tjanstnamn']?>  </h2> 
  
		
		<table class="table11" style="width: 600px;">
		<tr>
		<th width=240px;>Infomation om Tjänst</th> <th>Motionär inehåller</th> 
		</tr>
		<tr style="border-bottom: none; white-space: normal; ">
		<?php
		 echo "<td  > ".$row['Beskrivning']."</td>";
		 ?>
		
	
		 <td > 
	- Stålsickling <br>
	- Rill 	<br>  - Fäste
 </td>
		 
		
		



<tr style="border-bottom: none;"  >
<td></td>
		<FORM  method ="post" >
		
<?php 
$_SESSION["evenemangdatum"] - 172800;
if ( $_SESSION['evenemangdatum'] > $cDate){
	echo "<td class='knapp' style='padding-top: 130px; padding-left: 15px;' ><button name='valla' disabled class='btn btn-info btn-lg disabled' style='width: 300px;' type='submit' value='elit'>Försent</button></td>";
}
else{
if ($_SESSION["evenemang"] == 'Skidlopp'){
echo "<td class='knapp' style='padding-top: 130px; padding-left: 15px;'><button name='valla' class='btn btn-info btn-lg' style='width: 300px;' type='submit' value='motionar'>Lägg till</button></td>";
}
else {
	echo "<td class='knapp' style='padding-top: 130px; padding-left: 15px;'><button name='valla' disabled class='btn btn-info btn-lg disabled' style='width: 300px;' type='submit' value='motionar'>Ej skidevenemang</button></td>";
}
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
     <li style="z-index: 8;">
      <div> 
        <div style=" height:20%; background: #F9F9F9;">
	    <?php
		foreach($pdo->query( 'SELECT * FROM Tjanster where TjanstID=02' ) as $row){
			
?>
        <h2>  <?php print $row['Tjanstnamn']?>  </h2> 
  
		
		<table class="table11" style="width: 600px;">
		<tr>
		<th width=240px;>Infomation om Tjänst</th> <th>Racer inehåller</th> 
		</tr>
		<tr style="border-bottom: none; white-space: normal; ">
		<?php
		 echo "<td  > ".$row['Beskrivning']."</td>";
		 ?>
		
	
		 <td > 
	- Stålsickling <br>
	- Rill <br>- FPC <br>  - Fäste
 </td>
		 
		
		



<tr style="border-bottom: none;"  >
<td></td>
	<FORM  method ="post" >
	
<?php 
$_SESSION["evenemangdatum"] - 172800;
if ( $_SESSION['evenemangdatum'] > $cDate){
	echo "<td class='knapp' style='padding-top: 100px; padding-left: 15px;'><button name='valla' disabled class='btn btn-info btn-lg disabled' style='width: 300px;' type='submit' value='elit'>Försent</button></td>";
}
else{
if ($_SESSION["evenemang"] == 'Skidlopp'){
echo "<td class='knapp' style='padding-top: 100px; padding-left: 15px;'><button name='valla' class='btn btn-info btn-lg' style='width: 300px;' type='submit' value='race'>Lägg till</button></td>";
}
else {
	echo "<td class='knapp' style='padding-top: 100px; padding-left: 15px;'><button name='valla' disabled class='btn btn-info btn-lg disabled' style='width: 300px;' type='submit' value='race'>Ej skidevenemang</button></td>";
}
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
    <li style="z-index: 8;">
      <div> 
        <div style=" height:20%; background: #F9F9F9;">
	    <?php
		foreach($pdo->query( 'SELECT * FROM Tjanster where TjanstID=03' ) as $row){
			
?>
        <h2>  <?php print $row['Tjanstnamn']?>  </h2> 
  
		
		<table class="table11" style="width: 600px;">
		<tr>
		<th width=240px;>Infomation om Tjänst</th> <th>Elit racer inehåller</th> 
		</tr>
		<tr style="border-bottom: none; white-space: normal; ">
		<?php
		 echo "<td  > ".$row['Beskrivning']."</td>";
		 ?>
		
	
		 <td > 
	- Stålsickling <br>
	- Rill <br>- FPC <br> - High Velocity Cera <br>  - Fäste
 </td>
		 
		
		



<tr style="border-bottom: none;"  >
<td></td>
	<FORM  method ="post" >
<?php 
$_SESSION['evenemangdatum'] - 172800;
if ( $_SESSION['evenemangdatum']  > $cDate){
if ($_SESSION["evenemang"] == 'Skidlopp'){
echo "<td class='knapp' style='padding-top: 80px; padding-left: 15px;'><button name='valla' class='btn btn-info btn-lg' style='width: 300px;' type='submit' value='elit'>Lägg till</button></td>";
}
else {
	echo "<td class='knapp' style='padding-top: 80px; padding-left: 15px;'><button name='valla' disabled class='btn btn-info btn-lg disabled' style='width: 300px;' type='submit' value='elit'>Ej skidevenemang</button></td>";
}}
else{


	echo "<td class='knapp' style='padding-top: 55px; padding-left: 80px;'><button name='valla' disabled class='btn btn-info btn-lg disabled' style='width: 300px;' type='submit' value='elit'>Försent</button></td>";
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
  </ul>
</div>

<?php
print $cDate;
echo "LLLL";
print $_SESSION["evenemangdatum"];

  ?>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>