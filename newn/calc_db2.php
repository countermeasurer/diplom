<?php 
	session_start();
	require_once 'vendor/connect.php';

	$pbr = trim($_POST['pbr']);
	$Q = trim($_POST['Q']);
	$rN1 = trim($_POST['rN1']);
	$rN2 = trim($_POST['rN2']);
	$rN3 = trim($_POST['rN3']);
	$Dsk = trim($_POST['Dsk']);
	$nD = trim($_POST['nD']);
	$yDav = trim($_POST['yDav']);
	$Vkol = trim($_POST['Vkol']);
	$P_dav = trim($_POST['P_dav']);
	$Nmos = trim($_POST['Nmos']);
	$Ndel = trim($_POST['Ndel']);
	$Nmk = trim($_POST['Nmk']);
	$procpot = trim($_POST['procpot']);
	$Vnas = trim($_POST['Vnas']);
	$J = trim($_POST['J']);
	$Jmm = trim($_POST['Jmm']);

	$date = date("Y-m-d H:i:s");

	$user_id = $_SESSION['user']['id'];

	mysqli_query($connect, "INSERT INTO `calculation` (`user_id`, `date`) VALUES('$user_id', '$date')");

	$chek_calc = mysqli_query($connect, "SELECT * FROM `calculation` WHERE `user_id` = '$user_id' AND `date` = '$date'");

	
		$calc = mysqli_fetch_assoc($chek_calc);
		$_SESSION['calc'] = ["id" => $calc['calc_id']];


	$calc_id = $_SESSION['calc']['id'];

		mysqli_query($connect, "INSERT INTO `input2` (`calc_id`, `user_id`, `date`, `input_name`, `data_type`, `discription`, `unit`, `value`) VALUES('$calc_id', '$user_id', '$date', 'pbr', 'INT', 'плотность', 'кг/м^3', '$pbr'),
		('$calc_id', '$user_id', '$date', 'pbr', 'INT', 'Плотность бурового раствора', 'мм', '$pbr'),
		('$calc_id', '$user_id', '$date', 'Q', 'REAL', 'Скорость циркуляции', 'мм', '$Q'),
		('$calc_id', '$user_id', '$date', 'rN1', 'REAL', 'Размер насадки 1', 'мм', '$rN1'),
		('$calc_id', '$user_id', '$date', 'rN2', 'REAL', 'Размер насадки 2', 'мм', '$rN2'),
		('$calc_id', '$user_id', '$date', 'rN3', 'REAL', 'Размер насадки 3', 'мм', '$rN3'),
		('$calc_id', '$user_id', '$date', 'Dsk', 'INT', 'Диаметр скважины', 'мм', '$Dsk'),
		('$calc_id', '$user_id', '$date', 'nD', 'INT', 'Наружный диаметр бурильных труб', 'мм', '$nD'),
		('$calc_id', '$user_id', '$date', 'yDav', 'INT', 'Устьевое давление', 'мм', '$yDav')");

		mysqli_query($connect, "INSERT INTO `output2` (`calc_id`, `user_id`, `date`, `output_name`, `data_type`, `discription`, `unit`, `value`) VALUES('$calc_id', '$user_id', '$date', 'Vkol', 'INT', 'Скорость течения в кольцевом пространстве', 'мм^2', '$Vkol'),
		('$calc_id', '$user_id', '$date', 'P_dav', 'REAL', 'Потеря давления на струйных насадках бурового долота', 'МПа', '$P_dav'),
		('$calc_id', '$user_id', '$date', 'Nmos', 'INT', 'Гидравлическая мощность на буровом долоте', 'МПа', '$Nmos'),
		('$calc_id', '$user_id', '$date', 'Ndel', 'INT', 'Потеря давления на долоте', 'МПа', '$Ndel'),
		('$calc_id', '$user_id', '$date', 'Nmk', 'REAL', 'Потеря давления на долоте', 'МПа', '$Nmk'),
		('$calc_id', '$user_id', '$date', 'procpot', 'INT', '% Потери давления на долоте', 'МПа', '$procpot'),
		('$calc_id', '$user_id', '$date', 'Vnas', 'REAL', 'Скорость струи из насадки бурового долота', 'МПа', '$Vnas'),
		('$calc_id', '$user_id', '$date', 'J', 'INT', 'Сила удара струи о забой', 'МПа', '$J'),
		('$calc_id', '$user_id', '$date', 'Jmm', 'INT', 'Сила удара струи о забой на квадратный мм площади долота', 'МПа', '$Jmm')");
		
?>