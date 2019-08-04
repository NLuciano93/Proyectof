<?php
include_once "config/config.php";

 if (isset($_GET["cv"])) {

 	$cv = $_GET["cv"];

 	$file = 'files/cv/' . $cv;

 	

 	if (is_file($file)) {
 		header('Content-Description: File Transfer');
 		header('Content-Type: application/octet-stream');
 		header('Content-Disposition: attachment; filename ="'.basename($file).'"');
 		header('Expires: 0');
 		header('Cache-Control: must-revalidate');
 		header('Pragma: Public');
 		header('Content-Length: '.filesize($file));
 		readfile($file);
 		exit();
 	}
 }