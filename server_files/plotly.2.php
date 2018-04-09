<?php
  require_once ('conn.php');

  $query = "SELECT `car_title`, `car_quantity` FROM `cars` ORDER BY car_quantity";
  $result = mysqli_query($connection, $query);

  while ($query_result = mysqli_fetch_assoc($result)) {
    $x[] = $query_result['car_quantity'];
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
