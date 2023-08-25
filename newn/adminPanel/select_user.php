<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Selected User</title>
</head>

<body>
<?php
session_start();
if (!$_SESSION['user'])
require_once 'vendor/connect.php';
$full_name = trim($_REQUEST['full_name']);
$login = trim($_REQUEST['login']);
$email = trim($_REQUEST['email']);
$status = trim($_REQUEST['status']);

$check_user = mysqli_query($connect, "SELECT * FROM users WHERE full_name='$full_name' AND login='$login' AND email = '$email' AND status = '$status'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

if($row)
{
	echo("<p>Пользователь: " .$row['full_name'] . " " .$row['login'] ." ".$row['email'] ." " .$row['status']);
}
else{echo ("Пользователя с таким именем в базе нет<br/><br/>");}


?>
<a href="search_user.html">Вернуться к поиску</a><br/><br/>
<a href="info_form.html">Добавить пользователя</a>
</body>
</html>