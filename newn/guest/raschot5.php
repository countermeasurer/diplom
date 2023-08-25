<!DOCTYPE HTML>
<html>
	<head>
		<title>Web-calc</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- logo -->
							<h1 id="logo"><a href="/index.php">Web-Calc</a></h1>

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
									<li><a href="/index.php">Главная</a></li>
									<li class="break"><a href="profile.php">Мой профиль</a></li>
									<li><a href="auth.php">Авторизация</a></li>
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
							<ul class="actions">
								<li><a href="#" class="button">Регистрация</a></li>
							</ul>
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
												<h3>Введите значения для нахождения гидродинамического давления</h3>
											</header>
				<p class="text_centr">L, Глубина скважины</p>
                <p class="text_centr"><input  class="input-range51" type="text" data-min="1" data-max="12262" name="L5">м</p>

                <p class="text_centr">Dskv, Диаметр скважины</p>
                <p class="text_centr"><input class="input-range52" type="text" data-min="1" data-max="600" name="dskv5">мм</p>

                <p class="text_centr">DN, Наружный диамтер бурильных труб</p>
                <p class="text_centr"><input  class="input-range53" type="text" data-min="1" data-max="250" name="dn5">мм</p>

                <p class="text_centr">dvn5, Внутренний диаметр бурильных труб</p>
                <p class="text_centr"><input  class="input-range54" type="text" data-min="1" data-max="280" name="dvn5">мм</p>

                <p class="text_centr">Dn, Наружный диаметр УБТ</p>
                <p class="text_centr"><input  name="dn25">мм</p>

                <p class="text_centr">dn, Внутренний диаметр УБТ</p>
                <p class="text_centr"><input  class="input-range56" type="text" data-min="1" data-max="213" name="dn25a">мм</p>

                <p class="text_centr">Lybt, Длина УБТ</p>
                <p class="text_centr"><input  class="input-range57" type="text" data-min="1" data-max="9000" name="Lybt5">м</p>

                <p class="text_centr">p, Плотность бурового расствора</p>
                <p class="text_centr"><input class="input-range58" type="text" data-min="1" data-max="3000" name="pr5">кг/м^3</p>

                <p class="text_centr">Q300, Показания вискозиметра</p>
                <p class="text_centr"><input  class="input-range59" type="text" data-min="1" data-max="300" name="qr5">об/мин</p>

                <p class="text_centr">Q600, Показания вискозиметра</p>
                <p class="text_centr"><input  class="input-range510" type="text" data-min="1" data-max="600" name="qr56">об/мин</p>

                <p class="text_centr">SS, Средняя скорость спуска бурильной колонны</p>
                <p class="text_centr"><input  class="input-range511" type="text" data-min="1" data-max="3" name="ss"> м/c</p>

											<ul class="actions">
												<li class="demo">Демо</a></li>
											</ul>
										</section>

							</div>
							<div class="col-8 col-12-narrower imp-narrower">

								<!-- Content -->
									<article id="content">
										<header>
											<h2>Результат по расчету:</h2>
										</header>
				<p class="text_centr">n, Реологические показания</p>
                <p class="text_centr"><input   type="text" name="n5"></p>

                <p class="text_centr">K, Реологические показания</p>
                <p class="text_centr"><input   type="text" name="K5"></p>

                <p class="text_centr">v, Cкорость жидкости в затрубном пространстве</p>
                <p class="text_centr"><input   type="text" name="vx55"> л/c </p>

                <p class="text_centr">v, Максимальная скорость труб</p>
                <p class="text_centr"><input   type="text" name="vm5"> м/с </p>

                <p class="text_centr">Pcn, Гидродинмическое давление</p>
                <p class="text_centr"><input   type="text" name="vkr5">МПа </p>

                							<ul class="actions">
												<li><a href="#" class="closed">Закрытая труба</a></li>
											</ul>
											<ul class="actions">
												<li><a href="#" class="opened">Открытая труба</a></li>
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
							<h2>Написаать нам</h2>
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
			<script src="///ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
			<script src="/assets/js/calculations5.js"></script>
			<script src="/assets/js/mistake.js"></script>
			<script src="/https://ajax.googleapis.com/ajax/libs/jquery/1.2.3/jquery.min.js"></script>
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/jquery.dropotron.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>

	</body>
</html>