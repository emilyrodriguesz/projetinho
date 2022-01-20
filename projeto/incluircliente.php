<?php
	include_once("conexao.php");
	
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$data_nascimento=$_POST['data_nascimento'];
		
	$sql="insert into clientes (nome,email,data_nascimento) values ('$nome','$email','$data_nascimento')";
	
	$resultado = @mysqli_query($conect,$sql);
	
	if (!$resultado) {
		die ('Query Inválida: '.@mysqli_error($conect));		
	}else{
		mysqli_close($conect);
		echo "Registro Cadastrado com Sucesso!         <a href='index.php'>Voltar</a>";
		exit;
	}
?>