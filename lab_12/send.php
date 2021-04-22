<?php 
	if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['adress'])) {
		$host = "localhost"; 
		$user_db = "root";
		$pass_db = "usbw"; 
		$dbase = "abonent"; 
		$dsn = "mysql:host=$host;dbname=$dbase";
		$pdo = new PDO($dsn, $user_db, $pass_db);
		$stmt = $pdo->prepare("INSERT INTO data (name, phone, adress) VALUES (:name, :phone, :adress)");
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$adress = $_POST['adress'];
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':phone', $phone);
		$stmt->bindParam(':adress', $adress);
		
		$stmt->execute();

	}

?>