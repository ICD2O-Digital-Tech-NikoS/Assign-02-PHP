<?php

  // function to calculate average
  function calculate_average() {
    // declaring variable for test scores
    $test_scores = $POST_["testscores"];
    $my_result = calculate_average_backend($test_scores);
  }
?>
   <h3>Average:</h3>
Your test score average is <?php echo round($my_result) ?>%.


<?php

  function calculate_average_backend($some_string) {
  // declaring variable for test scores

  // split creates an array of strings, and counts the number of strings and saves it as a variable called numberOfPluses, so now that number of strings(the amount of test scores the user inputs) is saved as a variable called numberOfPluses and can be called.
  $number_of_pluses = $some_string.split('+')strlen();

  // if the user inputs no test scores, it will just display 0
  if ($number_of_pluses == 0) return 0;

  // does final calculation, evaluates and calculates the sum of the test scores, and divides it by the number of test scores the user inputted
  $result = eval($some_string)/$number_of_pluses;

  // closes function and returns the result
  return $result;

  }
?>
