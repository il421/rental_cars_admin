'use strict';
(function () {
  var validateRegistrationForm = {

    titleCar: document.querySelector('.cars-edit__titles'),
    bodyCar: document.querySelector('.cars-edit__body'),
    engineCar: document.querySelector('.cars-edit__engine'),
    powerCar: document.querySelector('.cars-edit__horse-power'),
    flueCar: document.querySelector('.cars-edit__flue'),
    consumptionCar: document.querySelector('.cars-edit__consumption'),
    transmissionCar: document.querySelector('.cars-edit__transmission'),
    capacityCar: document.querySelector('.cars-edit__capacity'),
    priceCar: document.querySelector('.cars-edit__price'),
    bagsCar: document.querySelector('.cars-edit__bags'),
    totalCar: document.querySelector('.cars-edit__total'),

    writeNumbersOnly: function (element) {
      element.addEventListener('keypress', function(evt) {
        if (evt.keyCode < 48 || evt.keyCode > 57) {
          evt.preventDefault();
        }
      });
    },

    validateContact: function () {
      this.titleCar.required = true;
      this.bodyCar.required = true;
      this.engineCar.required = true;
      this.powerCar.required = true;
      this.flueCar.required = true;
      this.consumptionCar.required = true;
      this.transmissionCar.required = true;
      this.capacityCar.required = true;
      this.priceCar.required = true;
      this.bagsCar.required = true;
      this.totalCar.required = true;

      this.writeNumbersOnly(this.capacityCar);
      this.writeNumbersOnly(this.priceCar);
      this.writeNumbersOnly(this.bagsCar);
      this.writeNumbersOnly(this.totalCar);
    }
  };

  validateRegistrationForm.validateContact();
})();
