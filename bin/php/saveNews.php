<?
require_once('db.php');

$title = $_POST['addtitle'];
$text = $_POST['addtext'];
$img = $_POST['addpath'];
$tags = $_POST['addtags'];

if ($title == '' || $text == '' || $img == '' || $tags == '') {
    header("Location: ../../admin.php");
    exit();
}

$sqlNews = "INSERT INTO `news` (imgPath, title, text, tags) VALUES ('$img', '$title', '$text', '$tags')";

if ($conn->query($sqlNews) === true) {
    header("Location: ../../admin.php");
} else {
    echo 'Ошибка';
}