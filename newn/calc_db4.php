<?php 
	session_start();
	require_once 'vendor/connect.php';

	$R = trim($_POST['R']);
	$W = trim($_POST['W']);
	$Nob = trim($_POST['Nob']);
	$Diamdol = trim($_POST['Diamdol']);
	$dex = trim($_POST['dex']);

	$date = date("Y-m-d H:i:s");

	$user_id = $_SESSION['user']['id'];

	mysqli_query($connect, "INSERT INTO `calculation` (`user_id`, `date`) VALUES('$user_id', '$date')");

	$chek_calc = mysqli_query($connect, "SELECT * FROM `calculation` WHERE `user_id` = '$user_id' AND `date` = '$date'");

	
		$calc = mysqli_fetch_assoc($chek_calc);
		$_SESSION['calc'] = ["id" => $calc['calc_id']];


	$calc_id = $_SESSION['calc']['id'];

		mysqli_query($connect, "INSERT INTO `input4` (`calc_id`, `user_id`, `date`, `input_name`, `data_type`, `discription`, `unit`, `value`) VALUES('$calc_id', '$user_id', '$date', 'R', 'INT', 'плотность', 'кг/м^3', '$R'),
		('$calc_id', '$user_id', '$date', 'Nob', 'INT', 'Размер насадки 1', 'мм', '$Nob'),
		('$calc_id', '$user_id', '$date', 'W', 'INT', 'Размер насадки 1', 'мм', '$W'),
		('$calc_id', '$user_id', '$date', 'Diamdol', 'REAL', 'Размер насадки 1', 'мм', '$Diamdol')");

		mysqli_query($connect, "INSERT INTO `output4` (`calc_id`, `user_id`, `date`, `output_name`, `data_type`, `discription`, `unit`, `value`) VALUES('$calc_id', '$user_id', '$date', 'dex', 'INT', 'Площадь сечения насадок', 'мм^2', '$dex')");
		
?>