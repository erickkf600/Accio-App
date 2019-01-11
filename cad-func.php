<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<meta name="robots" content="noindex">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>ACCIO</title>
</head>
<body>
	<?php
	//Tab 1
	$nome  		 = $_POST['nome'];
	$telefone    = $_POST['telefone'];
	$nascimento  = $_POST['nascimento'];
	$cpf      	 = $_POST['cpf'];
	//Tab 2
	$cep 		 = $_POST['cep'];
	$endereco 	 = $_POST['endereco'];
	$numero 	 = $_POST['numero'];
	$cidade 	 = $_POST['cidade'];
	$bairro 	 = $_POST['bairro'];
	$estado 	 = $_POST['estado'];
	//Tab 3
	$email 	 	 = $_POST['email'];
	$usuario 	 = $_POST['usuario'];
	$senha 	 	 = $_POST['senha'];

	include 'banco.php';

	$query = "insert into login(
							nome, 
							telefone, 
							nascimento, 
							cpf, 
							cep,
							endereco,
							numero,
							cidade,
							bairro,
							estado,
							email,
							usuario,
							senha)
						values (
							'$nome', 
							'$telefone', 
							'$nascimento', 
							'$cpf', 
							'$cep',
							'$endereco',
							'$numero',
							'$cidade',
							'$bairro',
							'$estado',
							'$email',
							'$usuario',
							'$senha')";

	$insert = mysqli_query($con, $query);

	if($insert == 1){
		session_start();
		$_SESSION['usuario'] =  $usuario;
		$_SESSION['email'] = $email;
		header("Location: index.php");
	}else{ ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script>
        var toastHTML = '<span id="erro">ERRO TENDE DE NOVO <a href="cadastro.php" class="btn-flat toast-action">OK</a></span>';
        M.toast({html: toastHTML, displayLength: Infinity});
      </script>
	<?php } ?>  
</body>
</html>
