var divTudo = document.getElementById("tudo");
var sobreMim = document.getElementById("sobreMim");
var historia = document.getElementById("historia");
var acesso = document.getElementById("acesso");


var sobreMimMobile = document.getElementById("sobreMimMobile");
var historiaMobile = document.getElementById("historiaMobile");
var acessoMobile = document.getElementById("acessoMobile");


function carregarInicio(){
	sobreMim.setAttribute("class", "is-active");
	sobreMimMobile.setAttribute("class", "panel-block is-active");
	historiaMobile.classList.remove("is-active");
	acessoMobile.classList.remove("is-active");
	historia.classList.remove("is-active");
	acesso.classList.remove("is-active");
}

sobreMim.onclick = function(){
	this.setAttribute("class", "is-active");
	historia.classList.remove("is-active");
	acesso.classList.remove("is-active");
	window.location.reload();
}

historia.onclick = function(){
	requisitarArquivo("visual/historia.php", divTudo);
	this.setAttribute("class", "is-active");
	sobreMim.classList.remove("is-active");
	acesso.classList.remove("is-active");
}

acesso.onclick = function(){
	requisitarArquivo("visual/acesso.php", divTudo);
	this.setAttribute("class", "is-active");
	historia.classList.remove("is-active");
	sobreMim.classList.remove("is-active");
}

/*--------------------------------------------------------------------------------------------------------------------*/

sobreMimMobile.onclick = function(){
	this.setAttribute("class", "panel-block is-active");
	historiaMobile.classList.remove("is-active");
	acessoMobile.classList.remove("is-active");
	window.location.reload();
}

historiaMobile.onclick = function(){
	requisitarArquivo("visual/historia.php", divTudo);
	this.setAttribute("class", "panel-block is-active");
	sobreMimMobile.classList.remove("is-active");
	acessoMobile.classList.remove("is-active");
}

acessoMobile.onclick = function(){
	requisitarArquivo("visual/acesso.php", divTudo);
	this.setAttribute("class", "panel-block is-active");
	historiaMobile.classList.remove("is-active");
	sobreMimMobile.classList.remove("is-active");
}

function collapse(){
	var obj = document.getElementById("fixo");
	if(obj.style.display == "none"){
		obj.style.display = "";
	}else{
		obj.style.display = "none";
	}
}
