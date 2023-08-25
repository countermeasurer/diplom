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
												<h3>Введите значения для выбора размера промывочных насадок бурового долота</h3>
											</header>
				<p class="text_centr">p,Плотность бурового раствора</p>
                <p class="text_centr"><input  class="input-range" type="text" data-min="1" data-max="2700" name="p" required placeholder="p"> <a>кг/м^3</a></p>

                <p class="text_centr">N<sub>1</sub>,Размеры насадок</p>
                <p class="text_centr"><input   class="input-range2" type="text" data-min="1" data-max="170" name="N1" required placeholder="N1"> <a>мм</a></p>

                <p class="text_centr">N<sub>2</sub>,Размеры насадок</p>
                <p class="text_centr"><input   class="input-range3" type="text" data-min="1" data-max="170" name="N2" required placeholder="N2"> <a>мм</a></p>

                <p class="text_centr">N<sub>3</sub>,Размеры насадок</p>
                <p class="text_centr"><input   class="input-range4" type="text" data-min="1" data-max="170" name="N3" required placeholder="N3"><a>мм</a></p>

                <p class="text_centr">P<sub>∂1</sub>,Давление насоса 1</p>
                <p class="text_centr"><input   class="input-range5" type="text" data-min="1" data-max="40" name="P1" required placeholder="P1"> <a>МПа</a></p>
               
                <p class="text_centr">P<sub>∂2</sub>,Давление насоса 2</p>
                <p class="text_centr"><input   class="input-range6" type="text" data-min="1" data-max="40" name="P2" required placeholder="P2"> <a>МПа*с</a></p>

                <p class="text_centr">P<sub>c1</sub>,Подача насоса 1</p>
                <p class="text_centr"><input  class="input-range7" type="text" data-min="1" data-max="50" name="Pnas1" required placeholder="Pc1"> <a>л/с</a></p>

                <p class="text_centr">P<sub>c2</sub>,Подача насоса 2</p>
                <p class="text_centr"><input  class="input-range8" type="text" data-min="1" data-max="50" name="Pns2" required placeholder="Pc2"> <a>л/с</a></p>

                <p class="text_centr">P<sub>max</sub>,Максимальное давление на устье</p>
                <p class="text_centr"><input  class="input-range9" type="text" data-min="1" data-max="100" name="Pma" required placeholder="Pma"><a>МПа</a></p>
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
										<p class="text_centr">S<sub>нас</sub>Площадь сечения насадок</p>
                <p class="text_centr"><input  type="text" name="Snas"><a>м/с</a></p>


                <p class="text_centr">P<sub>∂1</sub>,Потеря давления на струйных насадках бурового долота при подаче 26,5 л/c</p>
                <p class="text_centr"><input  type="text" name="P1a"> МПа</p>

                <p class="text_centr">P<sub>∂2</sub>,Потеря давления на струйных насадках бурового долота при подаче 17,3 л/c</p>
                <p class="text_centr"><input  type="text" name="P2b"> МПа</p>

                <p class="text_centr">P<sub>c1</sub>,Суммарные потери давления за исключением потери давления на насадках долота при подаче 26,5 л/с</p>
                <p class="text_centr"><input  type="text" name="Pc1z"> МПа</p>

                <p class="text_centr">P<sub>c2</sub>,Суммарные потери давления за исключением потери давления на насадках долота при подаче 17,3 л/с </p>
                <p class="text_centr"><input  type="text" name="Pc2g"> МПа</p>

                <p class="text_centr">M, Угловой коэффициент линии</p>
                <p class="text_centr"><input  type="text" name="M"></p>

                <p class="text_centr">P<sub>опт</sub>,Оптимальная потеря давления.При оптимизации по силе удара струи о забой</p>
                <p class="text_centr"><input  type="text" name="Poptz">МПа</p>

                <p class="text_centr">P<sub>опт</sub>,Оптимальная подача раствора.При оптимизации по гидравлической мощности</p>
                <p class="text_centr"><input  type="text" name="Poptg">МПа</p>

                <p class="text_centr">Q<sub>опт</sub>,оптимальная потеря давления.При оптимизации по силе удара о забой</p>
                <p class="text_centr"><input  type="text" name="Qoptz">МПа</p>

                <p class="text_centr">Q<sub>опт</sub>оптимальная потеря давления.При оптимизации по гидравлической мощности</p>
                <p class="text_centr"><input  type="text" name="Qoptg">МПа</p>

                <p class="text_centr">P<sub>∂</sub>падение давления на долоте.При оптимизации по силе удара о забой</p>
                <p class="text_centr"><input  type="text" name="P1z">МПа</p>

                <p class="text_centr">P<sub>∂</sub>падение  давления на долоте.При оптимизации по гидравлической мощности</p>
                <p class="text_centr"><input  type="text" name="P1g">МПа</p>

                <p class="text_centr">S<sub></sub>площадь насадок.При оптимизации по силе удара о забой</p>
                <p class="text_centr"><input  type="text" name="Snasz">мм^2</p>

                <p class="text_centr">P<sub>∂</sub>площадь насадок.При оптимизации по гидравлической мощности</p>
                <p class="text_centr"><input  type="text" name="Snasg">МПа</p>

                <p class="text_centr">D<sub>нас</sub>диаметр насадок. при оптимизации по силе удара о збаой</p>
                <p class="text_centr"><input  type="text" name="Dnasz"> мм^2</p> 

                <p class="text_centr">D<sub>нас</sub>диаметр насадок. при оптимизации по гидравлической мощности</p>
                <p class="text_centr"><input  type="text" name="Dnasg"> мм^2</p> 

                <p class="text_centr">N<sub>нас</sub>размер насадок. при оптимизации по гидравлической мощности</p>
                <p class="text_centr"><input  type="text" name="Nnasz"> мм</p>

                <p class="text_centr">N<sub>нас</sub>размер насадок. при оптимизации по гидравлической мощности</p>
                <p class="text_centr"><input  type="text" name="Nnasg"> мм</p>
                							<ul class="actions">
												<li><a href="#" class="calc">Расчет</a></li>
											</ul>
									</article>

							</div>
						</div>
						<section>
							<h2>Вывод:</h2>
							<h3>Серия формул позволяют определить размеры с труйных насадок при оптимизации по силе удара струи о забой или гидравлической мощности и выборе оптимальной подачи насосов для насадок</h3>
						</section>
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
			<script src="assets/js/calculations1.js"></script>
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