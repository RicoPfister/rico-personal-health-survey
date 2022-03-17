<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fit and Well</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <link rel="stylesheet" href="CSS/survey.css">

</head>

<body class="d-flex flex-column min-vh-100">

</head>

<body>

<!-- navbar -->

<?php
include 'PHP/header.php'
?>

<!-- survey-container -->

<div class="container">

<div class="row justify-content-center">
  <div class="col-6">
    <h3 class="navSpace mb-5">Umfrage zur persönliche Gesundheit<h3>
  </diV>
</div>

<?php
session_start();

// check and delete GET session

if($_GET["deleteData"]){
  $_SESSION = [];
  $_GET = [];
}

if($_GET["age"] && !$_GET["q1"]){
  $_SESSION["age"] = $_GET["age"];
}

// !!! fragliche Art der GET/POST-Benutzung !!!

$_SESSION += $_GET;

// check and create include -->

if($_SESSION["q10"]!="") {include 'PHP/survey_evaluation.php';}
else if ($_SESSION["age"]) {include 'PHP/survey_collection.php';}
else {include 'PHP/survey_starting.php';}

?>

</div>

<!-- Footer -->
<?php
include 'PHP/footer.php';
?>

</body>

</html>