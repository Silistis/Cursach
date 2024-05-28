<?
    $title = 'Ошибка 404 :(';
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
            <div class="error404">Ошибка 404 - Страница не найдена :(</div>
        </main>
    <? require('bin/parts/footer.php'); ?>
    <script src="bin/js/special.js"></script>
</body>
</html>