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

    <!--jQuery Library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- Latest compiled Javascript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class ="container">
      <h1>Admin Login</h1>


      <form action="/action_page.php">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-4">
              <label for="area">Area: </label>
              <input type="area" class="form-control" id="area" placeholder="Enter Company Area..">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-sm-4">
              <label for="Username">User Name: </label>
              <input type="Username" class="form-control" id="Username" placeholder="Enter Username..">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
              <div class="col-sm-4">
                <label for="password">Password: </label>
                <input type="password" class="form-control" id="password" placeholder="Enter Password..">
              </div>
            </div>
        </div>

        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>

        <button type="submit" class="btn btn-default">Login</button>

      </form>
    </div>


  </body>
</html>
