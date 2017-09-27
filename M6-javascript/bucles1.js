function pintarNumeros(num){
	
	for (var i = 1; i <= num; i++) {
		pintaEnParrafo(i);
	}
}

var concatenacion = "";
function pintaEnParrafo(texto){
	
	concatenacion=concatenacion+texto+" ";
	document.getElementById("parrafo").innerHTML = concatenacion;
}

function recorrerNumeros(){
	var num = document.getElementById("num").value;

	pintarNumeros(num);
}