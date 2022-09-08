<?php include("scripts.php"); ?>
<?php include("read.php"); ?>
<?php include("create.php"); ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dikot Harahap</title>
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
      <nav class="navbar navbar-expand-lg text-white">
        <h4 class="navbar-brand" href="#">Assessment Project - Developer - Dikot Harahap</h4>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse">
            <div class="navbar-nav">
              <a class="nav-item nav-link active text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
            </div>
          </div>
      </nav>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <h4>Google Sheet API - Table (Range A2:A30)</h4>
        <table class="table table-hover border">
          <thead>
            <tr>
              <th scope="col">Number of Row</th>
              <th scope="col">Column Data</th>
            </tr>
          </thead>
          <tbody>

          <?php
          $no = 0;

          for($i=0; $i < count($values); $i++){
              $no += 1;
              echo  "<tr>";
              echo  "<th>" .$no. "</th>";
              echo  "<td>" .$values[$i][0]. "</td>";
              echo  "</tr>";
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
        </div>
      </div>
    </div>

    <div class="container">
      <?php print_r($values); ?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>