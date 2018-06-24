<?php
	session_start();
	require_once("Conexao.php");
	$conexao = new Conexao();

	$tituloHisto2 = $_POST["tituloHisto2"];
	$subTituloHisto2 = $_POST["subTituloHisto2"];
	$descricaoHisto2 = $_POST["descricaoHisto2"];

	$updateHisto2 = "UPDATE histo2 SET titulo=?, subTitulo=?, descricao=? WHERE id=1;";
	$execucao = $conexao->getCon()->prepare($updateHisto2);
	$execucao->bindParam(1, $tituloHisto2);
	$execucao->bindParam(2, $subTituloHisto2);
	$execucao->bindParam(3, $descricaoHisto2);
	$execucao->execute();
	header("Location: ../");
?>
