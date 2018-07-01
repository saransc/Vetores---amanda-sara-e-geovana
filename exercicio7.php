<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 7</title>
</head>
<body>

<?php

$qtd = 0;
$pess[] = Array();

$pess[0] = Array ("Carlos","Praia Grande","20","masculino");
$pess[1] = Array("Adriana","Santos","35","feminino");
$pess[2] = Array("Diogo","São Vicente","22","masculino");
$pess[3] = Array("Cleber","Mongagua","17","masculino");
$pess[4] = Array("Mauricio","Santos","20","masculino");
$pess[5] = Array("Carina","Praia Grande","15","feminino");
$pess[6] = Array("Renata","Florida","24","feminino");
$pess[7] = Array("Thiago","Londres","15","masculino");
$pess[8] = Array("Erica","Cubatao","13","feminino");
$pess[9] =  Array("Tereza beatriz","Londres","7","feminino");


echo "NOME E IDADE<br>"; 
for ($x = 0; $x < sizeof($pess); $x++) {
	echo $pess[$x][0]. ", ".$pess[$x][2]."<br>";
}

echo "<br>";
echo "<br>";

echo "PESSOAS QUE MORAM EM SANTOS <br>"; 
for ($x = 0; $x < sizeof($pess); $x++) {
if ($pess[$x][1] == "Santos") {
	echo $pess[$x][0]."<br>";
}
}

echo "<br>";
echo "<br>";

echo "MAIS DE 18 ANOS <br>"; 
for ($x = 0; $x < sizeof($pess); $x++) {
if ($pess[$x][2] > 18) {
	echo $pess[$x][0]."<br>";
}
}

echo "<br>";
echo "<br>";

echo "QUANTIDADE DE MASCULINOS <br>"; 
for ($x = 0; $x < sizeof($pess); $x++) {
if ($pess[$x][3] == "masculino") {
	$qtd=$qtd+1;
}
}
echo $qtd;