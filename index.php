
<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
     <title>Guess the Number!</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/DiceFavicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/DiceFavicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/DiceFavicon/favicon-16x16.png">
    <link rel="manifest" href="/DiceFavicon/site.webmanifest">
    <!-- Mdl -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-indigo.min.css" />
    <!-- Css -->
    <link rel="stylesheet" href="/css/style.css"> 
  </head>
<body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- Text -->
    <?php
      echo "<h1>Guess the number in PHP</h1>";
      echo "<br>";
    ?>
    <img src="/images/Dice Image.jpg" style="width:150px;">
    <!-- Action -->
    <form action="./calculations.php" method="post" target="calculations">
      <!-- Labels -->
      <label for=lblguess">Guess a number (1-10):</label>
      <input type="integer" id="guess" placeholder="Enter your guess (1-10)" name="guess"><br><br>
      <!-- Guess button -->
      <button value="GuessButton" type="submit" class="mdl-button mdl-js-button mdl-button--accent">
        Guess
      </button>
    </form>
    <?php
    echo "<br>"
    ?>
    <!-- Frame to display the results -->
    <iframe id="calculations" name="calculations">
    </iframe>
  </body>
</html>