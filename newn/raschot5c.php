<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: /');
    }

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Web-Calc</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- logo -->
							<h1 id="logo"><a href="main.php">Web-Calc</a></h1>

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

					<!-- Hero -->
						<section id="hero" class="container">
							<header>
								<h2>Web-Calc для того, чтобы упростить вашу работу.
								<br /></h2>
							</header>
							
							<br />
							
						</section>

				</div>


			<!-- Main -->
				<div class="wrapper">
					<div class="container" id="main">
						<div class="row gtr-150">
							<div class="col-4 col-12-narrower">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<header>
												<h3>Введите значения для нахождения Гидродинамического давления и разрежения, создаваемого при спуске или подъеме колонны труб</h3>
											</header>
				<p class="text_centr">p, Плотность бурового раствора</p>
                <p class="text_centr"><input  class="input-range51c" type="text" data-min="1" data-max="3000" name="pr5c"></p>

                <p class="text_centr">PLV, Пластическая вязкость</p>
                <p class="text_centr"><input  class="input-range52c" type="text" data-min="1" data-max="400" name="plv5c"> </p>

                <p class="text_centr">Q, Предельное напряжение сдвига</p>
                <p class="text_centr"><input class="input-range53c" type="text" data-min="1" data-max="10" name="pns5c"> </p>

                <p class="text_centr">dskv, Диаметр скважины</p>
                <p class="text_centr"><input  class="input-range54c" type="text" data-min="1" data-max="600" name="dskv5c"> мм</p>

                <p class="text_centr">Dn, Наружный диаметр бурильных труб</p>
                <p class="text_centr"><input  class="input-range55c" type="text" data-min="1" data-max="299" name="dn5c"> мм </p>

                <p class="text_centr">L, Длинна колонны бурильных труб</p>
                <p class="text_centr"><input  class="input-range56c" type="text" data-min="1" data-max="9000" name="L5c"> м</p>

                <p class="text_centr">Dn, Наружный диаметр УБТ</p>
                <p class="text_centr"><input class="input-range57c" type="text" data-min="1" data-max="273" name="dn25c"> мм</p>

                <p class="text_centr">Lybt, Длина колонны УБТ</p>
                <p class="text_centr"><input  class="input-range58c" type="text" data-min="1" data-max="9000" name="Lybt5c"> мм</p>

                <p class="text_centr">sst, скорость спуска труб</p>
                <p class="text_centr"><input  class="input-range59c" type="text" data-min="1" data-max="3" name="sst5c"> мм</p>

                <p class="text_centr">Lvert, Глубина по вертикали</p>
                <p class="text_centr"><input  class="input-range510c" type="text" data-min="1" data-max="9450" name="Lvert5c"> м</p>

											<ul class="actions">
												<li><a class="demo">Демо</a></li>
											</ul>
										</section>

							</div>
							<div class="col-8 col-12-narrower imp-narrower">

								<!-- Content -->
									<article id="content">
										<header>
											<h2>Результат по расчету:</h2>
										</header>
				<p class="text_centr">V, Скорость жидкости в кольцевом пространстве вокруг бурильных труб</p>
                <p class="text_centr"><input   type="text" name="v5c">л/с</p>

                <p class="text_centr">Vmax, Максимальная скорость труб</p>
                <p class="text_centr"><input   type="text" name="vm5c"> м/c </p>

                <p class="text_centr">n, Реологический показатель</p>
                <p class="text_centr"><input   type="text" name="n5c"></p>

                <p class="text_centr">K, Реологический показатель</p>
                <p class="text_centr"><input   type="text" name="k5c"></p>

                <p class="text_centr">Ymax, Скорость сдвига бурового раствора вокруг труб</p>
                <p class="text_centr"><input   type="text" name="y5c">-</p>

                <p class="text_centr">T, Напряжение сдвига бурового раствора вокруг труб</p>
                <p class="text_centr"><input   type="text" name="t5c">-</p>

                <p class="text_centr">Pcn,Гидродинамическое давление</p>
                <p class="text_centr"><input   type="text" name="pcn5c">МПа</p>

                <h3>Вокруг УБТ</h3>

                <p class="text_centr">Vybt, Теоритическая скорость жидкости вокруг УБТ</p>
                <p class="text_centr"><input   type="text" name="vybt">л/с</p>

                <p class="text_centr">Vmaxy, Максимальная скорость потока вокруг УБТ</p>
                <p class="text_centr"><input   type="text" name="vmy">л/с</p>

                <p class="text_centr">Q, Эквивалентная скорость бурового раствора из-за движения труб в эквивалентный расход потока</p>
                <p class="text_centr"><input   type="text" name="q5c">л/с</p>

                <p class="text_centr">Pcn, Потеря давления для интервала расположения УБТ</p>
                <p class="text_centr"><input   type="text" name="pcny">МПа</p>

                <p class="text_centr">Pcn, Суммарное гидродинамическое давление,обусловленное движением колонны труб</p>
                <p class="text_centr"><input   type="text" name="pcny5">МПа</p>

                <p class="text_centr">Dp, Давление в увеличении плотности бурового раствора</p>
                <p class="text_centr"><input   type="text" name="dp">МПа</p>

                <p class="text_centr">DP, Импульсное давление,создаваемое спуском колонны труб</p>
                <p class="text_centr"><input   type="text" name="DP">МПа</p>

                							<ul class="actions">
												<li><a class="calc">Расчет</a></li>
											</ul>
									</article>

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
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
			<script src="assets/js/calculations5c.js"></script>
			<script src="assets/js/mistake.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.2.3/jquery.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>