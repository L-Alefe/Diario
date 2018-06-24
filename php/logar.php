<?php
	session_start();
	require_once("Conexao.php");
	$conexao = new Conexao();
	$campoEmail = $_POST["campoEmail"];
	$campoSenha = $_POST["campoSenha"];

	$sql = "SELECT * FROM usuario WHERE email=?;";

	$verificar = $conexao->getCon()->prepare($sql);
	$verificar->bindParam(1,$campoEmail);
	$verificar->execute();
	
	if($verificar->rowCount() > 0){
		$sql1 = "SELECT senha FROM usuario WHERE email=?;";
		$verificar1 = $conexao->getCon()->prepare($sql1);
		$verificar1->bindParam(1, $campoEmail);
		$verificar1->execute();
		$array = $verificar1->fetch(PDO::FETCH_ASSOC);
		$StringSenha = implode($array);
		if($campoSenha == $StringSenha){
			$dados = $verificar->fetch(PDO::FETCH_OBJ);
			$_SESSION["id"] = $dados->id;
			$_SESSION["email"] = $dados->email;
			$_SESSION["senha"] = $dados->senha;
			header('Location: ../index.php');
		}else{
			$inexistente = "inexistente";
			$_SESSION['inexistente'] = $inexistente;
			header('Location: ../login.php');
		}
	}else{
		$inexistente = "inexistente";
		$_SESSION['inexistente'] = $inexistente;
		header('Location: ../index.php');
	}
?>
