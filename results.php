<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Grade Calculator">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Niko (original author: Ms Raffin)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Grade Calculator</title>
  </head>
</html>

<?php
  // get the test marks and test total from the textfields
  $testmark = $_POST['testmarks'];
  $testtotal = $_POST['testtotal'];

  // calculate percentage version of the test score
  $percentage = ($testmark/$testtotal)*100;
?>
<h3>Results:</h3>
<p>Your test score as a percentage is <?php echo round($percentage,1) ?>%.</p>


