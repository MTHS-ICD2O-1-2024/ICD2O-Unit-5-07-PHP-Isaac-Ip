<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Looping Addition, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Isaac Ip" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-indigo.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Looping Addition, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Looping Addition, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/addition.png" alt="Addition" width="250" />
      </div>
      <div class="page-content-php">
        <div id="submit">
          <?php
          $value1 = $_GET["value-1"];

          // process 
          $sum = 0;
          for ($i = 1; $i <= $value1; $i++) {
            $sum += $i;
          }
          echo "The sum of numbers from 1 to $value1 is $sum.";
          ?>
        </div>
      </div>
    </main>
  </div>
</body>

</html>