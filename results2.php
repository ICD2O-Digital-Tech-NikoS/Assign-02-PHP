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
<?php echo "Your test average is " . round(calculate_average()) . "%.";?>
