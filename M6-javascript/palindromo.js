var frase="";

function palindromo(frase){
	
	var fraseArray = frase.split("");
	var	fraseArrayReverse = fraseArray.reverse();
	var fraseReverse = fraseArrayReverse.join("");
	var textoSinEspacios = fraseReverse.split(" ").join("");
	frase = frase.split(" ").join("");
	return frase === textoSinEspacios;
}

function verificar(){
	frase = document.getElementById("text").value;
	if(palindromo(frase)){
		pinta("es palindromo");
	}
	else{
		pinta("No es palindromo");
	}
}

function pinta(texto){
	alert(texto);
}