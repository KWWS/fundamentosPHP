<?php
	$numero1 = $_POST["n1"];
	$numero2 = $_POST["n2"];
	$soma = $numero1 + $numero2;
	$subtracao = $numero1 - $numero2;
	$divisao = $numero1 / $numero2;
	$multiplicacao = $numero1 * $numero2;
	echo $soma;
	echo "<br>";
	echo $subtracao;
	echo "<br>";
	echo $divisao;
	echo "<br>";
	echo $multiplicacao;
	echo "<br>";
?>