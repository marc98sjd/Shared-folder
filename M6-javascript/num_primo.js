function verificar_primo(num){
	
	for (var i = 1; i < num; i++) {
		if (num%i==0) {
			document.getElementById("parrafo").innerHTML = document.getElementById("parrafo").innerHTML + 1;
		} else {
			pintaEnParrafo(i)
		}
	}
	
}

var concatenacion = "";
function pintaEnParrafo(texto){
	
	document.getElementById("parrafo").innerHTML = concatenacion;
}

function recogernumero(){
	var num = document.getElementById("num").value;

	verificar_primo(num);
}