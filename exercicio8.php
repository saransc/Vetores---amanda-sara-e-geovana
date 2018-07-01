<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 8</title>
</head>
<body>

<?php

$carros[] = Array();

$carros[0] = Array ("Uno","Fiat","prata","4","2014");
$carros[1] = Array("Fiesta","Ford","preto","2","2015");
$carros[2] = Array("Doblo","Fiat","verde","4","2013");
$carros[3] = Array("Celta","GM","preto","2","2012");
$carros[4] = Array("March","Nissan","prata","2","2015");
$carros[5] = Array("Corsa","GM","branco","2","2010");
$carros[6] = Array("Ranger","Ford","prata","4","2012");
$carros[7] = Array("Trail Blazer","GM","branco","4","2014");
$carros[8] = Array("Ecosport","Ford","preto","4","2013");
$carros[9] =  Array("Tucson","Hyundai","vinho","4","2012");


echo "MODELO E ANO <br>"; 
for ($x = 0; $x < sizeof($carros); $x++) {
	echo $carros[$x][0]. ", ".$carros[$x][4]."<br>";
}

echo "<br>";
echo "<br>";

echo "VEICULOS PRATA <br>"; 
for ($x = 0; $x < sizeof($carros); $x++) {
if ($carros[$x][2] == "prata") {
	echo $carros[$x][0]."<br>";
}
}

echo "<br>";
echo "<br>";

echo "VEICULOS, COR E QUANTIDADE DE PORTA <br>"; 
for ($x = 0; $x < sizeof($carros); $x++) {

	echo $carros[$x][0].", ".$carros[$x][2]." e ".$carros[$x][3]."<br>";
}
echo "<br>";
echo "<br>";

echo "CARROS DA FORD <br>"; 
for ($x = 0; $x < sizeof($carros); $x++) {
if ($carros[$x][1] == "Ford") {
	echo $carros[$x][0]."<br>";
}
}

echo "<br>";
echo "<br>";

echo "CARROS COM ANO MAIOR OU IGUAL A 2013 <br>"; 
for ($x = 0; $x < sizeof($carros); $x++) {
if ($carros[$x][4] >= 2013) {
	echo $carros[$x][0]."<br>";
}
}