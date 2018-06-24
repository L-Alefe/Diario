<?php
	session_start();
	require_once("Conexao.php");
	$conexao = new Conexao();

	$tituloHisto4 = $_POST["tituloHisto4"];
	$subTituloHisto4 = $_POST["subTituloHisto4"];
	$descricaoHisto4 = $_POST["descricaoHisto4"];

	$updateHisto4 = "UPDATE histo4 SET titulo=?, subTitulo=?, descricao=? WHERE id=1;";
	$execucao = $conexao->getCon()->prepare($updateHisto4);
	$execucao->bindParam(1, $tituloHisto4);
	$execucao->bindParam(2, $subTituloHisto4);
	$execucao->bindParam(3, $descricaoHisto4);
	$execucao->execute();
	header("Location: ../");
?>
