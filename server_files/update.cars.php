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

    $idCar = $_POST['id'];
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

    $updateSql = "UPDATE `cars` SET car_title='$titleCar', car_body='$bodyCar', car_engine='$engineCar', car_hp='$powerCar', car_fuel='$flueCar',
     car_consumption='$consumptionCar', car_trans='$transmissionCar', car_capacity='$capacityCar', car_price='$priceCar', car_baggage='$bagsCar',
     car_quantity='$totalCar', car_ac='$airCar', car_ccontrol='$cruiseCar', car_powerwindow='$windowCar', car_radio='$radioCar', car_usb='$usbCar',
     car_aux='$auxCar', car_bt='$bluetoothCar', car_abs='$absCar', car_ba='$brakeCar', car_airbags='$airbagsCar', car_child='$childChairCar',
     car_promo='$promoCar', car_img1='img/$photoCar[0]', car_img2='img/$photoCar[1]', car_img3='img/$photoCar[2]' WHERE car_id=$idCar";

    $query = mysqli_query($connection, $updateSql);

    if ($query) {
      header('Location: ../admin.cars.php');
    } else {
      echo "Failed to update data.";
    }
      mysqli_close($connection);
  }
?>
