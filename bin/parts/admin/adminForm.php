<div class="title">
    <div class="title-bottom-slender"></div>
    <h2>Администратор</h2>
    <div class="title-bottom-slender"></div>
</div>
<form action="bin/php/saveNews.php" method="post" class="adminForm">
    <div class="adminInputArea">
        <div class="newsImg">+</div>
        <div class="adminText">
            <input type="text" class="adminNewsTitle" placeholder="Введите заголовок">
            <textarea class="AdminNewsText" placeholder="Введите содеражание новости"></textarea>
        </div>
    </div>
    <div class="adminSlender"></div>
    <div class="adminTegArea">
        <div class="tegsInput">
            <div class="adminTegButton nex adminAdd">Готово</div>
            <input type="text" class="adminTagsArea" placeholder="Введите теги">
        </div>
        <div class="adminTegs"></div>
    </div>
    <input type="hidden" name="addtitle" class="addtitle">
    <input type="hidden" name="addtext" class="addtext">
    <input type="hidden" name="addpath" class="addpath">
    <input type="hidden" name="addtags" class="addtags">
</form>