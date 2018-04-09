<?php
  require_once('conn.php');

  if (isset($_POST) & !empty($_POST)) {
    for ($i=0; $i < count($_FILES['photo']['tmp_name']); $i++) {
      $targetDir = '../img/';
      $fileTempName = $_FILES['photo']['tmp_name'][$i];
      $fileName = $_FILES['photo']['name'][$i];
      $filePath = $targetDir . basename($fileName);

      move_uploaded_file($fileTempName, $filePath);
    }

    $titleCar = $_POST['title'];
    $bodyCar = $_POST['body'] ;
    $engineCar = $_POST['engine'];
    $powerCar = $_POST['horse_power'];
    $flueCar = $_POST['flue'];
    $consumptionCar = $_POST['consumption'];
    $transmissionCar = $_POST['transmission'];
    $capacityCar = $_POST['capacity'];
    $priceCar = $_POST['price'];
    $bagsCar = $_POST['bags'];
    $totalCar = $_POST['total'];

    $airCar = $_POST['air-conditioning'];
    $cruiseCar = $_POST['cruise-control'];
    $windowCar = $_POST['power-window'];
    $radioCar = $_POST['radio'];
    $usbCar = $_POST['usb'];
    $auxCar = $_POST['aux'];
    $bluetoothCar = $_POST['bluetooth'];
    $absCar = $_POST['abs'];
    $brakeCar = $_POST['brake-assist'];
    $airbagsCar = $_POST['air-bags'];
    $childChairCar = $_POST['child-chair'];
    $promoCar = $_POST['promo'];
    $photoCar = $_FILES['photo']['name'];

    $insertSql = "INSERT INTO cars (car_title, car_body, car_engine, car_hp, car_fuel, car_consumption, car_trans,
      car_capacity, car_price, car_baggage, car_quantity, car_ac, car_ccontrol, car_powerwindow, car_radio, car_usb, car_bt, car_aux, car_abs, car_img1, car_img2, car_img3,
      car_ba, car_airbags, car_child, car_promo) VALUES ('$titleCar','$bodyCar','$engineCar','$powerCar','$flueCar','$consumptionCar','$transmissionCar',
      '$capacityCar', '$priceCar','$bagsCar','$totalCar','$airCar','$cruiseCar','$windowCar','$radioCar','$usbCar','$auxCar','$bluetoothCar','$absCar',  'img/$photoCar[0]', 'img/$photoCar[1]', 'img/$photoCar[2]',
      '$brakeCar','$airbagsCar','$childChairCar','$promoCar')";

    $query = mysqli_query($connection, $insertSql);

    if ($query) {
      header("Location: ../admin.cars.php");
    } else {
      echo "Something has come up, please try again!";
    }
      mysqli_close($connection);
  }
?>
