<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Chekca ut</title>
    <link rel="stylesheet" type="text/css" href="app.css">
     <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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

  <body background="bilder/search.jpg" style="background-size:cover; background-repeat: none;">

    <!-- Header -->

   <?php require_once('includes/header.php'); ?>

    <!-- End of header -->

    <div class="seperator" style="margin-top:200px;"></div>


 <?php 

    require_once('connection.php');

    $search=$_POST['search'];
// Kontrollerar så det sökta ordet finns med i alla aliens tillhörande attribut
$query = $pdo->prepare("SELECT * from Evenemang  where Tavlingsnamn LIKE '%$search%' OR Evenemanginfo LIKE '%$search%' OR Datum LIKE '%$search%' OR EvenemangsID LIKE '%$search%' OR Pris LIKE '%$search%' LIMIT 0 , 10");
$query->bindValue(1, "%$search%");
$query->execute();


// Visar sökresultat.
         if (!$query->rowCount() == 0) {

          echo "<h2 style='margin-bottom:20px; font-size:40px; text-align:center;'>Tävlingsstatistik</h2>";

  echo "<table border='1' style='margin:0 auto; height:120px; text-align:center;'>";
    echo "<tr style='background-color:transparent; font-size: 20px; color:black;'>";
      echo "<th style='padding: 5px 15px;'>EvenemangsID</th>";
      echo "<th style='padding: 5px 15px;'>Tavlingsnamn</th>";
      echo "<th style='padding: 5px 15px;'>Antalstartplatser</th>";
      echo "<th style='padding: 5px 15px;'>Antaldeltagare</th>";
      echo "<th style='padding: 5px 15px;'>Datum</th>";
      echo "<th style='padding: 5px 15px;'>Pris</th>";
      echo "<th style='padding: 5px 15px;'>Evenemanginfo</th>";
      echo "<th style='padding: 5px 15px;'>Biljettstatus</th>";
    echo "</tr>";



            while ($results = $query->fetch()) { // Lägger resultaten i egna tabellrader
              
            echo "<td style='background-color:transparent; color:black;'> ".$results['EvenemangsID']."</td>";
            echo "<td style='background-color:transparent; color:black;'> ".$results['Tavlingsnamn']."</td>";
            echo "<td style='background-color:transparent; color:black;'> ".$results['Antalstartplatser']."</td>";
            echo "<td style='background-color:transparent; color:black;'> ".$results['Antaldeltagare']."</td>";
            echo "<td style='background-color:transparent; color:black;'> ".$results['Datum']."</td>";
            echo "<td style='background-color:transparent; color:black;'> ".$results['Pris']."</td>";
            echo "<td style='background-color:transparent; color:black;'> ".$results['Evenemanginfo']."</td>";
            echo "<td style='background-color:transparent; color:black;'> ".$results['Biljettstatus']."</td>";
            echo "</td></tr>";

            }
  echo "</table>";    


        } 

        else {
            echo "<p style='font-color:white; font-size:25px;'>Hittade inga resultat!</p>";
        }
?>
