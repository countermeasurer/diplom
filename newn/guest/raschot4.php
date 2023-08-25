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
												<h3>Введите значения для нахождения экспоненты "d"</h3>
											</header>
											
                <p class="text_centr">R, Скорость проходки</p>
                <p class="text_centr"><input  class="input-range41" type="text" data-min="1" data-max="3000" name="R"> м/час</p>

                <p class="text_centr">N, Скорость вращения долота</p>
                <p class="text_centr"><input  class="input-range42" type="text" data-min="1" data-max="400" name="Nob"> об/м</p>

                <p class="text_centr">W, Нагрузка на долото</p>
                <p class="text_centr"><input  class="input-range43" type="text" data-min="1" data-max="250" name="W"> кН</p>
                <p class="text_centr">D, Диаметр долота</p>
                <p class="text_centr"><input  class="input-range44" type="text" data-min="1" data-max="280" name="Diamdol"> мм</p>


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
										
                <p class="text_centr">Экспонента d</p>
                <p class="text_centr"><input  id="submit" type="number" name="dex"></p>

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
			<script src="/assets/js/calculations4.js"></script>
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