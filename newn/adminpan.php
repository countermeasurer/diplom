<?php
session_start();
if (!$_SESSION['user']['status']== 'admin') {
    header('Location: /adminpan.php');
}

include 'vendor/connect.php';

// удаляем пользователя
$id = $_GET['deleteUser'];
$queryDel = "DELETE FROM users WHERE id='$id'";
$resultDel = mysqli_query($connect, $queryDel) or die (mysqli_error($connect));

//меняем статус пользователю
$statusId = $_GET['changeStatus'];
$query = "SELECT * FROM users WHERE status='$status'";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
$row = mysqli_fetch_assoc($result);

if ($_SESSION['user']['status'] == 'adminn') {
$status = 'user';
}
else {
$status = 'admin';
}


$queryStatus = "UPDATE users SET status='admin' WHERE status='$statusId'";
$resultStatus= mysqli_query($connect, $queryStatus) or die (mysqli_error($connect));


$queryStatus = "UPDATE users SET status='user' WHERE status='$statusId'";
$resultStatus = mysqli_query($connect, $queryStatus) or die (mysqli_error($connect));


//баним пользователя
$id_ban = $_GET['ban_id'];

$queryBan = "UPDATE users SET banned='1' WHERE id='$id_ban'";
$resultBan = mysqli_query($connect, $queryBan) or die (mysqli_error($connect));

//разбаниваем пользователя
$id_unban = $_GET['unban_id'];

$queryUnban = "UPDATE users SET banned='0' WHERE id='$id_unban'";
$resultUnban = mysqli_query($connect, $queryUnban) or die ($connect);

//выводим в таблицу всех пользователей
$query = "SELECT * FROM users";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
for ($array = []; $row = mysqli_fetch_assoc($result); $array[] = $row);
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Авторизация и регистрация</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="index.html">Web-Calc</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li>
										<a href="#">Расчеты</a>
										<ul>
											<li><a href="raschot1.php">Выбор размера промывочных насадок бурового долота</a></li>
											<li><a href="raschot2.php">Анализ гидравлики долота</a></li>
											<li><a href="raschot3.php">Критическая скорость течения в кольцевом пространстве и критическим расходом бурового раствора</a></li>
											<li><a href="raschot4.php">Нахождение экспоненты "d"</a></li>
											<li><a href="#">Гидродинамические давления</a>
											<ul>
													<li><a href="raschot5.php">Гидродинамическое давление за счет поршневого эффекта</a></li>
													<li><a href="raschot5c.php">Гидродинамическое давление и разрежение, создаваемое при спуске или подъеме колонны труб</a></li>													
												</ul></li>
											<li><a href="raschot6.php">Эквивалентная циркуляция плотности</a></li>
										</ul>
									</li>
									<li><a href="main.php">Главная</a></li>
									<li><a href="#footer-wrapper">Обратная связь</a></li>
									<li class="break"><a href="profile.php">Профиль</a></li>
									<li> <? if ($_SESSION['user']['status']=='admin'){ ?> <a href="#">Админ панель</a><? }; ?>
									<ul>
										<li><a href="adminpan.php">Вывод пользователей</a></li>
										<li><a href="history.php">Вывод расчетов</a></li>
										<li><a href="">Добавить пользователя</a></li>	
										</ul></li>
									<li><a href="vendor/logout.php">Выход</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->
				<div class="wrapper">
					<div class="container" id="main">

						<!-- Content -->
							<article id="content">
								<header>
									<h2>Таблица пользователей</h2>
									
								</header>
								<div id = "table">
<table border=1 cellspacing=0>
	<br>
<tr>
<td> Login </td>
<td> Status </td>
<td> Delete </td>
<td> Сменить статус </td>
<td> Забанить </td>
<td> Разбанить </td>
<td> Состояние пользователя </td>
</tr>

<?php
foreach ($array as $allUsers) {
if ($_SESSION['user']['status']=='admin') {
$color = 'red';
$statusСhange = 'Назначить администратором';
}
else {
$color = 'red';
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
<td><a href=\"?changeStatus={$allUsers['stutus']}\"> $statusСhange </a></td>
<td><a href=\"?ban_id={$allUsers['id']}\"> Banned </a></td>
<td><a href=\"?unban_id={$allUsers['id']}\"> Unbanned </a></td>
<td> $userState </td>
</tr>";
}
?>
</table>
<br><br>
<form method="post" action="export.php">
            <input type="submit" name="export" class="btn" value="Вывод пользователей в Excel" />
</form>
 <form method="post" action="main.php">
            <input type="submit" name="export2" class="btn" value="Вернуться на главную страницу" />
</form>
</div>

							</article>
						</div></div></div>

					<div id="footer-wrapper">
					<div id="footer" class="container">
						<header class="major">
							<h2>Написать нам</h2>
							<p>Если у вас возникли какие-либо вопросы, напишите нам.</p>
						</header>
						<div class="row">
							<section class="col-6 col-12-narrower">
								<form method="post" action="#">
									<div class="row gtr-50">
										<div class="col-6 col-12-mobile">
											<input name="name" placeholder="Имя" type="text" />
										</div>
										<div class="col-6 col-12-mobile">
											<input name="email" placeholder="Email" type="text" />
										</div>
										<div class="col-12">
											<textarea name="message" placeholder="Сообщение"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Отправить" /></li>
												<li><input type="reset" value="Отчистить" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="col-6 col-12-narrower">
								<div class="row gtr-0">
									<ul class="divided icons col-6 col-12-mobile">
										<li class="icon brands fa-twitter"><a href="#"><span class="extra">twitter.com/</span>bren0r</a></li>
										<li class="icon brands fa-facebook-f"><a href="#"><span class="extra">facebook.com/</span>bren0r</a></li>
									</ul>
									<ul class="divided icons col-6 col-12-mobile">
										<li class="icon brands fa-instagram"><a href="#"><span class="extra">instagram.com/</span>bren0r</a></li>
										<li class="icon brands fa-youtube"><a href="#"><span class="extra">youtube.com/</span>bren0r</a></li>										
									</ul>
								</div>
							</section>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="menu">
							<li>&copy; Omonov N.N.</li>
						</ul>
					</div>
				</div>

		</div>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>