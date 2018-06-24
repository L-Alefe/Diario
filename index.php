<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Diário</title>
		<link rel="icon" href="#" type="image/x-icon" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/geral.css" rel="stylesheet">
		<link href="bulma/css/bulma.min.css" rel="stylesheet">
	</head>
	<body>
		<?php
			session_start();
			require_once("visual/geral/menu.php");
			require_once("php/Conexao.php");

			$conexao = new Conexao();
			$sqlMenuSobreMim = "SELECT * FROM menuSobreMim WHERE id=1;";
			$puxarMenu = $conexao->getCon()->prepare($sqlMenuSobreMim);
			$puxarMenu->execute();
			$menu = $puxarMenu->fetch(PDO::FETCH_OBJ);

			$sqlApresentacao = "SELECT * FROM apresentacao WHERE id=1;";
			$puxarApresentacao = $conexao->getCon()->prepare($sqlApresentacao);
			$puxarApresentacao->execute();
			$apresentacao = $puxarApresentacao->fetch(PDO::FETCH_OBJ);

			$sqlFazer1 = "SELECT * FROM primeiroFazer WHERE id=1;";
			$puxarFazer1 = $conexao->getCon()->prepare($sqlFazer1);
			$puxarFazer1->execute();
			$fazer1 = $puxarFazer1->fetch(PDO::FETCH_OBJ);

			$sqlFazer2 = "SELECT * FROM segundoFazer WHERE id=1;";
			$puxarFazer2 = $conexao->getCon()->prepare($sqlFazer2);
			$puxarFazer2->execute();
			$fazer2 = $puxarFazer2->fetch(PDO::FETCH_OBJ);

			$sqlFazer3 = "SELECT * FROM terceiroFazer WHERE id=1;";
			$puxarFazer3 = $conexao->getCon()->prepare($sqlFazer3);
			$puxarFazer3->execute();
			$fazer3 = $puxarFazer3->fetch(PDO::FETCH_OBJ);

			if(isset($_SESSION["email"])){
				echo "
			<div class='container' id='tudo'>
				<section class='hero is-link'>
					<div class='hero-body'>
							<h1 class='title'>Bem-vindo administrador!</h1>
							<span class='tag is-warning is-large'>Atualize os conteúdos!</span>
					</div>
				</section>
			<br />
			<div class='is-half-mobile columns'>
	<div class='column is-12'>
		<div class='card divAzul'>
			<div class='card-content'>
				<form method='post' action='php/atualizaSobremim.php'>
				<div class='column is-12' id='fixo' style='background-color: #eee;'>
					<aside class='menu'>
						<p class='menu-label'><input value='{$menu->titulo}' name='menu' class='input' type='text'></p>
						<ul class=''>
							<input name='itemMenu1' class='input' value='{$menu->itemMenu1}' type='text' placeholder='Text input'>
							<input name='itemMenu2' class='input' value='{$menu->itemMenu2}' type='text' placeholder='Text input'>
							<input name='itemMenu3' class='input' value='{$menu->itemMenu3}' type='text' placeholder='Text input'>
						</ul>
					</aside>
				</div>
				<br />
				<div class='media'>
					<div class='media-left'>
						<figure class='image is-48x48'>
							<img src='imgs/euGit.jpg' alt='Placeholder image'>
						</figure>
					</div>
					<div class='media-content'>
						<p class='title is-4'><input name='meuNome' class='input is-large' value='{$apresentacao->nome}' type='text' placeholder='Text input'></p>
						<p class='subtitle is-6'><input name='minhaFuncao' class='input' value='{$apresentacao->funcao}' type='text' placeholder='Text input'></p>
					</div>
				</div>
				<div class='content'>
					<input name='entrada' class='input' value='{$apresentacao->descricao}' type='text' placeholder='Text input'>
					<br />
					<br />
					<div class='content'>
						<h2 class='subtitle'><input name='pergunta' class='input is-large' value='{$fazer1->pergunta}' type='text' placeholder='Text input'></h2>
						<div class='notification is-dark'>
							<input name ='topico1' class='input' value='{$fazer1->euFaco}' type='text' placeholder='Text input'>
							<img src='imgs/prova.png' width='17px;'>
							<br /><br />
								<input  name='subtopico11' class='input' value='{$fazer1->ligUm}' type='text' placeholder='Text input'><br />
								<input name='subtopico21' class='input' value='{$fazer1->ligDois}' type='text' placeholder='Text input'><br />
								<input name='subtopico31' class='input' value='{$fazer1->ligTres}' type='text' placeholder='Text input'>
							<p><input name='descricaoTopico1' class='input' value='{$fazer1->descricao}' type='text' placeholder='Text input'><br /></p>
						</div>
						
						<div class='notification is-info'>
							<input name='topico2' class='input' value='{$fazer2->euFaco}' type='text' placeholder='Text input'>
							<img src='imgs/bolaBasquete.png' width='17px;'>
							<br /><br />
							<div class='is-half-mobile columns'>
								<div class='column is-2'><center><img src='imgs/basquete.png' width='200px;'></center></div>
								<div class='column is-10'><textarea name='descricaoTopico2' class='textarea'>{$fazer2->descricao}</textarea></div>
							</div>
						</div>

						<div class='notification is-warning'>
							<input name='topico3' class='input' value='{$fazer3->euFaco}' type='text' placeholder='Text input'>
							<img src='imgs/halter.png' width='17px;'>
							<br /><br />
							<div class='is-half-mobile columns'>
								<div class='column is-2'><center><img src='imgs/basquete.png' width='200px;'></center></div>
								<div class='column is-10'><textarea name='descricaoTopico3' class='textarea'>{$fazer3->descricao}</textarea></div>
							</div>
						</div>
						
					<a href='#'>#olaMundo</a> 
					<div class='aDireita'>
						<span class='tag is-info'>W</span><span class='tag is-warning'>E</span><span class='tag is-danger'>B</span>
					</div>
					<br />
				</div>
				<input class='button is-black is-rounded btnTotal' type='submit' value='Atualizar'>
			</form>
			</div>
		</div>
	</div>
	</div>
	</div>
		";
			}else{
				echo "
			<div class='container' id='tudo'>
			<div class='is-half-mobile columns'>
	<div class='column is-12'>
		<div class='card divAzul'>
			<div class='aDireita'>
				<i class='seta-baixo' onclick=\"collapse('');\"></i>
			</div>
			<div class='card-content'>
				<div class='column is-12' id='fixo' style='background-color: #eee;'>
					<aside class='menu'>
						<p class='menu-label'>{$menu->titulo}</p>
						<ul class=''>
							<li class='itemMenu'><a style='color: #555;'>{$menu->itemMenu1}</a></li>
							<li class='itemMenu'><a style='color: #555;'>{$menu->itemMenu2}</a></li>
							<li class='itemMenu'><a style='color: #555;'>{$menu->itemMenu3}</a></li>
						</ul>
					</aside>
				</div>
				<br />
					<br /><span class='tag is-warning aDireita'><b>Bem vindo!</b></span>
				<div class='media'>
					<div class='media-left'>
						<figure class='image is-48x48'>
							<img src='imgs/euGit.jpg' alt='Placeholder image'>
						</figure>
					</div>
					<div class='media-content'>
						<p class='is-4 textoMedio'><b>{$apresentacao->nome}</b></p>
						<p class='subtitle is-6'>{$apresentacao->funcao} <img src='imgs/dancando.png' width='20px;'></p>
					</div>
				</div>
				<div class='content'>
					{$apresentacao->descricao}<br /><br />
					<a class='button is-rounded' href='https://github.com/L-Alefe' target='_blank'><img src='imgs/git.svg' width='15px;' /></a>
					<a class='button is-rounded is-black' href='http://lemuel.ntectreinamentos.com.br/portfolio/curriculo/curriculoLemu.html' target='_blank'>CURRICULUM</a>
					<br />
					<br />
					<div class='content'>
						<h2 class='subtitle'><b>{$fazer1->pergunta}</b></h2>

						<div class='notification is-dark'>
							<b>{$fazer1->euFaco} <b class='textoVermelho'>&lt/&gt</b></b>
							<br /><br />
								<b style='color: #5c6bc0;'>{$fazer1->ligUm}</b><br />
								<b>{$fazer1->ligDois}</b><br />
								<b style='color: #FFD700;'>{$fazer1->ligTres}</b><br /><br />
							<p>{$fazer1->descricao}</p>
						</div>

						<div class='notification is-info'>
							<b>~{$fazer2->euFaco} <img src='imgs/bolaBasquete.png' width='17px;'></b>
							<br /><br />
							<div class='is-half-mobile columns'>
								<div class='column is-2'><center><img src='imgs/basquete.png' width='200px;'></center></div>
								<div class='column is-10'>{$fazer2->descricao}</div>
							</div>
						</div>
						<div class='notification is-warning'>
							<b>{$fazer3->euFaco} <img src='imgs/halter.png' width='17px;'></b>
							<br /><br />
							<div class='is-half-mobile columns'>
								<div class='column is-2'><center><img src='imgs/himperium.png' width='200px;'></center></div>
								<div class='column is-10'>{$fazer3->descricao}</div>
								<br />
							</div>
						</div>
					</div>
					<a href='#'>#olaMundo</a> 
					<div class='aDireita'>
						<span class='tag is-info'>W</span><span class='tag is-warning'>E</span><span class='tag is-danger'>B</span>
					</div>
					<br />
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>";
			}
		?>
	</body>
<script src="js/jquery.js"></script>
<script src="js/ajaxOficial.js"></script>
<script src="js/scroll-min.js"></script>
<script src="js/geral.js"></script>
<script>
	carregarInicio();
	/*$(document).ready(function () {
            $('#fixo').scrollToFixed({
                marginTop: 20,
                limit: 1725
            });
        });*/
</script>
<script src="js/acesso.js"></script>
<script src="js/sobreMim.js"></script>
</html>
