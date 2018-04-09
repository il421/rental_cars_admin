<?php
  require_once('conn.php');

  $id = intval($_GET['ID']);
  $sqlCommandSelect = "SELECT * FROM `cars` WHERE car_id=$id";
  $query = mysqli_query($connection, $sqlCommandSelect);
  $matchData = mysqli_fetch_assoc($query);

  $data = [
    $matchData['car_id'],
    $matchData['car_title'],
    $matchData['car_body'],
    $matchData['car_engine'],
    $matchData['car_hp'],
    $matchData['car_fuel'],
    $matchData['car_consumption'],
    $matchData['car_trans'],
    $matchData['car_capacity'],
    $matchData['car_price'],
    $matchData['car_baggage'],
    $matchData['car_quantity'],
    $matchData['car_ac'],
    $matchData['car_ccontrol'],
    $matchData['car_powerwindow'],
    $matchData['car_radio'],
    $matchData['car_usb'],
    $matchData['car_bt'],
    $matchData['car_aux'],
    $matchData['car_abs'],
    $matchData['car_ba'],
    $matchData['car_airbags'],
    $matchData['car_child'],
    $matchData['car_promo'],
    $matchData['car_img1'],
    $matchData['car_img2'],
    $matchData['car_img3'],
  ];

  echo json_encode($data);
  mysqli_close($connection);
?>
