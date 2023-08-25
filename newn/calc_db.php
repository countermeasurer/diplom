<?php 
	session_start();
	require_once 'vendor/connect.php';

	$p = trim($_POST['p']);
	$N1 = trim($_POST['N1']);
	$N2 = trim($_POST['N2']);
	$N3 = trim($_POST['N3']);
	$P1 = trim($_POST['P1']);
	$P2 = trim($_POST['P2']);
	$Pc1z = trim($_POST['Pc1z']);
	$Pc2g = trim($_POST['Pc2g']);
	$Pma = trim($_POST['Pma']);
	$Snas = trim($_POST['Snas']);
	$P1a = trim($_POST['P1a']);
	$P2b = trim($_POST['P2b']);
	$M = trim($_POST['M']);
	$Poptz = trim($_POST['Poptz']);
	$Poptg = trim($_POST['Poptg']);
	$Qoptz = trim($_POST['Qoptz']);
	$Qoptg = trim($_POST['Qoptg']);
	$P1z = trim($_POST['P1z']);
	$P1g = trim($_POST['P1g']);
	$Snasz = trim($_POST['Snasz']);
	$Snasg = trim($_POST['Snasg']);
	$Dnasz = trim($_POST['Dnasz']);
	$Dnasg = trim($_POST['Dnasg']);
	$Nnasz = trim($_POST['Nnasz']);
	$Nnasg = trim($_POST['Nnasg']);
	
	$date = date("Y-m-d H:i:s");

	$user_id = $_SESSION['user']['id'];

	mysqli_query($connect, "INSERT INTO `calculation` (`user_id`, `date`) VALUES('$user_id', '$date')");

	$chek_calc = mysqli_query($connect, "SELECT * FROM `calculation` WHERE `user_id` = '$user_id' AND `date` = '$date'");

	
		$calc = mysqli_fetch_assoc($chek_calc);
		$_SESSION['calc'] = ["id" => $calc['calc_id']];


	$calc_id = $_SESSION['calc']['id'];

	mysqli_query($connect, "INSERT INTO `input` (`calc_id`, `user_id`, `date`, `input_name`, `data_type`, `discription`, `unit`, `value`) VALUES('$calc_id', '$user_id', '$date', 'p', 'INT', 'плотность', 'кг/м^3', '$p'),
		('$calc_id', '$user_id', '$date', 'N1', 'REAL', 'Размер насадки 1', 'мм', '$N1'),
		('$calc_id', '$user_id', '$date', 'N2', 'REAL', 'Размер насадки 2', 'мм', '$N2'),
		('$calc_id', '$user_id', '$date', 'N3', 'REAL', 'Размер насадки 3', 'мм', '$N3'),
		('$calc_id', '$user_id', '$date', 'P1', 'INT', 'Давление насоса 1','МПа', '$P1'),
		('$calc_id', '$user_id', '$date', 'P2', 'REAL', 'Давление насоса 2','МПа', '$P2'),
		('$calc_id', '$user_id', '$date', 'Pnas1', 'REAL', 'Подача насоса 1','л/с', '$Pnas1'),
		('$calc_id', '$user_id', '$date', 'Pns2', 'REAL', 'Подача насоса 2','МПа', '$Pns2'),
		('$calc_id', '$user_id', '$date', 'Pma', 'INT', 'Максимальное давление на устье', 'МПа', '$Pma')");


	mysqli_query($connect, "INSERT INTO `output` (`calc_id`, `user_id`, `date`, `output_name`, `data_type`, `discription`, `unit`, `value`) VALUES('$calc_id', '$user_id', '$date', 'Snas', 'INT', 'Площадь сечения насадок', 'мм^2', '$Snas'),
		('$calc_id', '$user_id', '$date', 'P1a', 'REAL', 'Потеря давления', 'мм', '$P1a'),
		('$calc_id', '$user_id', '$date', 'P2b', 'REAL', 'Потеря давления', 'МПа', '$P2b'),
		('$calc_id', '$user_id', '$date', 'Pc1z', 'REAL', 'Суммарные потери давления', '-', '$Pc1z'),
		('$calc_id', '$user_id', '$date', 'Pc2g', 'REAL', 'Суммарные потери давления', 'МПа', '$Pc2g'),
		('$calc_id', '$user_id', '$date', 'M', 'REAL', ' Угловой коэффициент', 'МПа', '$M'),
		('$calc_id', '$user_id', '$date', 'Poptz', 'REAL', ' Оптимальная потеря давления', 'МПа', '$Poptz'),
		('$calc_id', '$user_id', '$date', 'Poptg', 'REAL', 'Оптимальная потеря давления', 'МПа', '$Poptg'),
		('$calc_id', '$user_id', '$date', 'Qoptz', 'REAL', ' Оптимальная подача раствора', 'МПа', '$Qoptz'),
		('$calc_id', '$user_id', '$date', 'Qoptg', 'REAL', ' Оптимальная подача раствора', 'МПа', '$Qoptg'),
		('$calc_id', '$user_id', '$date', 'P1z', 'REAL', ' Падение давления на долоте', 'МПа', '$P1z'),
		('$calc_id', '$user_id', '$date', 'P1g', 'REAL', 'Падение давления на долоте', 'МПа', '$P1g'),
		('$calc_id', '$user_id', '$date', 'Snasz', 'INT', ' Площадь насадок', 'МПа', '$Snasz'),
		('$calc_id', '$user_id', '$date', 'Snasg', 'INT', ' Площадь насадок', 'МПа', '$Snasg'),
		('$calc_id', '$user_id', '$date', 'Dnasz', 'REAL', ' Диаметр Насадок', 'МПа', '$Dnasz'),
		('$calc_id', '$user_id', '$date', 'Dnasg', 'REAL', ' Диаметр насадок', 'МПа', '$Dnasg'),
		('$calc_id', '$user_id', '$date', 'Nnasz', 'REAL', ' Размер насадок', 'МПа', '$Nnasz'),
		('$calc_id', '$user_id', '$date', 'Nnasg', 'REAL', 'Размер насадок', 'МПа', '$Nnasg')");
?>