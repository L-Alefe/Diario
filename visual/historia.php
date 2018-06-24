<?php
	session_start();
	require_once("../php/Conexao.php");
	$conexao = new Conexao();
	$histo1 = "SELECT * FROM histo1 WHERE id=1;";
	$puxarHisto1 = $conexao->getCon()->prepare($histo1);
	$puxarHisto1->execute();
	$histo1 = $puxarHisto1->fetch(PDO::FETCH_OBJ);

	$histo2 = "SELECT * FROM histo2 WHERE id=1;";
	$puxarHisto2 = $conexao->getCon()->prepare($histo2);
	$puxarHisto2->execute();
	$histo2 = $puxarHisto2->fetch(PDO::FETCH_OBJ);

	$histo3 = "SELECT * FROM histo3 WHERE id=1;";
	$puxarHisto3 = $conexao->getCon()->prepare($histo3);
	$puxarHisto3->execute();
	$histo3 = $puxarHisto3->fetch(PDO::FETCH_OBJ);

	$histo4 = "SELECT * FROM histo4 WHERE id=1;";
	$puxarHisto4 = $conexao->getCon()->prepare($histo4);
	$puxarHisto4->execute();
	$histo4 = $puxarHisto4->fetch(PDO::FETCH_OBJ);

	if(!isset($_SESSION["email"])){
	echo "
	<div class='card'>
  <div class='card-content'>
    <p class='title'>
      “Histórias mais engraçadas e marcantes do meu Ensino Médio! ; )”
    </p>
    <br />
    <p class='subtitle'>
	~Ria com estes posts :3
    </p>
  </div>
  <footer class='card-footer'>
    <p class='card-footer-item'>
      <span>
        <span class='tag is-warning'>LEMÚ</span>
      </span>
    </p>
    <p class='card-footer-item'>
      <span>
        <span class='tag is-warning'>TOPETE</span>
      </span>
    </p>
  </footer>
</div>
<br />

<div class='div-conteudoHisto'>
	<section class='hero is-dark'>
		<div class='hero-body'>
			<span class='title' style='color: #fff;'>{$histo1->titulo}<br />
			<span class='subtitle' style='color: #fff;'>{$histo1->subTitulo}</span></span>
			<br /><br />
			<p>{$histo1->descricao}</p>
		</div>
	</section>

	<section class='hero is-warning'>
		<div class='hero-body'>
			<span class='title'>{$histo2->titulo}<br />
			<span class='subtitle' style='color: #444;'>{$histo2->subTitulo}</span></span>
			<br /><br />
			<p>{$histo2->descricao}</p>
		</div>
	</section>

	<section class='hero is-danger'>
		<div class='hero-body'>
			<span class='title'>{$histo3->titulo}<br />
			<span class='subtitle'>{$histo3->subTitulo}</span></span>
			<br /><br />
			<p>{$histo3->descricao}</p>
		</div>
	</section>
		
	<section class='hero is-link'>
		<div class='hero-body'>
			<span class='title' style='color: #fff;'>{$histo4->titulo}<br />
			<span class='subtitle' style='color: #fff;'>{$histo4->subTitulo}</span></span>
			<br /><br />
			<p>{$histo4->descricao}</p>
		</div>
	</section>
</div>
	";
	}else{
		echo "
			<form method='post' action='php/atualizaHisto1.php'>
				<section class='hero is-dark'>
					<div class='hero-body'>
						<input name='tituloHisto1' class='input' value='{$histo1->titulo}' type='text' placeholder='Text input'>
						<input name='subTituloHisto1' class='input' value='{$histo1->subTitulo}' type='text' placeholder='Text input'>
						<br /><br />
						<textarea name='descricaoHisto1' class='textarea'>{$histo1->descricao}</textarea>
						<br />
						<input class='button is-black is-rounded btnTotal' type='submit' value='Atualizar'>
					</div>
				</section>
			</form><br />

			<form method='post' action='php/atualizaHisto2.php'>
				<section class='hero is-warning'>
					<div class='hero-body'>
						<input name='tituloHisto2' class='input' value='{$histo2->titulo}' type='text' placeholder='Text input'>
						<input name='subTituloHisto2' class='input' value='{$histo2->subTitulo}' type='text' placeholder='Text input'>
						<br /><br />
						<textarea name='descricaoHisto2' class='textarea'>{$histo2->descricao}</textarea>
						<br />
						<input class='button is-black is-rounded btnTotal' type='submit' value='Atualizar'>
					</div>
				</section>
			</form><br />

			<form method='post' action='php/atualizaHisto3.php'>
				<section class='hero is-danger'>
					<div class='hero-body'>
						<input name='tituloHisto3' class='input' value='{$histo3->titulo}' type='text' placeholder='Text input'>
						<input name='subTituloHisto3' class='input' value='{$histo3->subTitulo}' type='text' placeholder='Text input'>
						<br /><br />
						<textarea name='descricaoHisto3' class='textarea'>{$histo3->descricao}</textarea>
						<br />
						<input class='button is-black is-rounded btnTotal' type='submit' value='Atualizar'>
					</div>
				</section>
			</form><br />

			<form method='post' action='php/atualizaHisto4.php'>
				<section class='hero is-link'>
					<div class='hero-body'>
						<input name='tituloHisto4' class='input' value='{$histo4->titulo}' type='text' placeholder='Text input'>
						<input name='subTituloHisto4' class='input' value='{$histo4->subTitulo}' type='text' placeholder='Text input'>
						<br /><br />
						<textarea name='descricaoHisto4' class='textarea'>{$histo4->descricao}</textarea>
						<br />
						<input class='button is-black is-rounded btnTotal' type='submit' value='Atualizar'>
					</div>
				</section>
			</form>
		";
	}
?>
