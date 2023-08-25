<?php 
	session_start();
	require_once 'vendor/connect.php';

	$L5 = trim($_POST['L5']);
	$dskv5 = trim($_POST['dskv5']);
	$dn5 = trim($_POST['dn5']);
	$dvn5 = trim($_POST['dvn5']);
	$dn25 = trim($_POST['dn25']);
	$dn25a = trim($_POST['dn25a']);
	$Lybt5 = trim($_POST['Lybt5']);
	$pr5 = trim($_POST['pr5']);
	$qr5 = trim($_POST['qr5']);
	$qr56 = trim($_POST['qr56']);
	$ss = trim($_POST['ss']);
	$n5 = trim($_POST['n5']);
	$K5 = trim($_POST['K5']);
	$vx55 = trim($_POST['vx55']);
	$vm5 = trim($_POST['vm5']);
	$vkr5 = trim($_POST['vkr5']);
	

	$date = date("Y-m-d H:i:s");

	$user_id = $_SESSION['user']['id'];

	mysqli_query($connect, "INSERT INTO `calculation` (`user_id`, `date`) VALUES('$user_id', '$date')");

	$chek_calc = mysqli_query($connect, "SELECT * FROM `calculation` WHERE `user_id` = '$user_id' AND `date` = '$date'");

	
		$calc = mysqli_fetch_assoc($chek_calc);
		$_SESSION['calc'] = ["id" => $calc['calc_id']];


	$calc_id = $_SESSION['calc']['id'];

		mysqli_query($connect, "INSERT INTO `input5` (`calc_id`, `user_id`, `date`, `input_name`, `data_type`, `discription`, `unit`, `value`) VALUES('$calc_id', '$user_id', '$date', 'L5', 'INT', 'Глубина скважины', 'кг/м^3', '$L5'),
		('$calc_id', '$user_id', '$date', 'dskv5', 'INT', 'Диаметр скважины', 'мм', '$dskv5'),
		('$calc_id', '$user_id', '$date', 'dn5', 'INT', 'Наружный диамтер бурильных труб', 'мм', '$dn5'),
		('$calc_id', '$user_id', '$date', 'dvn5', 'REAL', 'Внутренний диаметр бурильных труб', 'мм', '$dvn5'),
		('$calc_id', '$user_id', '$date', 'dn25', 'INT', 'Наружный диаметр УБТ', 'мм', '$dn25'),
		('$calc_id', '$user_id', '$date', 'dn25a', 'INT', 'Внутренний диаметр УБТ', 'мм', '$dn25a'),
		('$calc_id', '$user_id', '$date', 'Lybt5', 'INT', 'Длина УБТ', 'мм', '$Lybt5'),
		('$calc_id', '$user_id', '$date', 'pr5', 'INT', 'Плоьность бурового раствора', 'мм', '$pr5'),
		('$calc_id', '$user_id', '$date', 'qr5', 'INT', 'Показания вискозимнтра', 'мм', '$qr5'),
		('$calc_id', '$user_id', '$date', 'qr56', 'INT', 'Показания вискозиметра', 'мм', '$qr56'),
		('$calc_id', '$user_id', '$date', 'ss', 'INT', 'Средняя скорость спуска бурильной колонны', 'мм', '$ss')");

		mysqli_query($connect, "INSERT INTO `output5` (`calc_id`, `user_id`, `date`, `output_name`, `data_type`, `discription`, `unit`, `value`) VALUES('$calc_id', '$user_id', '$date', 'n5', 'INT', 'Реологтческие показания', 'мм^2', '$n5'),
			('$calc_id', '$user_id', '$date', 'K5', 'INT', 'Реологические показания', 'мм', '$K5'),
			('$calc_id', '$user_id', '$date', 'vx55', 'INT', 'Скорость жидкости в кольцевом пространстве', 'л/с', '$vx55'),
			('$calc_id', '$user_id', '$date', 'vm5', 'INT', 'максимальная скорость труб', 'м/c', '$vm5'),
			('$calc_id', '$user_id', '$date', 'vkr5', 'INT', 'гидродинамическое давление', 'МПа', '$vkr5')");
		
?>