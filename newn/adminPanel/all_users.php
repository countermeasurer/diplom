<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
include 'vendor/connect.php';
$query = "SELECT * FROM users";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
for ($array = []; $row = mysqli_fetch_assoc($result); $array[] = $row);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Selected User</title>
</head>
<body>
<table border=1 cellspacing=0>
	<br>
<tr>
<th> Login </th>
<th> Status </th>
<th> Delete </th>
<th> Сменить статус </th>
<th> Забанить </th>
<th> Разбанить </th>
<th> Состояние пользователя </th>
</tr>
<?

foreach ($array as $allUsers) {
if ($_SESSION['user']['id']==7) {
$color = 'red';
$statusСhange = 'Сделать его юзером';
}
else {
$color = 'green';
$statusСhange = 'Сделать его админом';
}

if ($allUsers['banned'] == '1') {
$userState = 'забанен';
}
else {
$userState = 'не забанен';
}

echo "<tr style=\"color:$color\">
<td> {$allUsers['login']} </td>
<td> {$allUsers['status']} </td>
<td><a href=\"?deleteUser={$allUsers['id']}\"> Delete </a></td>
<td><a href=\"?changeStatus={$allUsers['id']}\"> $statusСhange </a></td>
<td><a href=\"?ban_id={$allUsers['id']}\"> Banned </a></td>
<td><a href=\"?unban_id={$allUsers['id']}\"> Unbanned </a></td>
<td> $userState </td>
</tr>";
}
?>

<a href="search_user.html">Вернуться к поиску</a><br/><br/>
<a href="info_form.html">Добавить пользователя</a>
</body>
</html>