<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Projeto Integração com Banco de Dados</title>
	</head>
	<body>
		<h1>Cadastro de Clientes</h1>
		<a href="listarcliente.php">Listar Clientes</a>
		<a href="index.php">Voltar</a><br><br>
		<form action="incluircliente.php" method="post">
			Nome: <input type="text" name="nome" maxlength="30"><br>
			Email: <input type="email" name="email" maxlength="50"><br>
			Data do Nascimento: <input type="date" name="data_nascimento" maxlength="20"><br>
			<input type="submit" name="salvar" value="Salvar">
		</form>
	</body>
</html>