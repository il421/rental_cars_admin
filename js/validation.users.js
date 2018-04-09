'use strict';
(function () {
  var validateRegistrationForm = {
    inputFirstName: document.querySelector('.users-edit__first-name'),
    inputLastName: document.querySelector('.users-edit__last-name'),
    inputPassword: document.querySelector('input[name="password"]'),
    inputEmail: document.querySelector('.users-edit__email'),
    inputTel: document.querySelector('.users-edit__phone-number'),
    inputRole: document.querySelector('.users-edit__role'),

    validateContact: function () {
      this.inputFirstName.required = true;
      this.inputLastName.required = true;
      this.inputEmail.required = true;
      this.inputTel.required = true;
      this.inputRole.required = true;

      this.inputEmail.pattern = '[a-z0-9._%+-]+@[a-z0-9.-]+[a-z]{2,3}$';

      this.inputTel.addEventListener('keypress', function(evt) {
        if (evt.keyCode < 48 || evt.keyCode > 57) {
          evt.preventDefault();
        }
      });
    }
  };

  validateRegistrationForm.validateContact();
})();
