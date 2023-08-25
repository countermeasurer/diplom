<?php 
	session_start();
	require_once 'vendor/connect.php';

	$pr5c = trim($_POST['pr5c']);
	$plv5c = trim($_POST['plv5c']);
	$pns5c = trim($_POST['pns5c']);
	$dskv5c = trim($_POST['dskv5c']);
	$dn5c = trim($_POST['dn5c']);
	$L5c = trim($_POST['L5c']);
	$dn25c = trim($_POST['dn25c']);
	$Lybt5c = trim($_POST['Lybt5c']);
	$sst5c = trim($_POST['sst5c']);
	$Lvert5c = trim($_POST['Lvert5c']);
	$v5c = trim($_POST['v5c']);
	$vm5c = trim($_POST['vm5c']);
	$n5c = trim($_POST['n5c']);
	$k5c = trim($_POST['k5c']);
	$t5c = trim($_POST['t5c']);
	$y5c = trim($_POST['y5c']);
	$pcn5c = trim($_POST['pcn5c']);
	$vybt = trim($_POST['vybt']);
	$vmy = trim($_POST['vmy']);
	$q5c = trim($_POST['q5c']);
	$pcny = trim($_POST['pcny']);
	$pcny5= trim($_POST['pcny5']);
	$dp = trim($_POST['dp']);
	$DP = trim($_POST['DP']);
	

	$date = date("Y-m-d H:i:s");

	$user_id = $_SESSION['user']['id'];

	mysqli_query($connect, "INSERT INTO `calculation` (`user_id`, `date`) VALUES('$user_id', '$date')");

	$chek_calc = mysqli_query($connect, "SELECT * FROM `calculation` WHERE `user_id` = '$user_id' AND `date` = '$date'");

	
		$calc = mysqli_fetch_assoc($chek_calc);
		$_SESSION['calc'] = ["id" => $calc['calc_id']];


	$calc_id = $_SESSION['calc']['id'];

		mysqli_query($connect, "INSERT INTO `input5c` (`calc_id`, `user_id`, `date`, `input_name`, `data_type`, `discription`, `unit`, `value`) VALUES('$calc_id', '$user_id', '$date', 'pr5c', 'INT', 'Плотность бурового раствора', 'кг/м^3', '$pr5c'),
		('$calc_id', '$user_id', '$date', 'plv5c', 'INT', 'Пластическая вязкость', 'мм', '$plv5c'),
		('$calc_id', '$user_id', '$date', 'pns5c', 'INT', 'Предельное напряжение сдвига', 'мм', '$pns5c'),
		('$calc_id', '$user_id', '$date', 'dskv5c', 'REAL', 'Диаметр скважины', 'мм', '$dskv5c'),
		('$calc_id', '$user_id', '$date', 'dn5c', 'INT', 'Наружный диаметр бурильных труб', 'мм', '$dn5c'),
		('$calc_id', '$user_id', '$date', 'L5c', 'INT', 'Длина колонны бурильных труб', 'мм', '$L5c'),
		('$calc_id', '$user_id', '$date', 'dn25c', 'INT', 'Наружный диамтер УБТ', 'мм', '$dn25c'),
		('$calc_id', '$user_id', '$date', 'Lybt5c', 'INT', 'Длина колонны УБТ', 'мм', '$Lybt5c'),
		('$calc_id', '$user_id', '$date', 'sst5c', 'INT', 'Скорость спуска труб', 'мм', '$sst5c'),
		('$calc_id', '$user_id', '$date', 'Lvert5c', 'INT', 'Глубина по вертикали', 'мм', '$Lvert5c')");

		mysqli_query($connect, "INSERT INTO `output5c` (`calc_id`, `user_id`, `date`, `output_name`, `data_type`, `discription`, `unit`, `value`) VALUES('$calc_id', '$user_id', '$date', 'v5c', 'INT', 'Скорость жидкости в кольцевом пространстве вокруг бурильных труб', 'мм^2', '$v5c'),
			('$calc_id', '$user_id', '$date', 'vm5c', 'INT', 'Максимальная скорость труб', 'мм', '$vm5c'),
			('$calc_id', '$user_id', '$date', 'n5c', 'INT', 'Реологические показания', 'л/с', '$n5c'),
			('$calc_id', '$user_id', '$date', 'k5c', 'INT', 'Реологические показания', 'м/c', '$k5c'),
			('$calc_id', '$user_id', '$date', 'y5c', 'INT', 'Скорость сдвига бурового раствора вокруг бурильных труб', 'МПа', '$y5c'),
			('$calc_id', '$user_id', '$date', 't5c', 'INT', 'Напряжение сдвига бурового раствора вокруг труб', 'м/c', '$t5c'),
			('$calc_id', '$user_id', '$date', 'pcn5c', 'INT', 'Гидродинамическое давление', 'м/c', '$pcn5c'),
			('$calc_id', '$user_id', '$date', 'vybt', 'INT', 'Теоритическая скорость жидкости вокруг УБТ', 'м/c', '$vybt'),
			('$calc_id', '$user_id', '$date', 'vmy', 'INT', 'Максимальная скорость потока вокруг УБТ', 'м/c', '$vmy'),
			('$calc_id', '$user_id', '$date', 'q5c', 'INT', 'Эквивалентная скорость бурового раствора из-за движения труб', 'м/c', '$q5c'),
			('$calc_id', '$user_id', '$date', 'pcny', 'INT', 'Потеря давления для интервала расположения УБТ', 'м/c', '$pcny'),
			('$calc_id', '$user_id', '$date', 'pcny5', 'INT', 'Суммарное гидродинамическое давление, обусловленное движением труб', 'м/c', '$pcny5'),
			('$calc_id', '$user_id', '$date', 'dp', 'INT', 'Давление в увеличении плотности бурового раствора', 'м/c', '$dp'),
			('$calc_id', '$user_id', '$date', 'DP', 'INT', 'Импульсное давление, создаваемое спуском колонны труб', 'м/c', '$DP'),");
		
?>