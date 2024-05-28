let click = 0;
$(document).on('click', 'img', function () {
    if (click == 0) {
        $('body').append('<img class="enlargetImg" src="'+ $(this).attr('src') +'">');
        $('<div class="grayBack"></div>').prependTo('main');
        click = 1; 
    }
})
$(document).on('keydown', function (e) {
    if (e.keyCode == 27) {
        $('.enlargetImg').remove();
        $('.grayBack').remove();
        click = 0;
    }
})
function Trigger(fileName) { //тригер для скачивания докемнтов
    let link = document.createElement("a");
    link.href = fileName;
    link.download = fileName.substr(fileName.lastIndexOf("/") + 1);
    document.body.appendChild(link);
    link.click();
};