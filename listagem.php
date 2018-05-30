<?php
$arquivo_nome = "clientes.txt";
$arquivo=fopen($arquivo_nome, "r");
?>
<table width="100%" style="background-color:#c0c0c0">
	<tr>
		<td>Nome: </td>
	</tr>
	<?php
		while(!feof($arquivo)){
	?>
	<tr style="background-color:#87CEEB">
		<td><?php echo fgets($arquivo); ?></td>
	</tr>
	<?php
		}
	?>
</table>
<a href="novos.php">Novo</a>
<?php
fclose($arquivo);
?>