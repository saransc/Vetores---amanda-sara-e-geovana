<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 1</title>
</head>
<body>

<?php

$nome = array ();
$aluno[0] = Array("Marcelo", 10);
$aluno[1] = Array("Ana", 7);
$aluno[2] = Array("Maria",6);
$aluno[3] = Array("Bruno",8);
$aluno[4] = Array("Sergio",4);
$aluno[5] = Array("Douglas",9);
$aluno[6] = Array("Marcela",8);
$aluno[7] = Array("Catarina",7);
$aluno[8] = Array("Jonathan",2);
$aluno[9] = Array("Jorge",6);

$media = ($aluno[0][1] + $aluno[1][1] + $aluno[2][1] + $aluno[3][1] + $aluno[4][1] + $aluno[5][1] + $aluno[6][1] + $aluno[7][1] + $aluno[8][1] + $aluno[9][1])/10;
echo "A media da sala e: ".$media; 
echo "<br>";

if ($aluno[0][1] >= 10) {
	echo "Maior media da sala e ". $aluno[0][0];
}

if ($aluno[1][1] >= 10) {
	echo "Maior media da sala e ". $aluno[1][0];
}

if ($aluno[2][1] >= 10) {
	echo "Maior media da sala e ". $aluno[2][0];
}

if ($aluno[3][1] >= 10) {
	echo "Maior media da sala e ". $aluno[3][0];
}

if ($aluno[4][1] >= 10) {
	echo "Maior media da sala e ". $aluno[4][0];
}

if ($aluno[5][1] >= 10) {
	echo "Maior media da sala e ". $aluno[5][0];
}

if ($aluno[6][1] >= 10) {
	echo "Maior media da sala e ". $aluno[6][0];
}

if ($aluno[7][1] >= 10) {
	echo "Maior media da sala e ". $aluno[7][0];

}

if ($aluno[8][1] >= 10) {
	echo "Maior media da sala e ". $aluno[8][0];
}

if ($aluno[9][1] >= 10) {
	echo "Maior media da sala e ". $aluno[9][0];
}

