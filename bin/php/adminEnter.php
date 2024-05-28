<?
require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT * FROM `admins` WHERE login = '$login' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    setcookie('access', 'access', time() + 3600, '/Cursach');
    header("Location: ../../admin.php");
} else {
    header("Location: ../../index.php");
}
exit();