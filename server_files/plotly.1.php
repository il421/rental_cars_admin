<?php
  require_once ('conn.php');

  $query = "SELECT orders.end, cars.car_title FROM orders INNER JOIN cars ON orders.car_id = cars.car_id ORDER BY end;";
  $result = mysqli_query($connection, $query);

  while ($query_result = mysqli_fetch_assoc($result)) {
    $x[] = $query_result['end'];
    $y[] = $query_result['car_title'];
  }

  $data[] = [
    "x" => $x,
    "y" => $y,
    "type" => "bar",
    "orientation" => "h"
  ];

  echo json_encode($data);
  mysqli_close($connection);
?>
