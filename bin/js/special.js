$(document).on('click', '.special-ul', function () {
    $(this).find('ul').toggleClass('none-display-for-ul');
    $(this).find('img').toggleClass('img-rotate');
});