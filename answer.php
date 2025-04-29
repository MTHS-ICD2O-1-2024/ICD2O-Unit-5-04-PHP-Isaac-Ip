<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Museum Discount, in PHP" />
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
  <title>Museum Discount, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Museum Discount, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
      <img src="./images/museum_discount.png" alt="museum discount" width="250" />
      </div>
      <div class="page-content-php">
        <div id="submit">
          <?php
          $age = $_GET["age"];
          $dayOfWeek = $_GET["day-of-week"]

          // process 
          if (nan(age) || !dayOfWeek) {
            echo "You are: " . $age . " years old.";
            echo " You can watch an R movie alone.";
            echo " Thank you for verifying your age.";
          } else if ($age >= 13) {
            echo "You are: " . $age . " years old.";
            echo " You can watch a PG-13 movie alone.";
            echo " Thank you for verifying your age.";
          } else if ($age >= 5) {
            echo "You are: " . $age . " years old.";
            echo " You can watch a G or PG movie alone.";
            echo " Thank you for verifying your age.";
          } else {
            echo "You are: " . $age . " years old.";
            echo " You are too young to watch movies.";
            echo " Thank you for verifying your age.";
          }
          ?>
        </div>
      </div>
    </main>
  </div>
</body>

</html>