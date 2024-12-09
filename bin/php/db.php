<?
$server = 'MySQL-8.2';
$password = '';
$login = 'root';
$db_name = 'olimpiec';

$conn = mysqli_connect($server, $login, $password, $db_name);

if (!$conn)
    die('Connection failed...' . mysqli_connect_error());
else
    "Success!";