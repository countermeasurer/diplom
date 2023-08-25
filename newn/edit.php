<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}


$query = "SELECT * FROM users WHERE id='$id'";

if (!empty($_POST['oldpassword']) && !empty($_POST['newpassword'])) {
if (password_verify($_POST['oldpassword'], $user['password'])) {
if (strlen($_POST['newpassword']) >= 6 && strlen($_POST['newpassword']) <= 12) {
$newpassword = password_hash($_POST['newpassword'], PASSWORD_DEFAULT);

$query = "UPDATE users SET password='$newpassword' WHERE id='$id'";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
echo "<p style=\"color:green\"> Данные успешно изменены! </p>";
}
else {
echo "<p style=\"color:red\"> Новый пароль должен содержать от 6 до 12 символов </p>";
}
}
else {
echo "<p style=\"color:red\"> Пароль не соотвествует требованиям </p>";
}
}

?>
</form>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Личный кабинет</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="right-sidebar is-preload">
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
											<li><a href="raschot1.php">Выбор равзмера промывочных насадок бурового долота</a></li>
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
									<li class="break"><a href="profile.php">Профиль</a></li>
									<li> <? if ($_SESSION['user']['status']=='admin'){ ?> <a href="#">Админ панель</a><? }; ?>
									<ul>
										<li><a href="adminpan.php">Вывод пользователей</a></li>
										<li><a href="history.php">Вывод расчетов</a></li>	
										</ul></li>
									<li><a href="vendor/logout.php">Выход</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->
				<div class="wrapper">
					<div class="container" id="main">
						<div class="row gtr-150">
							<div class="col-8 col-12-narrower">

								<!-- Content -->

									<article id="content">
										<header>
											<section>
											<header>
												<h3>Смена данных</h3>
											</header>
											<h3>Введите новые данные для изменения.</h3>
											<form   action="edit.php" method="POST">
											<input type="text" name="full_name" placeholder="Имя" onkeyup="var full_name=/['\d','0-9',':','.','?','!','@','#','№','$','%','^','&','*','(',')','','=','+','~','>','<']/; if(full_name.test(this.value)) this.value=''"/>
											<input type="text" name="login" placeholder="Логин" required/>
											<input type="text" name="oldpassword" placeholder="Старый пароль"required />
											<input type="text" name="newpassword" placeholder="Новый пароль"required />
											<input type="submit" name="update" value="Изменить"required />
											<ul class="actions">
												<li><a href="profile.php" class="button">Вернуться назад</a></li>
											</ul>
											</form>
											<?php 
 
$conn_db = mysqli_connect("localhost","root","","mdk2");
    
if(isset($_POST['update'])){

$full_name = $_POST['full_name'];

$password = md5($_POST['password']);
  
$login = $_POST['login'];

$id = $_SESSION['user']['id'];

$update2 = "UPDATE users SET password='$password', full_name='$full_name', login='$login' WHERE id='$id'";

$resultupdate = mysqli_query($conn_db, $update2) or die (mysqli_error($conn_db));   

  }
  
?>
										</section>
										
										
										
									</article>

							</div>
							<div class="col-4 col-12-narrower">
								

							</div>
						</div>
						
					</div>
				</div>

			<!-- Footer -->
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