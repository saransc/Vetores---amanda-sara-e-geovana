<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 4</title>
</head>
<body>

<?php

$vetor_a = array ();
$vetor_a[0] = Array($num=$_POST['num1']);
$vetor_a[1] = Array($num=$_POST['num2']);
$vetor_a[2] = Array($num=$_POST['num3']);
$vetor_a[3] = Array($num=$_POST['num4']);
$vetor_a[4] = Array($num=$_POST['num5']);
$vetor_a[5] = Array($num=$_POST['num6']);
$vetor_a[6] = Array($num=$_POST['num7']);
$vetor_a[7] = Array($num=$_POST['num8']);
$vetor_a[8] = Array($num=$_POST['num9']);
$vetor_a[9] = Array($num=$_POST['num10']);

$vetor_b = array ();
$vetor_b[0] = Array($num=$_POST['num11']);
$vetor_b[1] = Array($num=$_POST['num12']);
$vetor_b[2] = Array($num=$_POST['num13']);
$vetor_b[3] = Array($num=$_POST['num14']);
$vetor_b[4] = Array($num=$_POST['num15']);
$vetor_b[5] = Array($num=$_POST['num16']);
$vetor_b[6] = Array($num=$_POST['num17']);
$vetor_b[7] = Array($num=$_POST['num18']);
$vetor_b[8] = Array($num=$_POST['num19']);
$vetor_b[9] = Array($num=$_POST['num20']);

/*$mult = ($vetor_a[0][0] * $vetor_b[0][0]);*/

$x=0;

for ($x > 0; $x < 10; $x++) {
$mult=$vetor_a[$x][0]*$vetor_b[$x][0];
echo $vetor_a[$x][0]." x ".$vetor_b[$x][0]." = ".$mult."<br>";
}



