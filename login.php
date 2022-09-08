<?php require_once("koneksi_db.php"); ?>
<?php include("login_script.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Assessment Project</title>
    <style>
      nav {
        background-color: blueviolet;
      }
      table thead tr th{
        background-color: blueviolet;
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand text-white mb-0 h1" href="index.php">Assessment Project - Developer - Dikot Harahap</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      </nav>
    </div>

    <div class="container mt-5">
      <div class="row">
        <dic class="col-md-3"></dic>
        <dic class="col-md-6 bg-light p-5">
            <?php echo "$error1"; ?>
            <?php echo "$error2"; ?>
            <?php echo "$error3"; ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="username" name="username" class="form-control" id="" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="" placeholder="Password">
            </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
        </dic>
        <dic class="col-md-3"></dic>
      </div>
   

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>