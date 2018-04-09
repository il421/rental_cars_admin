'use strict';
(function () {
  var buttonEdit = document.querySelectorAll('.actions__edit');
  var buttonAdd = document.querySelector('.btn-danger--add');
  var editableForm = document.querySelector('.cars-edit');
  var carsDialog = document.querySelector('.admin-panel__cars-edit');
  var closeEdit = document.querySelector('.cars-edit__close');

  var carsFormSubmit = document.querySelector('.btn-danger--update');
  var carsFormTitle = document.querySelector('.cars-edit__title');

  var idCar = document.querySelector('.cars-edit__id');
  var titleCar = document.querySelector('.cars-edit__titles');
  var bodyCar = document.querySelector('.cars-edit__body');
  var engineCar = document.querySelector('.cars-edit__engine');
  var powerCar = document.querySelector('.cars-edit__horse-power');
  var flueCar = document.querySelector('.cars-edit__flue');
  var consumptionCar = document.querySelector('.cars-edit__consumption');
  var transmissionCar = document.querySelector('.cars-edit__transmission');
  var capacityCar = document.querySelector('.cars-edit__capacity');
  var priceCar = document.querySelector('.cars-edit__price');
  var bagsCar = document.querySelector('.cars-edit__bags');
  var totalCar = document.querySelector('.cars-edit__total');

  var airCar = document.querySelector('#air');
  var cruiseCar = document.querySelector('#cruise-control');
  var windowCar = document.querySelector('#power-window');
  var radioCar = document.querySelector('#radio');
  var usbCar = document.querySelector('#usb');
  var auxCar = document.querySelector('#aux');
  var bluetoothCar = document.querySelector('#bluetooth');
  var absCar = document.querySelector('#abs');
  var brakeCar = document.querySelector('#brake-assist');
  var airbagsCar = document.querySelector('#air-bags');
  var childChairCar = document.querySelector('#child-chair');
  var promoCar = document.querySelector('#promo');
  var fileCar = document.querySelector('#file');

  var openAndCloseDialog = function (title, action, value) {
    carsFormTitle.innerHTML = title;
    editableForm.action = action;
    carsFormSubmit.value = value;
    carsDialog.classList.toggle('admin-panel__users-edit--show');
  };

  var checkCarProperties = function (condition, element) {
    if (condition == 1) {
      element.checked = true;
    } else {
      element.checked = false;
    }
  };

  // OPEN ADD CAR FORM
  buttonAdd.addEventListener('click', function() {
    openAndCloseDialog('Add a new car', 'server_files/add.new.car.php', 'Add');
  });

  //OPEN EDIT CAR FORM AND GETTING DATA
  [].forEach.call(buttonEdit, function(element) {
    element.addEventListener('click', function(evt) {
      var idPath = evt.path[3].childNodes[1].textContent;

      var xhr = new XMLHttpRequest();
      xhr.addEventListener('load', function () {
        var dataValues = JSON.parse(this.responseText);

        idCar.value = dataValues[0];
        titleCar.value = dataValues[1];
        bodyCar.value = dataValues[2];
        engineCar.value = dataValues[3];
        powerCar.value = dataValues[4];
        flueCar.value = dataValues[5];
        consumptionCar.value = dataValues[6];
        transmissionCar.value = dataValues[7];
        capacityCar.value = dataValues[8];
        priceCar.value = dataValues[9];
        bagsCar.value = dataValues[10];
        totalCar.value = dataValues[11];

        checkCarProperties(dataValues[12], airCar);
        checkCarProperties(dataValues[13], cruiseCar);
        checkCarProperties(dataValues[14], windowCar);
        checkCarProperties(dataValues[15], radioCar);
        checkCarProperties(dataValues[16], usbCar);
        checkCarProperties(dataValues[17], auxCar);
        checkCarProperties(dataValues[18], bluetoothCar);
        checkCarProperties(dataValues[19], absCar);
        checkCarProperties(dataValues[20], brakeCar);
        checkCarProperties(dataValues[21], airbagsCar);
        checkCarProperties(dataValues[22], childChairCar);
        checkCarProperties(dataValues[23], promoCar);

        openAndCloseDialog('Edit the car information', 'server_files/update.cars.php', 'Update');
      });

      xhr.open('GET', 'server_files/get.cars.data.php?ID=' + idPath);
      xhr.send();
    });
  });

  // CLOSE FORM
  closeEdit.addEventListener('click', function() {
    openAndCloseDialog();
    editableForm.reset();
  });

})();

(function () {
  var uploadFileInput = document.querySelector('.file');
  var uploadFileLable = document.querySelector('.btn-danger--file');

  uploadFileInput.addEventListener('change', function(evt) {
    uploadFileLable.innerHTML = 'Good!';
    uploadFileLable.style.backgroundColor = '#D8C3A5';
    uploadFileLable.style.borderColor = '#D8C3A5';
    uploadFileLable.style.color = '#E85A4F';
  });
})();
