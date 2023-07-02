<!doctype html>
<html lang="pt-br">
	<head>
		<title>Gafanhotos Imobiliária</title>
		<meta charset="UTF-8">
	</head>
	<body>
     <style>
			body {
				background-image: url("imagens/ParqueGlobaltImperial.JPG");
				background-repeat: no-repeat;
				background-size: cover;
			}
		</style>
		
		



	<?php
		
	
		
		
		$nome 				= $_POST ['nome'];
		$email				= $_POST ["email"];
		$tel			    = $_POST ["tel"];
		$tipoImóvel		= $_POST ["tipodoImóvel"];
		
    if ($_POST["tipodoImóvel"] == "C") {
    $tipoImóvel = "Casa";
    } elseif ($_POST["tipodoImóvel"] == "A") {
    $tipoImóvel = "Apartamento";
    } elseif ($_POST["tipodoImóvel"] == "SC") {
    $tipoImóvel = "Sala Comercial";
    } elseif ($_POST["tipodoImóvel"] == "T") {
    $tipoImóvel = "Terreno";
    } elseif ($_POST["tipodoImóvel"] == "O") {
    $tipoImóvel = "Outros";
    }
		$operacao           = $_POST ["TipodeOperação"];
		if ($operacao == "V") {
    $operacao = "Venda";
    } else if ($operacao == "on") {
    $operacao = "Aluguel";
   }
		$NumeroeLocaldoRegistrodaEscritura			= $_POST ["dono"];
		$datadaEscritura 	= $_POST ["DatadaEscritura:"];
		$valorPretendido    = $_POST ["valor"];
		$descricao			= $_POST ["Descrição"];
		
		
		$desocupado = "Não";
      if (isset($_POST["desocupado"])) {
    $desocupado = $_POST["desocupado"];    
    }

    if ($desocupado == "Sim") {
    
   } else  
	   
   {
     
    }
  
		
		//Dados de arquivos vêm na matriz $_FILES[]
		$foto 			= $_FILES["foto"]["name"];
		
	
		
		if($nome == "")	
		{
			die("Nome está vazio - Programa interrompido"); //die ou echo 
		}
		
		if($email == "") 
		{
			die("O email está incorreto - Programa interrompido!");
		}
		
		if($tel == "")
        {
            die("Telefone está incorreto - Programa interrompido!");
        }
		
		
		if(($valorPretendido < 1) || ($valorPretendido > 99999.99) ) 
		{
			die("O valor deve estar entre 1 e 99999.99 !");
		}
		
		
		echo "Seu Cadastro <hr>";
		echo "O nome do Cliente é " . $nome . "<br>";
		echo "email: " . $email . "<br>";
		echo "O número de Telefone: " . $tel . "<br>";
		echo "Tipo do imóvel: $tipoImóvel <br>";
		echo "Tipo de operação: $operacao  <br>";
		echo "Numero e Local do Registro da Escritura: $NumeroeLocaldoRegistrodaEscritura<br>";
		echo "valor: $valorPretendido <br>";
		echo "O imóvel está desocupado ? <br>$desocupado<br>";
		echo "Descrição: $descricao <br>";
		
		
		echo "<h2>Arquivo</h2>";
		echo "Nome: $foto <br>";
		
		
		
		
		$con = mysqli_connect ("localhost","root","");
		
		
		
		mysqli_select_db($con, "aluno37310888") or
		die("Erro ao abir o Banco de Dados:<br>" .
		mysqli_error($con));
		mysqli_close($con);
		
		
