'use strict';
(function () {
  var buttonEdit = document.querySelectorAll('.actions__edit');
  var editableForm = document.querySelector('.admin-panel__users-edit');
  var closeEdit = document.querySelector('.users-edit__close');

  var idUser = document.querySelector('.users-edit__id');
  var firstNameUser = document.querySelector('.users-edit__first-name');
  var lastNameUser = document.querySelector('.users-edit__last-name');
  var emailUser = document.querySelector('.users-edit__email');
  var phoneNumberUser = document.querySelector('.users-edit__phone-number');
  var roleUser = document.querySelector('.users-edit__role');
  var ativeUser = document.querySelector('.users-edit__active');

  // CLOSE DIALOG EDIT
  closeEdit.addEventListener('click', function() {
    editableForm.classList.toggle('admin-panel__users-edit--show');
  });

  //OPEN DIALOG AND GETTING DATA EDIT
  [].forEach.call(buttonEdit, function(element) {
    element.addEventListener('click', function(evt) {
      var idPath = evt.path[3].childNodes[1].textContent;

      var xhr = new XMLHttpRequest();
      xhr.addEventListener('load', function () {
        var dataValues = JSON.parse(this.responseText);

        idUser.value = dataValues[0];
        firstNameUser.value = dataValues[1];
        lastNameUser.value = dataValues[2];
        emailUser.value = dataValues[3];
        phoneNumberUser.value = dataValues[4];
        roleUser.value = dataValues[5];

        if (dataValues[6] == 1) {
          ativeUser.checked = true;
        } else {
          ativeUser.checked = false;
        }

        editableForm.classList.toggle('admin-panel__users-edit--show');
      });

      xhr.open('GET', 'server_files/get.users.data.php?ID=' + idPath);
      xhr.send();
    });
  });
})();
