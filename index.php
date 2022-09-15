<?php include("scripts.php"); ?>
<?php require_once("read.php"); ?>
<?php require_once("create.php"); ?>
<?php require_once("koneksi_db.php"); ?>


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
        <a class="navbar-brand text-white mb-0 h1 pr-5" href="index.php">Assessment Project - Developer - <?php echo $_SESSION['username'];?></a>
        
        <form action="user_generate_key.php" method="POST">
          <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>">
          <input type="hidden" name="password" value="<?php echo $_SESSION['password'];?>">
          <button type="submit" name="submit" value="generate_key_token" class="btn btn-warning">Generate API key / Token</button>
        </form>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <a class="btn btn-primary" href="logout.php">Logout</a>
          </li>
        </ul>
      </nav>
    </div>

    <?php
    if (isset($_SESSION['username'])){
      if(isset($_SESSION['user_token'])){
      $token_message = $_SESSION['user_token'];
      unset($_SESSION['user_token']);
      unset($_SESSION['authentication']);
      }
    }else{
      header("Location: login.php");
    }
    ?>

<div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <?php echo $token_message ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h4>Google Sheet API - Table (Range A2:A30)</h4>
        <table class="table table-hover table-bordered">
          <thead class="text-center">
            <tr>
              <th width="30%">Number of Row</th>
              <th>Column Data</th>
            </tr>
          </thead>
          <tbody class="text-center">

          <?php
          $no = 0;

          if(!isset($values)){
            echo  "<tr>";
            echo  "<td colspan='2' class='text-center'>No Data Available</td>";
            echo  "</tr>";
          }else{

            for($i=0; $i < count($values); $i++){
                $no += 1;
                echo  "<tr>";
                echo  "<th>" .$no. "</th>";
                echo  "<td>" .$values[$i][0]. "</td>";
                echo  "</tr>";
            }

          }
          ?>  

          </tbody>
        </table>
        </div>

        <div class="col-md-6">
          <?php echo $message; ?>

          <h4>Form Create Data</h4>
            <form action="" method="POST">
              <div class="form-group">
                <label for="exampleInputPassword1">Create Data :</label>
                <input type="text" class="form-control" name="data" placeholder="Add new data">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <h5 class="pt-5">Get JSON API data</h4>
            <span class="font-italic">with token check from database user</span>
            </br>
            <a href="get_api_data_sheet.php" class="btn btn-md btn-success mt-2">Get all Data</a>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- <?php print_r($values); ?> -->
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>