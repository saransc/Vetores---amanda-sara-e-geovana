<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 5</title>
</head>
<body>

<?php

$numero=$_POST['numero'];

$num = array ();
$num[] = "janeiro";
$num[] = "fevereiro";
$num[] = "marco";
$num[] ="abril";
$num[] ="maio";
$num[] ="junho";
$num[] ="julho";
$num[] ="agosto";
$num[] ="setembro";
$num[] ="outubro";
$num[] ="novembro";
$num[] = "dezembro";

for ($x = 0; $x < sizeof($num); $x++) {
	if (($numero -1)== $x) {
		echo $num[$x];
	}
}

