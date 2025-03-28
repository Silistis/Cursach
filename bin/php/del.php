<?
require_once('db.php');

$id = $_POST['newsName'];

$sql = "DELETE FROM `news` WHERE id = '$id'";

$result = $conn->query($sql);

header("Location: ../../admin.php");

?>