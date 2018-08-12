<?php
	header('Content-Type: application/json');
	echo "start\n";

	$path= $_SERVER["REQUEST_URI"];
	print_r($path);

	$path= preg_split("/\//", $path);
	print_r($path);

	$path= array_filter($path, function($a) {return (strlen($a)>1);});
	print_r($path);
	
	$count= 0;
	foreach($path as $b) {
		if($count++<1) {
			$newPath[]= "./wep/";
		} else {
			$newPath[]= $b.".";
		}
	}
	if(count($path)<2) $newPath[]= "index.php";
	else $newPath[]= "php";
	
	echo join('/', $path)."\n";
	echo join('', $newPath)."\n";
	echo "end\n";
?>