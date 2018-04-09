<?php
  require_once ('conn.php');

  $query = "SELECT user_role, COUNT(*) FROM users GROUP BY user_role";
  $result = mysqli_query($connection, $query);

  while ($query_result = mysqli_fetch_assoc($result)) {
    $x[] = $query_result['user_role'];
    $y[] = $query_result['COUNT(*)'];
  }

  $data[] = [
    "labels" => $x,
    "values" => $y,
    "type" => "pie"
  ];

  echo json_encode($data);
  mysqli_close($connection);
?>
