<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 3</title>
</head>
<body>

<?php

$numero=$_POST['numero'];

$num = array ();
$num[0] = Array(10);
$num[1] = Array(7);
$num[2] = Array(6);
$num[3] = Array(8);
$num[4] = Array(4);
$num[5] = Array(9);
$num[6] = Array(8);
$num[7] = Array(7);
$num[8] = Array(2);
$num[9] = Array(6);

$x=0;

for ($x > 0; $x < 9; $x++) {
$mult=$numero*$num[$x][0];
echo $numero." x ".$num[$x][0]." = ".$mult."<br>";
}
