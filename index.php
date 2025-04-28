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
      <br />
      <div class="page-content">Please fill in the boxes:
      </div>
      <div class="page-content-php">
        <form action="answer.php" method="GET">
          <br />
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  <input class="mdl-textfield__input" type="number" id="age">
  <label class="mdl-textfield__label" for="age">Age</label>
</div>
<br>
      <!-- Dropdown box for date-->
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <select class="mdl-textfield__input" id="day-of-week">
      <option value=""></option>
      <option value="SUN">Sunday</option>
      <option value="MON">Monday</option>
      <option value="TUE">Tuesday</option>
      <option value="WED">Wednesday</option>
      <option value="THU">Thursday</option>
      <option value="FRI">Friday</option>
      <option value="SAT">Saturday</option>
      </select>
      <label class="mdl-textfield__label" for="day-of-week">Day of the Week</label>
      </div>
          <br />
          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit">
            Check For Discount
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>
