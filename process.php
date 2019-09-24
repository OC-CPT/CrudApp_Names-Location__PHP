<?php


// DB connection
$mysqli = new mysqli('localhost', 'mysqluser', 'Password', 'crud') or die(mysqli_error($mysqli));

// Grab variables from the submit form
$name = $_POST['name'];
$location = $_POST['location'];
$saveBtn = $_POST['save'];

// Check if button was pressed and then submit data



if (isset($saveBtn)) {
    $mysqli->query("INSERT INTO data (name, location) VALUES ('$name', '$location')") or
    die ($mysqli->error);
}


?>