<?php
	session_start();
	require_once("Conexao.php");
	$conexao = new Conexao();

	$tituloHisto1 = $_POST["tituloHisto1"];
	$subTituloHisto1 = $_POST["subTituloHisto1"];
	$descricaoHisto1 = $_POST["descricaoHisto1"];

	$updateHisto1 = "UPDATE histo1 SET titulo=?, subTitulo=?, descricao=? WHERE id=1;";
	$execucao = $conexao->getCon()->prepare($updateHisto1);
	$execucao->bindParam(1, $tituloHisto1);
	$execucao->bindParam(2, $subTituloHisto1);
	$execucao->bindParam(3, $descricaoHisto1);
	$execucao->execute();
	
	$_SESSION["histo1"] = "histo1";
	header("Location: ../");
?>
