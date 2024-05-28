$(document).on('keydown', function (e) {
    if (e.keyCode === 120) {
        $('#register').css('visibility', 'visible');
    } 
    if (e.keyCode === 27) {
        $('#register').css('visibility', 'hidden');
    }
});