<?php
session_start();
require_once 'vendor/connect.php';
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
											<?php
				$az = 1;
					function showCalcTable($connect)
					{
						$result = mysqli_query($connect, "SELECT `calc_id`, `user_id`, `date`,`output_name`, `value`, `unit` FROM `output5`") or die(mysqli_error($connect));
						for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);


						print '<table class="tblca" border=1 cellspacing=0>
										<tr class="trinfo">
											<th>id вычисления </th>
											<th>id пользователя</th>
											<th>дата вычисления</th>
											<th>Обозначение</th>
											<th>значение вычисления</th>
											<th>Ед.Изм.</th>
											<th>удалить</th>
										</tr>';
										
						foreach ($data as $page)

						{
							print "<tr>";
							if ($az < 2){
								print "<td rowspan =99>{$page['calc_id']}</td>
								<td rowspan = '99'>{$page['user_id']}</td>
								<td rowspan = '99'>{$page['date']}</td>";
								$az = 3;}
										print "
										<td>{$page['output_name']}</td>
										<td>{$page['value']}</td>
										<td>{$page['unit']}</td>
										<td><a href=\"?delete={$page['calc_id']}\">delete</a></td>
									</tr>";
									
						}
						print '</table>';
						$az = 1;
					}
					function deletePage($connect)
					{
						if (isset($_GET['delete'])) {
							$id = $_GET['delete'];
							$query = "DELETE FROM `calculation` WHERE calc_id=$id";
							mysqli_query($connect, $query) or die(mysqli_error($connect));
							
							return true;
						} else {
							return false;
						}
					}

					deletePage($connect);
					showCalcTable($connect);
				?>
				
										</header>
										
										
									</article>

							</div>
							<div class="col-4 col-12-narrower">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<header>
												<h3>История расчетов</h3>
											</header>
											<p>Вернуться к выбору расчета.</p>
											<ul class="actions">
												<li><a href="history.php" class="button">Назад</a></li>
											</ul>
										</section>
										<section>
											
											<header>
												<h3>Вывод в excel</h3>
											</header>
											<p>Хочешь сохранить данные?Тогда скачай историю расчета.</p>
											<form method="post" action="export5.php">
            								<input type="submit" name="export" class="btn" value="Скачать" />
											</form>
											</section>
											
									</section>

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
			<script src="assaets/js/jquery-3.4.1.min.js"></script>
			<script src="assaets/js/calculations2.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>