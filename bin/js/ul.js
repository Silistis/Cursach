$(document).on('click', '.li-1', (event) => {
    $('.li-1').find('ul').toggleClass('none-display-for-ul');
    $('.li-1').find('.sports-btn').find('img').toggleClass('img-rotate');
});