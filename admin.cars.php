<?php
  session_start();
  require_once('server_files/conn.php');
  $readFromSql = "SELECT * FROM `cars`";
  $query = mysqli_query($connection, $readFromSql);
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
  <title>Admin Panel Manage cars</title>
</head>
<body>
  <header>

  </header>
  <main class="admin-panel">
    <div class="admin-panel__nav">
      <nav class="admin-nav">
        <ul class="admin-nav__list">
          <li class="admin-nav__item  admin-nav__item--active">
            <a>Car list</a>
          </li>
          <li class="admin-nav__item">
            <a href="admin.analytics.php">Analytics</a>
          </li>
          <li class="admin-nav__item">
            <a  href="admin.users.php">Manage users</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="admin-panel__cars">
      <table class="cars">
        <tr class="cars__header">
          <th>ID</th>
          <th>Title</th>
          <th>Transmission</th>
          <th>Engine capacity</th>
          <th>Body type</th>
          <th>Total amount</th>
          <th>
            <button class="btn btn-danger btn-danger--modificator btn-danger--add">Add new</button>
          </th>
        </tr>
        <?php
          while($matchData = mysqli_fetch_assoc($query)){
        ?>
        <tr class="cars__data">
          <td><?php echo $matchData['car_id']; ?></td>
          <td><?php echo $matchData['car_title']; ?></td>
          <td><?php echo $matchData['car_trans']; ?></td>
          <td><?php echo $matchData['car_capacity']; ?></td>
          <td><?php echo $matchData['car_body']; ?></td>
          <td><?php echo $matchData['car_quantity']; ?></td>
          <td class="actions">
            <a class="actions__del" href="server_files/delete.cars.php?ID=<?php echo $matchData['car_id']; ?>">
              <button class="btn btn-danger btn-danger--modificator">Delete</button>
            </a>
            <a class="actions__edit">
              <button class="btn btn-danger btn-danger--modificator">Edit</button>
            </a>
          </td>
        </tr>
        <?php } ?>
      </table>
    </div>
    <div class="admin-panel__cars-edit">
      <h2 class="cars-edit__title"></h2>
      <form class="cars-edit" action="" method="post" enctype="multipart/form-data">
        <div class="cars-edit__close"></div>
        <div class="cars-edit__flax">
          <fieldset>
            <div class="cars-edit__wrapper">
              <input class="cars-edit__id" type="text" name="id" placeholder="ID" readonly>
            </div>
            <div class="cars-edit__wrapper">
              <input class="cars-edit__titles" type="text" name="title" placeholder="Title" autofocus>
            </div>
            <div class="cars-edit__wrapper">
              <input class="cars-edit__body" type="text" name="body" placeholder="Body">
            </div>
            <div class="cars-edit__wrapper">
              <input class="cars-edit__engine" type="text" name="engine" placeholder="Engine">
            </div>
            <div class="cars-edit__wrapper">
              <input class="cars-edit__horse-power" type="text" name="horse_power" placeholder="Horse power">
            </div>
            <div class="cars-edit__wrapper">
              <input class="cars-edit__flue" type="text" name="flue" placeholder="Flue type">
            </div>
          </fieldset>
          <fieldset>
            <div class="cars-edit__wrapper">
              <input class="cars-edit__consumption" type="text" name="consumption" placeholder="Consumption">
            </div>
            <div class="cars-edit__wrapper">
              <input class="cars-edit__transmission" type="text" name="transmission" placeholder="Transmission">
            </div>
            <div class="cars-edit__wrapper">
              <input class="cars-edit__capacity" type="text" name="capacity" placeholder="Capacity">
            </div>
            <div class="cars-edit__wrapper">
              <input class="cars-edit__price" type="text" name="price" placeholder="Price">
            </div>
            <div class="cars-edit__wrapper">
              <input class="cars-edit__bags" type="text" name="bags" placeholder="How many bags?">
            </div>
            <div class="cars-edit__wrapper">
              <input class="cars-edit__total" type="text" name="total" placeholder="Total amount">
            </div>
          </fieldset>
          <fieldset>
            <div class="cars-edit__wrapper users-edit__activation">
              <input name="air-conditioning" value="0" type="hidden">
              <input class="active" type="checkbox" id="air" name="air-conditioning" value="1">
              <label for="air"></label>
              <div>air - conditioning</div>
            </div>
            <div class="cars-edit__wrapper users-edit__activation">
              <input name="cruise-control" value="0" type="hidden">
              <input class="active" type="checkbox" id="cruise-control" name="cruise-control" value="1">
              <label for="cruise-control"></label>
              <div>cruise - control</div>
            </div>
            <div class="cars-edit__wrapper users-edit__activation">
              <input name="power-window" value="0" type="hidden">
              <input class="active" type="checkbox" id="power-window" name="power-window" value="1">
              <label for="power-window"></label>
              <div>power - window</div>
            </div>
            <div class="cars-edit__wrapper users-edit__activation">
              <input name="radio" value="0" type="hidden">
              <input class="active" type="checkbox" id="radio" name="radio" value="1">
              <label for="radio"></label>
              <div>radio</div>
            </div>
            <div class="cars-edit__wrapper users-edit__activation">
              <input name="usb" value="0" type="hidden">
              <input class="active" type="checkbox" id="usb" name="usb" value="1">
              <label for="usb"></label>
              <div>USB</div>
            </div>
            <div class="cars-edit__wrapper users-edit__activation">
              <input name="aux" value="0" type="hidden">
              <input class="active" type="checkbox" id="aux" name="aux" value="1">
              <label for="aux"></label>
              <div>AUX</div>
            </div>
          </fieldset>
          <fieldset>
            <div class="cars-edit__wrapper users-edit__activation">
              <input name="bluetooth" value="0" type="hidden">
              <input class="active" type="checkbox" id="bluetooth" name="bluetooth" value="1">
              <label for="bluetooth"></label>
              <div>bluetooth</div>
            </div>
            <div class="cars-edit__wrapper users-edit__activation">
              <input name="abs" value="0" type="hidden">
              <input class="active" type="checkbox" id="abs" name="abs" value="1">
              <label for="abs"></label>
              <div>ABS</div>
            </div>
            <div class="cars-edit__wrapper users-edit__activation">
              <input name="brake-assist" value="0" type="hidden">
              <input class="active" type="checkbox" id="brake-assist" name="brake-assist" value="1">
              <label for="brake-assist"></label>
              <div>brake - assist</div>
            </div>
            <div class="cars-edit__wrapper users-edit__activation">
              <input name="air-bags" value="0" type="hidden">
              <input class="active" type="checkbox" id="air-bags" name="air-bags" value="1">
              <label for="air-bags"></label>
              <div>air - bags</div>
            </div>
            <div class="cars-edit__wrapper users-edit__activation">
              <input name="child-chair" value="0" type="hidden">
              <input class="active" type="checkbox" id="child-chair" name="child-chair" value="1">
              <label for="child-chair"></label>
              <div>child  -chair</div>
            </div>
            <div class="cars-edit__wrapper users-edit__activation">
              <input name="promo" value="0" type="hidden">
              <input class="active" type="checkbox" id="promo" name="promo" value="1">
              <label for="promo"></label>
              <div>PROMO</div>
            </div>
          </fieldset>
        </div>
        <div class="cars-edit__wrapper">
          <label class="btn btn-danger btn-danger--modificator btn-danger--file" for="file">Choose 3 max</label>
          <input class="file" id="file" name="photo[]" type="file" accept="image/*" multiple>
        </div>
        <div class="cars-edit__wrapper">
          <input class="cars-edit__submit btn btn-danger btn-danger--modificator btn-danger--update" type="submit" value="">
        </div>
      </form>
    </div>
  </main>
  <script src="js/jquery.min.js"></script>
  <script src="js/load.cars.js"type="text/javascript"></script>
  <script src="js/scroll.js"></script>
  <script src="js/validation.cars.js"type="text/javascript"></script>
</body>
</html>
