<?
$search = $_POST['search'];

if ($search == 'О нас' || $search == 'о нас') {
    header("Location: ../../about-us.php");
} else if ($search == 'Гто' || $search == 'гто') {
    header("Location: ../../gto.php");
} else if ($search == 'Спорт' || $search == 'спорт') {
    header("Location: ../../sports.php");
} else if ($search == 'Главная' || $search == 'главная') {
    header("Location: ../../index.php");
} else if ($search == 'Новости' || $search == 'новости') {
    header("Location: ../../news.php");
} else {
    header("Location: ../../notFound.php");
}