<?php
//Allow the config
define('__CONFIG__',true);
//Require the config
require_once "inc/config.php";

?>

<!DOCTYPE html>
<html lang= "en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="robots" content="follow"/>

  <title>Recycle</title>

  <base href="/" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



</head>

<body>
  <div class ="container">
    <h1>Register</h1>

    <!-- <form action="/action_page.php"> -->
    <form class ="form-horizontal js-register">
      <div class="form-group">
        <div class="row">
          <div class="col-sm-4">
            <label for="area">Area: </label>
            <input type="text" class="form-control" name="area" require ='required' placeholder="Enter Company Area..">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-sm-4">
            <label for="username">Username: </label>
            <input type="text" class="form-control" name="username" require ='required' placeholder="Enter Username..">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-sm-4">
            <label for="email">Email: </label>
            <input type="email" class="form-control" name="email" require ='required' placeholder="Enter Email..">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-sm-4">
            <label for="password">Password: </label>
            <input type="password" class="form-control" name="password" require ='required' placeholder="Enter Password..">
          </div>
        </div>
      </div>

      <div class= "alert alert-danger js-error" style='display:none;'></div>


      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>

      <button type="submit" class="btn btn-default" name="submit" value ="submit">Register</button>

    </form>
  </div>

  <?php require_once "inc/footer.php"; ?>
</body>
</html>
