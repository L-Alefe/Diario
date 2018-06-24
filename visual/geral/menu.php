<?php
session_start();
if(!isset($_SESSION["email"])){
	echo "<div class='tabs is-centered is-fullwidth is-boxed is-large mobile-only' id='menuDesk'>
		<ul>
			<li class='is-active' id='sobreMim'>
				<a>
				<span><img src='' width='20px;' />Sobre mim</span>
				</a>
			</li>
			<li class='is-active' id='historia'>
				<a>
				<span class='is-small'><i class='fas fa-music' aria-hidden='true'></i></span>
				<span>Histórias</span>
				</a>
			</li>
			<li class='is-active' id='acesso'>
				<a>
				<span class='is-small'><i class='fas fa-film' aria-hidden='true'></i></span>
				<span>Acesso</span>
				</a>
			</li>
		</ul>
	</div>

	<div id='menuMobile'>
		<div id='mostraMenuMobile'></div>
		<nav class='panel'>
			<a class='panel-block is-active' id='sobreMimMobile'>
				<span class='panel-icon'>
					<i class='fas fa-book' aria-hidden='true'></i>
				</span>
				Sobre mim
			</a>
			<a class='panel-block is-active' id='historiaMobile'>
				<span class='panel-icon'>
					<i class='fas fa-book' aria-hidden='true'></i>
				</span>
				Histórias
			</a>
			<a class='panel-block is-active' id='acessoMobile'>
				<span class='panel-icon'>
					<i class='fas fa-book' aria-hidden='true'></i>
				</span>
				Acesso
			</a>
		</nav>
	</div>";
	}else{
		echo "
			<div class='tabs is-centered is-fullwidth is-boxed is-large mobile-only' id='menuDesk'>
			<ul>
				<li class='is-active' id='sobreMim'>
					<a>
					<span class='is-small'><i class='fas fa-image' aria-hidden='true'></i></span>
					<span>Sobre mim</span>
					</a>
				</li>
				<li class='is-active' id='historia'>
					<a>
					<span class='is-small'><i class='fas fa-music' aria-hidden='true'></i></span>
					<span>Histórias</span>
					</a>
				</li>
				<li class='is-active' id='acesso'>
					<a href='php/sair.php'>
					<span class='is-small'><i class='fas fa-film' aria-hidden='true'></i></span>
					<span>Sair</span>
					</a>
				</li>
			</ul>
	</div>
	<div id='menuMobile'>
		<div id='mostraMenuMobile'></div>
		<nav class='panel'>
			<a class='panel-block is-active' id='sobreMimMobile'>
				<span class='panel-icon'>
					<i class='fas fa-book' aria-hidden='true'></i>
				</span>
				Sobre mim
			</a>
			<a class='panel-block is-active' id='historiaMobile'>
				<span class='panel-icon'>
					<i class='fas fa-book' aria-hidden='true'></i>
				</span>
				Histórias
			</a>
			<a class='panel-block is-active' id='acessoMobile' href='php/sair.php'>
				<span class='panel-icon'>
					<i class='fas fa-book' aria-hidden='true'></i>
				</span>
				Sair
			</a>
		</nav>
	</div>
		";
	}
?>
