<?php
  session_start();
  require_once('server_files/conn.php');
  $readFromSql = "SELECT * FROM `users`";
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
  <title>Admin Panel Manage users</title>
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
          <li class="admin-nav__item">
            <a href="admin.analytics.php">Analytics</a>
          </li>
          <li class="admin-nav__item admin-nav__item--active">
            <a>Manage users</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="admin-panel__users">
      <table class="users">
        <tr class="users__header">
          <th>ID</th>
          <th>First name</th>
          <th>Last name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Role</th>
          <th>Activation</th>
          <th></th>
        </tr>
        <?php
          while($matchData = mysqli_fetch_assoc($query)){
        ?>
        <tr class="users__data">
          <td><?php echo $matchData['user_id']; ?></td>
          <td><?php echo $matchData['user_first']; ?></td>
          <td><?php echo $matchData['user_last']; ?></td>
          <td><?php echo $matchData['user_email']; ?></td>
          <td><?php echo $matchData['user_phone']; ?></td>
          <td><?php echo $matchData['user_role']; ?></td>
          <td>
            <div class="activation">
              <input <?php echo 'id="active' . $matchData['user_id'] . '"'; ?> type="checkbox" name="active" <?php
              if ($matchData['user_active'] == 1) {
                echo "checked";
              } ?> disabled>
              <label <?php echo 'for="active' . $matchData['user_id'] . '"'; ?>></label>
            </div>
          </td>
          <td class="actions">
            <a class="actions__del" href="server_files/delete.user.php?ID=<?php echo $matchData['user_id']; ?>">
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
    <div class="admin-panel__users-edit">
      <h2 class="users-edit__title">Edit user information</h2>
      <form class="users-edit" action="server_files/update.users.php" method="post">
        <div class="users-edit__close"></div>
        <fieldset>
          <div class="users-edit__wrapper">
            <input class="users-edit__id" type="text" name="id" placeholder="ID" readonly>
          </div>
          <div class="users-edit__wrapper">
            <input class="users-edit__first-name" type="text" name="first_name" placeholder="First name" autofocus>
          </div>
          <div class="users-edit__wrapper">
            <input class="users-edit__last-name" type="text" name="last_name" placeholder="Last name">
          </div>
          <div class="users-edit__wrapper">
            <input class="users-edit__email" type="email" name="email" placeholder="Email">
          </div>
          <div class="users-edit__wrapper">
            <input class="users-edit__phone-number" type="tel" name="phone_number" placeholder="Phone number">
          </div>
          <div class="users-edit__wrapper">
            <input class="users-edit__role" type="text" name="role" placeholder="Role">
          </div>
          <div class="users-edit__wrapper">
            <input class="users-edit__password" type="password" name="password" placeholder="You may change the password">
          </div>
          <div class="users-edit__wrapper users-edit__activation">
            <input type="hidden" name="active" value="0">
            <input class="users-edit__active" id="active" type="checkbox" name="active" value="1">
            <label for="active"</label>
            <div>activation</div>
          </div>
          <div class="users-edit__wrapper">
            <input class="users-edit__submit btn btn-danger btn-danger--modificator btn-danger--update" type="submit" value="Update">
          </div>
        </fieldset>
      </form>
    </div>
  </main>
  <script src="js/load.users.js"></script>
  <script src="js/validation.users.js"></script>
</body>
</html>
