let imgPath;
$(document).ready(function(){
    $(".newsImg").on("click", function(){
        var blockId = $(this).data('id');
        // Открываем проводник для выбора изображения
        $("<input type='file'>").on('change', function(e){
            var file = e.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e){
                imgPath = e.target.result;
                $('.newsImg').css('background-image', 'url(' + imgPath + ')');
            }
            reader.readAsDataURL(file);
        }).click();
        $(".newsImg").html('');
    });
    $(document).on('click', '.adminAdd', function () {
        let title = $('.adminNewsTitle').val();
        let text = $('.AdminNewsText').val();
        let path = imgPath;
        let tags = $('.adminTagsArea').val();

        $('.addtitle').attr('value', title);
        $('.addtext').attr('value', text);
        $('.addpath').attr('value', path);
        $('.addtags').attr('value', tags);

        $('.adminForm').submit();
    });
    $(document).on('input', '.adminTagsArea', function () {
        $('.adminTegs').text($('.adminTagsArea').val());
    });
});