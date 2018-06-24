<?php
	session_start();

	require_once("Conexao.php");
	$conexao = new Conexao();

	$menu = $_POST["menu"];
	$itemMenu1 = $_POST["itemMenu1"];
	$itemMenu2 = $_POST["itemMenu2"];
	$itemMenu3 = $_POST["itemMenu3"];
	$meuNome = $_POST["meuNome"];
	$minhaFuncao  = $_POST["minhaFuncao"];
	$descricao  = $_POST["entrada"];
	$pergunta  = $_POST["pergunta"];
	$topico1  = $_POST["topico1"];
	$subtopico11  = $_POST["subtopico11"];
	$subtopico21 = $_POST["subtopico21"];
	$subtopico31  = $_POST["subtopico31"];
	$descricaoTopico1  = $_POST["descricaoTopico1"];
	$topico2  = $_POST["topico2"];
	$descricaoTopico2  = $_POST["descricaoTopico2"];
	$topico3  = $_POST["topico3"];
	$descricaoTopico3  = $_POST["descricaoTopico3"];

	/*echo $menu;
	echo "<br />";
	echo $itemMenu1;echo "<br />";
	echo $itemMenu2;echo "<br />";
	echo $itemMenu3;echo "<br />";
	echo $meuNome;echo "<br />";
	echo $minhaFuncao;echo "<br />";
	echo $entrada;echo "<br />";
	echo $pergunta;echo "<br />";
	echo $subtopico11;echo "<br />";
	echo $subtopico21;echo "<br />";
	echo $subtopico31;echo "<br />";
	echo $descricaoTopico1;echo "<br />";
	echo $topico2;echo "<br />";
	echo $descricaoTopico2;echo "<br />";
	echo $topico3;*/
	$updateMenuSobre = "UPDATE menuSobreMim SET titulo=?, itemMenu1=?, itemMenu2=?, itemMenu3=? WHERE id=1;";
	$execucao = $conexao->getCon()->prepare($updateMenuSobre);
	$execucao->bindParam(1, $menu);
	$execucao->bindParam(2, $itemMenu1);
	$execucao->bindParam(3, $itemMenu2);
	$execucao->bindParam(4, $itemMenu3);
	$execucao->execute();

	$updateApresentacao = "UPDATE apresentacao SET nome=?, funcao=?, descricao=? WHERE id=1;";
	$execucao = $conexao->getCon()->prepare($updateApresentacao);
	$execucao->bindParam(1, $meuNome);
	$execucao->bindParam(2, $minhaFuncao);
	$execucao->bindParam(3, $descricao);
	$execucao->execute();
	
	$updateFazer1 = "UPDATE primeiroFazer SET pergunta=?, euFaco=?, ligUm=?, ligDois=?, ligTres=?, descricao=? WHERE id=1;";
	$primeiroFazer = $conexao->getCon()->prepare($updateFazer1);
	$primeiroFazer->bindParam(1, $pergunta);
	$primeiroFazer->bindParam(2, $topico1);
	$primeiroFazer->bindParam(3, $subtopico11);
	$primeiroFazer->bindParam(4, $subtopico21);
	$primeiroFazer->bindParam(5, $subtopico31);
	$primeiroFazer->bindParam(6, $descricaoTopico1);
	$primeiroFazer->execute();

	$updateFazer2 = "UPDATE segundoFazer SET euFaco=?, descricao=? WHERE id=1;";
	$segundoFazer = $conexao->getCon()->prepare($updateFazer2);
	$segundoFazer->bindParam(1, $topico2);
	$segundoFazer->bindParam(2, $descricaoTopico2);
	$segundoFazer->execute();

	$updateFazer3 = "UPDATE terceiroFazer SET euFaco=?, descricao=? WHERE id=1;";
	$terceiroFazer = $conexao->getCon()->prepare($updateFazer3);
	$terceiroFazer->bindParam(1, $topico3);
	$terceiroFazer->bindParam(2, $descricaoTopico3);
	$terceiroFazer->execute();


	header("Location: ../");
?>
