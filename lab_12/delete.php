<?php 

	$host = "localhost"; 
	$user_db = "root";
	$pass_db = "usbw"; 
	$dbase = "abonent"; 
	$dsn = "mysql:host=$host;dbname=$dbase";
	$pdo = new PDO($dsn, $user_db, $pass_db);
	$id = $_GET['id'];

	$sql = 'DELETE FROM `data` WHERE `id` = ?';
	$query = $pdo->prepare($sql);
	$query->execute([$id]);

	header('Location: /lab_12/index.html');
?>