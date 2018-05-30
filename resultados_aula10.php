<?php
$numero1 = $_POST["n1"];
$numero2 = $_POST["n2"];
$tipo_operacao = $_POST["operacao"];
	if($numero1==""){
		echo"Preencha N1";
		exit;
	}	
	if($numero2==""){
		echo"Preencha N2";
		exit;
	}	
	if($tipo_operacao=="+"){
		$resultado = $numero1 + $numero2;
	}else if($tipo_operacao=="-"){
		$resultado = $numero1 - $numero2;
	}else if($tipo_operacao=="/"){
		$resultado = $numero1 / $numero2;
	}else if($tipo_operacao=="*"){
		$resultado = $numero1 * $numero2;
	}
	echo "<br>Resultado = </br>".$resultado;
?>