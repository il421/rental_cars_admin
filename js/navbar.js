var leftMenu = document.querySelector('.navigation__leftelement');
var rightMenu = document.querySelector('.navigation__rightelement');

function showMenu(elem) {
    elem.classList.toggle('change');
    if (leftMenu.style.maxHeight) {
        rightMenu.style.maxHeight = null;
        setTimeout(function () {
            leftMenu.style.maxHeight = null;
        }, 200);
    } else {
        leftMenu.style.maxHeight = leftMenu.scrollHeight + 'px';
        setTimeout(function () {
            rightMenu.style.maxHeight = rightMenu.scrollHeight + 'px';
        }, 200);
    }
}