<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Starter Template for Bootstrap</title>

<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    
    <link href="css\bootstrap.min.css" rel="stylesheet">
    
  </head>

  <body>
  <?php require_once 'process.php';  ?>
  <div class="container">
    <?php
    // DB connection
    $mysqli = new mysqli('localhost', 'mysqluser', 'Password', 'crud') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM DATA") or die($mysqli->error);
     
//    pre_r($result);
//    pre_r($result->fetch_assoc());
  ?>

  <div class="row justify-content-center">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Location</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
      
      <?php 
        while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?php echo $row['name']; ?> </td>
          <td><?php echo $row['location']; ?> </td>
          <td>
          <a href="index.php?edit=<?php echo $row['id']; ?>"
          class="btn btn-info">Edit</a>
          <a href="process.php?delete=<?php echo $row ['id']; ?>"
          class="btn btn-danger">Delete</a>
          </td>
        </tr>
      <?php endwhile; ?>
      </table>
      </div>

  <?php

    function pre_r ($array){
        echo '<pre>';
        print_r($array);
        echo '<pre>';
    } 
    
    ?>
 
 
  <div class="container">
<div class="row justify-content-center">
<form action="process.php" method="post">
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" value="Enter your location">
    </div>
    <div class="form-group">
    <label for="location">Location:</label>
    <input type="text" name="location" value="Enter your location" class="form-control">
    </div>
    <div class="form-group">
    <button type="submit" name="save" class="btn btn-primary">Save</button>
    </div>
</form>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
  </div>
</html>
