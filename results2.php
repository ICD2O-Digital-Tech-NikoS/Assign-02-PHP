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

  function calculate_average_backend($some_string) {
  // declaring variable for test scores

  // split creates an array of strings, and counts the number of strings and saves it as a variable called numberOfPluses, so now that number of strings(the amount of test scores the user inputs) is saved as a variable called numberOfPluses and can be called.
    $results_as_array= explode("+", $some_string);

    $number_of_pluses = count($results_as_array); 

  // if the user inputs no test scores, it will just display 0
  if ($number_of_pluses == 0) return 0;

  // does final calculation, evaluates and calculates the sum of the test scores, and divides it by the number of test scores the user inputted
  $result = eval('return '.$some_string.';')/$number_of_pluses;

  // closes function and returns the result
  return $result;

  }
?>

<?php
// function to calculate average
function calculate_average() {
  // declaring variable for test scores
  $test_scores = $_POST["testscores"];
  $avg=calculate_average_backend($test_scores);
  return $avg ;

}
?>

<h2>Result:</h2>
<p>Your test average is <?php echo round(calculate_average()) ?> %.</p>
