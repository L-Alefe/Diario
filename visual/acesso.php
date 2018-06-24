<br />
<div class="container">
	<article class="message is-warning" id="aviso">
		<div class="message-header">
			<h4><b>ATENÇÃO</b> <img src="imgs/aviso.png" width="18px;"></h4>
			<a class="delete is-medium" id="fecharAviso" onclick="toggle(aviso);"></a>
		</div>
		<div class="message-body aviso">
			<p>Esta parte é reservada apenas para o único usuário <i>administrador</i>. Ele é responsável por manter as informações em tela e fornercer o conteúdo! = )</p>
		</div>
	</article>

	<center>
		<img src="imgs/usr.png" width="50px;" />
		<h5>LOGIN</h5>
	</center>
	<br />
	<div id="nomeConta" class="div-conteudo">Conta</div>
	<div id="formAcesso" class="div-conteudo">
		<form method="post" action="php/logar.php">
			<div class="field">
	  			<label class="label" for="campoEmail">Email:</label>
	  			<div class="control">
					<input class="input" id="campoEmail" name="campoEmail" type="email" placeholder="exemplo@gmail.com">
				</div>
			</div>
			<div class="field">
	  			<label class="password" for="campoSenha"><b>Senha:</b></label>
	  			<div class="control">
					<input class="input" id="campoSenha" name="campoSenha" type="password" placeholder="******">
				</div>
			</div>
			<input class="button is-black is-rounded btnTotal" type="submit" value="Logar">
			<br />
			<br />
		</form>
	</div>
	<br />
	<div class="div-conteudo">
		Bom uso!
	</div>
</div>
