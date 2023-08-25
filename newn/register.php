<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Регистрация</title>
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
							<h1 id="logo"><a href="index.php">Web-Calc</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li>
										<a href="#">Расчеты по</a>
										<ul>
											<li><a href="guest/raschot1.php">Выбор равзмера промывочных насадок бурового долота</a></li>
											<li><a href="guest/raschot2.php">Анализ гидравлики долота</a></li>
											<li><a href="guest/raschot3.php">Критическая скорость течения в кольцевом пространстве и критическим расходом бурового раствора</a></li>
											<li><a href="guest/raschot4.php">Нахождение экспоненты "d"</a></li>
											<li><a href="#">Гидродинамические давления</a>
											<ul>
													<li><a href="guest/raschot5.php">Гидродинамическое давление за счет поршневого эффекта</a></li>
													<li><a href="guest/raschot5c.php">Гидродинамическое давление и разрежение, создаваемое при спуске или подъеме колонны труб</a></li>													
												</ul></li>
											<li><a href="guest/raschot6.php">Эквивалентная циркуляция плотности</a></li>
										</ul>
									</li>
									<li><a href="index.php">Главная</a></li>
									<li class="break"><a href="profile.php">Мой профиль</a></li>
									<li><a href="auth.php">Авторизация</a></li>
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
									<h2>Регистрация</h2>
									<p></p>
								</header>
								<form>
        <label>ФИО</label>
        <input type="text"  name="full_name" placeholder="Введите свое полное имя" onkeyup="var full_name=/['\d','0-9',':','.','?','!','@','#','№','$','%','^','&','*','(',')','','=','+','~','>','<']/; if(full_name.test(this.value)) this.value=''">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit" class="register-btn">Зарегистрироваться</button>
        <p <p
            align="center">
          <a align="center" href="auth.php">Авторизация</a> 
        </p>
        <p class="msg none"></p>
    </form>
</div>
							</article>

						
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
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery-3.4.1.min.js"></script>
    		<script src="assets/js/main2.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>