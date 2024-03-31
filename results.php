<?php
  // get the wage and hous from the textfields
  $testmark = $_POST['testmarks'];
  $testtotal = $_POST['testtotal'];

  // calculate pay 
  $percentage = ($testmark/$testtotal)*100;
?>
<h3>Results:</h3>
Your test score as a percentage is <?php echo round($percentage) ?>%.


