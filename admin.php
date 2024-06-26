<?
    $title = 'Панель администратора';
    if ($_COOKIE['access'] == 'not') {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bin/css/style.css">
    <link rel="icon" href="bin/images/logo.png" type="image/x-icon">.
    <title><?= $title?></title>
    <script src="https://lidrekon.ru/slep/js/jquery.js"></script>
    <script src="https://lidrekon.ru/slep/js/uhpv-hover-full.min.js"></script>
    <script src="bin/js/lib/jQuery.js"></script>
</head>
<body>
    <? require('bin/parts/header.php'); ?>
    <main>
        <? require('bin/parts/admin/adminForm.php'); ?>
        <div class="title">
            <div class="title-bottom-slender"></div>
                <h2>Новости в нашей школы</h2>
                <div class="title-bottom-slender"></div>
            </div>
            <? require('bin/parts/news/news-blocks.php'); ?>
        </div>
    </main>
    <? require('bin/parts/footer.php'); ?>
    <script src="bin/js/largeImg.js"></script>
    <script src="bin/js/admin.js"></script>
</body>
</html>