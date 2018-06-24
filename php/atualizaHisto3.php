<?php
	session_start();
	require_once("Conexao.php");
	$conexao = new Conexao();

	$tituloHisto3 = $_POST["tituloHisto3"];
	$subTituloHisto3 = $_POST["subTituloHisto3"];
	$descricaoHisto3 = $_POST["descricaoHisto3"];

	$updateHisto3 = "UPDATE histo3 SET titulo=?, subTitulo=?, descricao=? WHERE id=1;";
	$execucao = $conexao->getCon()->prepare($updateHisto3);
	$execucao->bindParam(1, $tituloHisto3);
	$execucao->bindParam(2, $subTituloHisto3);
	$execucao->bindParam(3, $descricaoHisto3);
	$execucao->execute();
	
	$_SESSION["histo3"] = "histo3";
	header("Location: ../");
?>
