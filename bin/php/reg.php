<?
require_once('db.php');

$id = $_POST['newsName'];
$title = $_POST['title'];
$text = $_POST['text'];

$sql = "UPDATE `news` SET title = '$title', text = '$text' WHERE id = '$id'";

$result = $conn->query($sql);

header("Location: ../../admin.php");

?>