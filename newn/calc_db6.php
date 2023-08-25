<?php 
	session_start();
	require_once 'vendor/connect.php';

	$pr6 = trim($_POST['pr6']);
	$plv = trim($_POST['plv']);
	$pns = trim($_POST['pns']);
	$dskv6 = trim($_POST['dskv6']);
	$dn6 = trim($_POST['dn6']);
	$L = trim($_POST['L']);
	$dn26 = trim($_POST['dn26']);
	$Lybt = trim($_POST['Lybt']);
	$glv = trim($_POST['glv']);
	$q36 = trim($_POST['q36']);
	$q66 = trim($_POST['q66']);
	$n6 = trim($_POST['n6']);
	$K6 = trim($_POST['K6']);
	$vx66 = trim($_POST['vx66']);
	$v62 = trim($_POST['v62']);
	$vkr6 = trim($_POST['vkr6']);
	$vkry6 = trim($_POST['vkry6']);
	$pekv = trim($_POST['pekv']);
	
	

	$date = date("Y-m-d H:i:s");

	$user_id = $_SESSION['user']['id'];

	mysqli_query($connect, "INSERT INTO `calculation` (`user_id`, `date`) VALUES('$user_id', '$date')");

	$chek_calc = mysqli_query($connect, "SELECT * FROM `calculation` WHERE `user_id` = '$user_id' AND `date` = '$date'");

	
		$calc = mysqli_fetch_assoc($chek_calc);
		$_SESSION['calc'] = ["id" => $calc['calc_id']];


	$calc_id = $_SESSION['calc']['id'];

		mysqli_query($connect, "INSERT INTO `input6` (`calc_id`, `user_id`, `date`, `input_name`, `data_type`, `discription`, `unit`, `value`) VALUES('$calc_id', '$user_id', '$date', 'pr6', 'INT', 'Плотность бурового раствора', 'кг/м^3', '$pr6'),
		('$calc_id', '$user_id', '$date', 'plv', 'INT', 'Пластическая вязкость', 'мм', '$plv'),
		('$calc_id', '$user_id', '$date', 'pns', 'INT', 'Предельное напряжение сдвига', 'мм', '$pns'),
		('$calc_id', '$user_id', '$date', 'dskv6', 'REAL', 'Диаметр скважины', 'мм', '$dskv6'),
		('$calc_id', '$user_id', '$date', 'dn6', 'INT', 'Наружный диаметр бурильных труб', 'мм', '$dn6'),
		('$calc_id', '$user_id', '$date', 'sc', 'INT', 'Скорость циркуляции', 'мм', '$sc'),
		('$calc_id', '$user_id', '$date', 'L', 'INT', 'Длина колонны бурильных труб', 'мм', '$L'),
		('$calc_id', '$user_id', '$date', 'dn26', 'INT', 'Наружный диаметр УБТ', 'мм', '$dn26'),
		('$calc_id', '$user_id', '$date', 'Lybt', 'INT', 'Длина колонны УБТ', 'мм', '$Lybt'),
		('$calc_id', '$user_id', '$date', 'glv', 'INT', 'Глубина по вертикали', 'мм', '$glv')");

		mysqli_query($connect, "INSERT INTO `output6` (`calc_id`, `user_id`, `date`, `output_name`, `data_type`, `discription`, `unit`, `value`) VALUES('$calc_id', '$user_id', '$date', 'q36', 'INT', 'Отсчет вискозиметра', 'мм^2', '$q36'),
			('$calc_id', '$user_id', '$date', 'q66', 'INT', 'Отсчет вискозиметра', 'мм', '$q66'),
			('$calc_id', '$user_id', '$date', 'n6', 'INT', 'Реологические показания', 'л/с', '$n6'),
			('$calc_id', '$user_id', '$date', 'K6', 'INT', 'Реологические показания', 'м/c', '$K6'),
			('$calc_id', '$user_id', '$date', 'vx66', 'INT', 'Скорость в кольцевом пространстве вокруг бурильных труб', 'МПа', '$vx66'),
			('$calc_id', '$user_id', '$date', 'v62', 'INT', 'НСкорость в кольцевом пространстве вокруг УБТ', 'м/c', '$v62'),
			('$calc_id', '$user_id', '$date', 'vkr6', 'INT', 'Критическкая скорость вокруг бурильных труб', 'м/c', '$vkr6'),
			('$calc_id', '$user_id', '$date', 'vkry6', 'INT', 'Критическая скорость вокруг УБТ', 'м/c', '$vkry6'),
			('$calc_id', '$user_id', '$date', 'pekv', 'INT', 'Эквивалентная циркуляция плотности', 'м/c', '$pekv')");
		
?>