<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="css\style.css">
  <title>Admin Panel Analytics</title>
</head>
<body>
  <header>

  </header>
  <main class="admin-panel">
    <div class="admin-panel__nav">
      <nav class="admin-nav">
        <ul class="admin-nav__list">
          <li class="admin-nav__item">
            <a href="admin.cars.php">Car list</a>
          </li>
          <li class="admin-nav__item admin-nav__item--active">
            <a>Analytics</a>
          </li>
          <li class="admin-nav__item">
            <a href="admin.users.php">Manage users</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="admin-panel__analytics">
      <div id="graph_1" class="analytics"></div>
      <div id="graph_2" class="analytics"></div>
      <div id="graph_3" class="analytics"></div>
    </div>
  </main>
  <script src="js/plotly-latest.min.js"></script>
  <script src="js/plotly.js"></script>
</body>
</html>
