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
												<h3>Введите значения для нахождения Эквивалентной циркуляции плотности</h3>
											</header>
				<p class="text_centr">p, Плотность бурового раствора</p>
                <p class="text_centr"><input  class="input-range61" type="text" data-min="1" data-max="3000" name="pr6">кг/м3</p>

                <p class="text_centr">PLV, Пластическая вязкость</p>
                <p class="text_centr"><input   class="input-range62" type="text" data-min="1" data-max="400" name="plv"> кг/м3</p>

                <p class="text_centr">Q, Предельное напряжение сдвига</p>
                <p class="text_centr"><input   class="input-range63" type="text" data-min="1" data-max="10" name="pns">мпс</p>

                <p class="text_centr">dskv, Диаметр скважины</p>
                <p class="text_centr"><input   class="input-range64" type="text" data-min="1" data-max="600" name="dskv6"> мм</p>

                <p class="text_centr">Dn,Наружный диаметр бурильных труб</p>
                <p class="text_centr"><input   class="input-range65" type="text" data-min="1" data-max="299" name="dn6"> мм</p>

                <p class="text_centr">SC, Скорость циркуляции</p>
                <p class="text_centr"><input   class="input-range66" type="text" data-min="1" data-max="100" name="sc"> л/с</p>

                <p class="text_centr">L, Длинна колонны бурильных труб</p>
                <p class="text_centr"><input   class="input-range67" type="text" data-min="1" data-max="9000" name="L"> м</p>

                <p class="text_centr">Dn, Наружный диаметр УБТ</p>
                <p class="text_centr"><input   class="input-range68" type="text" data-min="1" data-max="272" name="dn26"> мм</p>

                <p class="text_centr">Lybt, Длина колонны УБТ</p>
                <p class="text_centr"><input   class="input-range69" type="text" data-min="1" data-max="4000" name="Lybt"> м</p>

                <p class="text_centr">Glv, Глубина по вертикали</p>
                <p class="text_centr"><input   class="input-range610" type="text" data-min="1" data-max="9000" name="glv"> м</p>

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
				<p class="text_centr">Q300</p>
                <p class="text_centr"><input   type="text" name="q36"> Отсчет вискозиметра </p>

                <p class="text_centr">Q600</p>
                <p class="text_centr"><input   type="text" name="q66"> Отсчет вискозиметра </p>

                <p class="text_centr">nu</p>
                <p class="text_centr"><input   type="text" name="n6"> Реологический показатель </p>

                <p class="text_centr">K</p>
                <p class="text_centr"><input   type="text" name="K6"> Реологический показатель </p>

                <p class="text_centr">v</p>
                <p class="text_centr"><input   type="text" name="vx66"> скорость в кольцевом пространсве вокруг бурильных труб </p>

                <p class="text_centr">v</p>
                <p class="text_centr"><input   type="text" name="v62"> скорость в кольцевом пространсве вокруг УБТ </p>

                <p class="text_centr">V</p>
                <p class="text_centr"><input   type="text" name="vkr6">критическая вокруг бурильных труб </p>


                <p class="text_centr">V</p>
                <p class="text_centr"><input   type="text" name="vkry6"> критическая скорость вокруг УБТ </p>

                <p class="text_centr">pekv</p>
                <p class="text_centr"><input   type="text" name="pekv"> Эквивалентная циркуляция плотности </p>

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
			<script src="/assets/js/calculations6.js"></script>
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