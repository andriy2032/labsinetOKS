<?php

if (isset($_POST['num_one'])){
	$h = $_POST['num_one'];
	$k = $_POST['num_two'];
	$c = $_POST['num_three'];
	$r = $_POST['num_four'];
	$w = sqrt(pow($r, 2) + $k * log($c)) + pow (tan($h), 2);
	$result = "<br> Вхідні дані: h = $h, k = $k, c = $c, r = $r <br/> Результат: $w";
	echo "$result";
	$exampleFile = fopen("data.txt", "a");
	fwrite($exampleFile, $result);
	fclose($exampleFile);
}

}

?>