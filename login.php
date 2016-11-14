<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Logga in</title>
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

        .wrapper {    
  margin-top: 80px;
  margin-bottom: 20px;
}

.form-signin {
  max-width: 420px;
  padding: 30px 38px 66px;
  margin: 0 auto;
  background-color: #eee;
  border: 3px dotted rgba(0,0,0,0.1);  
  }

.form-signin-heading {
  text-align:center;
  margin-bottom: 30px;
}

.form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
}

input[type="text"] {
  margin-bottom: 0px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}



    </style>

  </head>

</head>
<body>

<?php require_once('includes/header.php'); ?>


  <div class="clearfix" style="margin-bottom:150px;"></div>

 <div class = "container">
  <div class="wrapper" style="width:45%; margin:0 auto;">
    <form action="" method="post" name="Login_Form" class="form-signin">       
        <h3 class="form-signin-heading">Välkommen tillbaka! Logga in</h3>
        
        <input type="text" class="form-control" name="Email" placeholder="Användarnamn(E-mail)" required="" autofocus="" />
        <input type="password" class="form-control" name="Losenord" placeholder="Lösenord" required=""/>

        <?php


    if(isset($_POST['login'])) {
        include_once("db.php");

        $Email = strip_tags($_POST['Email']);
        $Losenord = strip_tags($_POST['Losenord']);

        $Email = stripslashes($Email);
        $Losenord = stripslashes($Losenord);
        
        $Email = mysqli_real_escape_string($db, $Email);
        $Losenord = mysqli_real_escape_string($db, $Losenord);

        $Losenord = md5($Losenord);

        $sql = "SELECT * FROM Kund WHERE Email='$Email' LIMIT 1";
        $query = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($query);
        $KundID = $row['KundID'];
        $db_Losenord = $row['Losenord'];

        if($Losenord == $db_Losenord) {
            $_SESSION['Email'] = $Email;
            $_SESSION['KundID'] = $KundID;
          

           header("Location: mina_sidor.php");


        } else {
            
      $message = "Fel uppgifter, testa igen";
echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }
?>       
       
        <button class="btn btn-lg btn-primary btn-block"  name="login" value="Login" type="Submit">Logga in</button> 
        <a href="#" class="forgot-password" style="margin-top:20px; text-align: center;">
                Glömt lösenord?
            </a>       
    </form>     
  </div>
</div>


</body>
</html>