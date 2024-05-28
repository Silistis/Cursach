<?
    $title = 'Главная';
    $dir = 'bin/images';
    $images = scandir($dir);
    setcookie('access', 'not', time() + 3600, '/Cursach');

    $image_names = array();
    foreach ($images as $image) if (is_file($dir . '/' . $image) && strpos($image, '.jpg') !== false) $image_names[] = $image;

    $_GET['image_names'] = $image_names;
    $_GET['dir'] = $dir;
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
    <script src="bin/js/lib/hotKey.js"></script>
    <script src="bin/js/lib/jQuery.js"></script>
</head>
<body>
    <? require('bin/parts/header.php'); ?>
    <main>
        <form id="register" method="post" action="bin/php/adminEnter.php">
            <h2>Вход</h2>
            <input type="login" placeholder="Логин" name="login">
            <input type="password" placeholder="Пароль" name="password">
            <input type="submit" value="Войти" class="sub">
        </form>
        <? require('bin/parts/index/greeting.php') ?>
        <? require('bin/parts/index/about.php')?>
        <? require('bin/parts/index/workers.php') ?>
        <? require('bin/parts/news/news-blocks.php') ?>
    </main>
    <? require('bin/parts/footer.php'); ?>
    <script src="bin/js/largeImg.js"></script>
    <script src="bin/js/adminsForm.js"></script>
</body>
</html>