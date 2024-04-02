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
  // backend function not tied to any specific page that can be reused
  function calculate_average_backend($some_string) {

    // splits some_string every "+" into a new string in an array 
    $results_as_array= explode("+", $some_string);
    // counts number of strings in the array and saves it as a number
    $number_of_pluses = count($results_as_array); 

  // if the user inputs no test scores, it will just display 0
  if ($number_of_pluses == 0) return 0;

  // does final calculation, evaluates and calculates whatever is written in some_string, and then divides it by the number of pluses to get result or average if done correctly
  $result = eval('return '.$some_string.';')/$number_of_pluses;

  // closes function and returns the result
  return $result;

  }
?>

<?php
// function to calculate average utilizing html inputs
function calculate_average() {
  // declaring variable for test scores
  $test_scores = $_POST["testscores"];
  // plugs in variable test_scores into the backend function, the backend function replaces the placeholder "some_string" with the newly inputed variable test_scores, and plugs in the new data to complete the function and create the desired result
  $avg=calculate_average_backend($test_scores);
  return $avg ;

}
?>

<h2>Result:</h2>
<p>Your test average is <?php echo round(calculate_average(),1) ?> %.</p>
