<?php

$exampleFile = fopen("data.txt", "r");
while (($exampleFile = fgets($exampleFile, 4096)) !== false){
	echo "$exampleFile";
}
fclose($exampleFile);

?>