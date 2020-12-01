document.querySelector('.verwijder-account').addEventListener('click', function () {
    var element = document.querySelector('#popup');
    element.classList.toggle('popup-active');
});

document.querySelector('.popup__close').addEventListener('click', function () {
    var element = document.querySelector('#popup');
    element.classList.toggle('popup-active');
});