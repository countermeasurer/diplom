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
												<h3>Введите значения для анализа гидравлики долота</h3>
											</header>
											<p class="text_centr">P,плотность бурового раствора</p>
                <p class="text_centr"><input  class="input-range21" type="text" data-min="1" data-max="2700" name="pbr" required placeholder="P"> кг/м^3</p>

                <p class="text_centr">Q,cкорость цирккуляции</p>
                <p class="text_centr"><input  class="input-range22" type="text" data-min="1" data-max="120" name="Q" required placeholder="Q"> л/c</p>

                <p class="text_centr">N1, Размер насадки 1</p>
                <p class="text_centr"><input  class="input-range23" type="text" data-min="1" data-max="17" name="rN1" required placeholder="p"> мм</p>

                <p class="text_centr">N2,Размер насадки 2</p>
                <p class="text_centr"><input  class="input-range24" type="text" data-min="1" data-max="17" name="rN2" required placeholder="p"> мм</p>

                <p class="text_centr">N3,Размер насадки 3</p>
                <p class="text_centr"><input  class="input-range25" type="text" data-min="1" data-max="17" name="rN3" required placeholder="p"> мм</p>

                <p class="text_centr">D<sub>∂</sub>,Диаметр скважины</p>
                <p class="text_centr"><input  class="input-range26" type="text" data-min="1" data-max="125" name="Dsk" required placeholder="p"> мм</p>

                <p class="text_centr">D<sub>н</sub>,Наружный диаметр бурильных труб</p>
                <p class="text_centr"><input  class="input-range27" type="text" data-min="1" data-max="17" name="nD" required placeholder="p"> мм</p>

                <p class="text_centr">V<sub>усть</sub>,Устьевое давление</p>
                <p class="text_centr"><input  class="input-range28" type="text" data-min="1" data-max="100" name="yDav" required placeholder="p"> МПа</p>
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
                <p class="text_centr">V<sub>кол</sub>,Скорость течения в кольцевом пространстве</p>
                <p class="text_centr"><input  type="text" name="Vkol"> м/с</p>

                <p class="text_centr">P<sub>∂</sub>,Потеря давления на струйных насадках бурового долота</p>
                <p class="text_centr"><input  type="text" name="P_dav"> кг/м^3</p>

                <p class="text_centr">N,гидравлическая мощность системы</p>
                <p class="text_centr"><input  type="text" name="Nmos"> кВт</p>

                <p class="text_centr">N<sub>∂</sub>,Гидравлическая мощность на буровом долоте</p>
                <p class="text_centr"><input  type="text" name="Ndel"> кВт</p>

                <p class="text_centr">N<sub>∂</sub>Гидравлическая мощность на квадратный см площади долота</p>
                <p class="text_centr"><input  type="text" name="Nmk"> кВт/см*2</p>

                <p class="text_centr">% потери давления на долоте</p>
                <p class="text_centr"><input  type="text" name="procpot">%</p>

                <p class="text_centr">V<sub>нас</sub>Скорость струи из насадки бурового долота</p>
                <p class="text_centr"><input  type="text" name="Vnas"> м/c</p>

                <p class="text_centr">J, Сила удара струи о забой</p>
                <p class="text_centr"><input  type="text" name="J"> H</p>

                <p class="text_centr">N<sub>∂</sub>/мм^2, Сила удара струи о забой на квадратный мм площади долота</p>
                <p class="text_centr"><input  type="text" name="Jmm"> H/мм^2, </p>
                							<ul class="actions">
												<li><a href="#" class="calc">Расчет</a></li>
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
			<script src="/assets/js/calculations2.js"></script>
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