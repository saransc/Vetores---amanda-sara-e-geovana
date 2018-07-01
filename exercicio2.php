<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 2</title>
</head>
<body>

<?php

$num = array ();
$num[0] = Array(10);
$num[1] = Array(7);
$num[2] = Array(-6);
$num[3] = Array(8);
$num[4] = Array(-4);
$num[5] = Array(9);
$num[6] = Array(8);
$num[7] = Array(7);
$num[8] = Array(-2);
$num[9] = Array(6);

$qtdeneg=0;
$x=0;
$qtdepos=0;
$qtdepar=0;
$qtdeimp=0;
$y=0;
$z=0;
$a=0;


for ($x > 0; $x < 9; $x++) {
if ($num[$x][0]<0){
	$qtdeneg=$qtdeneg+1;
}
}
echo "A quantidade de negativos e ".$qtdeneg;
echo "<br>";

for ($y > 0; $y < 9; $y++) {
if ($num[$y][0]>0){
	$qtdepos=$qtdepos+1;
}
}
echo "A quantidade de positivos e ".$qtdepos;

for ($z > 0; $z < 9; $z++) {
if ($num[$z][0]%2==0){
	$qtdepar=$qtdepar+1;
}
}
echo "<br>";
echo "A quantidade de par e ".$qtdepar;
echo "<br>";

for ($a > 0; $a < 9; $a++) {
if ($num[$a][0]%2<>0){
	$qtdeimp=$qtdeimp+1;
}
}
echo "A quantidade de impar e ".$qtdeimp;



