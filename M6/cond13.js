function comprueba2(){
	
	var caracter =document.getElementById("caracter").value;
	
	if(caracter.length==1){
		var caracterLower = caracter.toLowerCase(caracter);
		var expRegVocal = new RegExp("[aeiou]");
		var expRegNum = new RegExp("[0123456789]");
		var expRegCons = new RegExp("[^aeiou]");

		if (expRegVocal.test(caracterLower)) {
			alert("es una vocal");
		}
		else if (expRegCons.test(caracterLower)) {
			alert("es una consonante");
		}
		else if (expRegNum.test(caracterLower)) {
			alert("es un número");
		}
		else{
			alert("es un símbolo");
		}
	}
	else{
		alert("Has introducido mas de un carácter");
	}
}