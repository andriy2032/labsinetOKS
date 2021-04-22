<?php 
	
	if ($_POST['post_data'] == 0) {

		$host = 'localhost';
		$user = 'root';
		$pass = 'usbw';
		$db_name = 'abonent';
		$link = mysqli_connect($host, $user, $pass, $db_name);
		if (mysqli_connect_errno()) {
			echo "Помилка підключення: %s\n", mysqli_connect_error();
			exit();
		}
		$sql = mysqli_query($link, "SELECT * FROM `data`;");
		while ($result = mysqli_fetch_assoc($sql)) {
			echo '<ul>';
			echo '<li>'."Прізвище: ", $result['name'], ", Телефон: +380", $result['phone'], ", Адреса: ", $result['adress'].'</li>'; 
			echo '</ul>';
		}
		
	}
	
	else {
		$host = "localhost"; 
		$user_db = "root";
		$pass_db = "usbw"; 
		$dbase = "abonent"; 
		$dsn = "mysql:host=$host;dbname=$dbase";
		$pdo = new PDO($dsn, $user_db, $pass_db);
		echo '<ul>';
		$query = $pdo->query("SELECT * FROM `data`;");
		while ($row = $query->fetch(PDO::FETCH_OBJ)) {
			echo '<li>', $row->name, ' +380', $row->phone, ' ', $row->adress, ' ', '<a href="delete.php"> <button>Видалити</button> </a> </li>';
		}
		echo '</ul>';
	}
	
	
?>
