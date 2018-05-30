<?php
	$nome=trim($_POST["nome"]);
	$nota1=$_POST["nota1"];
	$nota2=$_POST["nota2"];
	$nota3=$_POST["nota3"];
	$nota4=$_POST["nota4"];
	if($nome==""){
		echo "Preencha o campo nome";
		exit;
	}	
	if(is_numeric($nota1)){
		echo "Preencha o campo Nota1";
		exit;
	}	
	$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
	if($media>=6){
		echo "O aluno foi Aprovado com média: ".$media;
	}else if($media<6){		
	echo "O aluno foi Reprovado com média: ".$media;
	}
?>