<?php
//Allow the config
define('__CONFIG__',true);
//Require the config
require_once "inc/config.php"; ?>

<!DOCTYPE html>
<html lang= "en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="robots" content="follow"/>

  <title>Kok An Recycle</title>

  <base href="/" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="web/PHP-Login-System/css/index.css" type="text/css" />



</head>

<body>
  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-4">
      </div>
    </div>
  </div>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-12 text-center">
        <h1>Welcome</h1>
        <?php
        echo "Today is: ";
        echo date("Y m d");
        ?>
        <br>
        <br>
        <div>
          <p>
            <a href="web/PHP-Login-System/login.php">Login</a>
            <a href="web/PHP-Login-System/register.php">Register</a>
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="container text-center" id="footer">
    <div class="row content">
      <div class="col-sm-12 text-center">
        <p>Kok An Recycle</p>
      </div>

      <?php require_once "inc/footer.php"; ?>
    </body>
    </html>
