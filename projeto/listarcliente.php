<?php
	include_once("conexao.php");
	
	$sql = "select codigo,nome,email,data_nascimento from clientes";
	
	$resultado = @mysqli_query($conect,$sql);
	
	if (!$resultado) {
		die ('Query Inválida: '.@mysqli_error($conect));
		exit;
	}
	
	echo "------>Codigo | Nome | E-mail | Data do nascimento <br><br>";	
	
	while ($exibe = mysqli_fetch_assoc($resultado)){
		echo "<a href='editarclienteform.php?codigo=".$exibe['codigo']."'>Editar</a>";
		echo " | ";
		echo $exibe["codigo"]." | ";
		echo $exibe["nome"]." | ";		
		echo $exibe["email"]." | ";	
		echo $exibe["data_nascimento"]." | ";
		echo "<a href='removercliente.php?codigo=".$exibe['codigo']."'>Remover</a>";
		echo "<br>";
	}
	echo "<br><a href='index.php'>Voltar</a>"
?>