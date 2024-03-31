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
  <body>
    <!-- php echo to print the html to the page -->
    <?php 
      echo "<h1>Grade Calculator</h1>";
      echo "<h3>Please enter the following:</h3>";
    ?>
    <!-- form to get hours worked and wage from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="testmarks">Test Mark:</label>
      <input type="text" id="testmarks" placeholder="Test Mark" name="testmarks"><br><br>
      <label for="testtotal">Test Total:</label>
      <input type="text" id="testtotal" placeholder="Test Total" name="testtotal"><br><br>
      <input type="submit" value="Calculate Percentage">
    </form>

      <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">			
        
      </iframe><br><br>

    <!-- form to get hours worked and wage from the user -->
    <form action="./results2.php" method="post" target="results">
      <label for="testscores">Test Scores:</label>
      <input type="text" id="testscores" placeholder="Test Scores" name="testscores"><br><br>
      <input type="submit" value="Calculate Average">
    </form>

      <!-- iframe for the results to show on the web page. -->
      <iframe id="average" name="average">			

      </iframe>
     
  </body>
</html>