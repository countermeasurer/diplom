<?php 
	session_start();
	require_once 'vendor/connect.php';

	$pr3 = trim($_POST['pr3']);
	$qr3 = trim($_POST['qr3']);
	$qr32 = trim($_POST['qr32']);
	$dskv3 = trim($_POST['dskv3']);
	$dn23 = trim($_POST['dn23']);
	$n = trim($_POST['n']);
	$K = trim($_POST['K']);
	$xr3 = trim($_POST['xr3']);
	$vkr = trim($_POST['vkr']);
	$qkr = trim($_POST['qkr']);


	$date = date("Y-m-d H:i:s");

	$user_id = $_SESSION['user']['id'];

	mysqli_query($connect, "INSERT INTO `calculation` (`user_id`, `date`) VALUES('$user_id', '$date')");

	$chek_calc = mysqli_query($connect, "SELECT * FROM `calculation` WHERE `user_id` = '$user_id' AND `date` = '$date'");

	
		$calc = mysqli_fetch_assoc($chek_calc);
		$_SESSION['calc'] = ["id" => $calc['calc_id']];


	$calc_id = $_SESSION['calc']['id'];

		mysqli_query($connect, "INSERT INTO `input3` (`calc_id`, `user_id`, `date`, `input_name`, `data_type`, `discription`, `unit`, `value`) VALUES('$calc_id', '$user_id', '$date', 'pr3', 'INT', 'Плотность бурового раствора', 'кг/м^3', '$pr3'),
		('$calc_id', '$user_id', '$date', 'qr3', 'INT', 'Отсччет на шкале вискозиметра', 'мм', '$qr3'),
		('$calc_id', '$user_id', '$date', 'qr32', 'INT', 'Отсччет на шкале вискозиметра', 'мм', '$qr32'),
		('$calc_id', '$user_id', '$date', 'dskv3', 'REAL', 'Диаметр скважины', 'мм', '$dskv3'),
		('$calc_id', '$user_id', '$date', 'dskv3', 'REAL', 'Наружний диаметр скважины', 'мм', '$dn23')");

		mysqli_query($connect, "INSERT INTO `output3` (`calc_id`, `user_id`, `date`, `output_name`, `data_type`, `discription`, `unit`, `value`) VALUES('$calc_id', '$user_id', '$date', 'n', 'INT', 'Реологический показатель', 'мм^2', '$n'),
			('$calc_id', '$user_id', '$date', 'K', 'INT', 'Реологический показатель', 'мм^2', '$K'),
			('$calc_id', '$user_id', '$date', 'xr3', 'INT', 'Реологический показатель', 'мм^2', '$xr3'),
			('$calc_id', '$user_id', '$date', 'vkr', 'INT', 'Критическая скорость течения в кольцевом пространстве', 'мм^2', '$vkr'),
			('$calc_id', '$user_id', '$date', 'qkr', 'INT', 'Критический расход бурового раствора', 'мм^2', '$qkr')");
		
?>