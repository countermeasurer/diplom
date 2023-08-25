<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
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
						<div class="row gtr-150">
							<div class="col-8 col-12-narrower">

								<!-- Content -->
									<article id="content">
										<header>
											<section>
											<header>
												<h3>История расчетов 1</h3>
											</header>
											<h3>Выбор размера промывочных насадок бурового долота.</h3>
											<ul class="actions">
												<li><a href="history1.php" class="button">Вывести историю</a></li>
											</ul>
										</section>
										<section>
											<header>
												<h3>История расчетов 2</h3>
											</header>
											<h3>Анализ гидравлики долота.</h3>
											<ul class="actions">
												<li><a href="history2.php" class="button">Вывести историю</a></li>
											</ul>
										</section>
										<section>
											<header>
												<h3>История расчетов 3</h3>
											</header>
											<h3>Критичческая скорость течения в кольцевом пространстве и критический расход бурового раствора.</h3>
											<ul class="actions">
												<li><a href="history3.php" class="button">Вывести историю</a></li>
											</ul>
										</section>
										<section>
											<header>
												<h3>История расчетов 4 </h3>
											</header>
											<h3>Экспонента "d".</h3>
											<ul class="actions">
												<li><a href="history4.php" class="button">Вывести историю</a></li>
											</ul>
										</section>
										<section>
											<header>
												<h3>История расчетов 5</h3>
											</header>
											<h3>Гидродинамические давления и разрежения, создаваемые при спуске или подъеме колонны труб.</h3>
											<ul class="actions">
												<li><a href="history5.php" class="button">Вывести историю</a></li>
											</ul>
										</section>
										<section>
											<header>
												<h3>История расчетов 6</h3>
											</header>
											<h3>Эквивалентная циркуляционная плотность.</h3>
											<ul class="actions">
												<li><a href="history6.php" class="button">Вывести историю</a></li>
											</ul>
										</section>
										</header>
										
										
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