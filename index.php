<?
    $title = 'Главная';
    $dir = 'bin/images';
    $images = scandir($dir);

    $image_names = array();
    foreach ($images as $image) if (is_file($dir . '/' . $image) && strpos($image, '.jpg') !== false) $image_names[] = $image;

    $_GET['image_names'] = $image_names;
    $_get['dir'] = $dir;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bin/css/style.css">
    <link rel="icon" href="bin/images/logo.png" type="image/x-icon">.
    <title><?= $title?></title>
    <script src="bin/js/lib/jQuery.js"></script>
</head>
<body>
    <? require('bin/parts/header.php'); ?>
    <main>
        <? require('bin/parts/index/greeting.php') ?>
        <? require('bin/parts/index/about.php')?>
        <? require('bin/parts/index/workers.php') ?>
        <? require('bin/parts/index/news.php') ?>
    </main>
    <? require('bin/parts/footer.php'); ?>
</body>
</html>