<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Grade Calculator">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Niko (original author: Ms Raffin)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Grade Calculator</title>
  </head>
  <body>
    <!-- mdl script file -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
      <!-- php echo to print the html to the page -->
    <?php  
      echo "<h1>Grade Calculator</h1>";
    ?>
    <div id="h3other">
      <?php
        echo "<h3>Please enter the following:</h3>";
      ?>
    </div>
    <br>
    <!-- form to get test marks and test total from the user -->
    <form action="./results.php" method="post" target="results" class="box">
      <label for="testmarks">Enter Your Test Score and what it was out of:</label>
      <input type="text" id="testmarks" step=".001" placeholder="Test Mark" name="testmarks" class="text-box">
      <label for="testtotal">/</label>
      <input type="text" id="testtotal" step=".001" placeholder="Test Total" name="testtotal" class="text-box">
      <input type="submit" value="Calculate Percentage" class="button">
    </form>

      <!-- iframe for the results to show on the web page, uses target as a getElementById. -->
    <iframe id="results" name="results">			

    </iframe>

    <!-- form to get multiple test scores from the user -->
    <form action="./results2.php" method="post" target="results2" class="box">
      <label for="testscores">Enter Your Test Scores:</label>
      <input type="text" id="testscores" step=".001" placeholder="Test Scores" name="testscores">
      <input type="submit" value="Calculate Average" class="button">
    </form>
    
    <!-- iframe to diplay results targeted by second form -->
    <iframe id="results2" name="results2">			

    </iframe>
    <!-- mdl slider -->
    <input class="mdl-slider mdl-js-slider" type="range"
      min="0" max="100" value="25" tabindex="0">
    <br>
    <!-- john cena stretch face image -->
    <img src="./images/john.gif" alt="john man small face" height="300px" width="1200px">
  </body>
</html>