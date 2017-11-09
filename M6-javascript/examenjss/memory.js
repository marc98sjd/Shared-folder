//Variables globales
var cartaSeleccionada1 = null;
var cartaSeleccionada2 = null;
var numTurnos = 0;

//SPRINT2
var audio = new Audio('sound.mp3');
var gidTiempo = -1;
var numSegundos = 0;
var numMinutos = 0;
var numAyudas = 3;

/*
 Al cargar la pÃ¡gina recorremos la tabla y aÃ±adimos el evento
 onClick en cada celda con la funciÃ³n onCliked(event)
 Activamos el visualizador de tiempo para que se ejecute cada segundo
*/
function onLoaded() {}

//eliminamos el evento click cuando 2 cartas son iguales para que no puedan volver a darse vuelta
function eliminarClick(cartaSeleccionada) {}

//el final del juego llega cuando todas las cartas estan boca arriba
function finalDelJuego() {}

//eliminamos la informaciÃ³n de las cartas seleccionadas actualmente
function limpiarCartasSeleccionadas() {}

//actualizamos el input de tiempo
function actualizarVisualizadorTiempo() {}

/*
Al clicar sobre una celda:
1 guardamos la carta en la posicion 1 o 2 segun sea la primer carta o la segunda
2 le damos la vuelta a la carta (aplicamos una clase)
3 si son iguales quitamos los eventos click para que queden boca arriba
4 si NO son iguales dejamos 2 segundos que se visualicen y les damos la vuelta
*/
function onCliked(event) {
  //guardamos el elemento que ha recibido el click
  var elemento;
  if (navigator.userAgent.indexOf('Firefox') != -1) {
    elemento = event.currentTarget;
  } else {
    elemento = this.event.target;
  }

  if (!ayudaActiva) {
    //Si es la primera carta, la guardamos y le damos la vuelta
    if (cartaSeleccionada1 == null) {
      cartaSeleccionada1 = elemento;
      darVueltaCarta(elemento);

    //Si es la segunda carta, la guardamos, le damos la vuelta, aumentamos los turnos
    }else if (cartaSeleccionada1 != null && cartaSeleccionada1 != elemento
      && cartaSeleccionada2 == null) {
      cartaSeleccionada2 = elemento;
      darVueltaCarta(elemento);
      aumentarTurnos();

      /*Si son iguales eliminamos los eventos click de esas cartas y limpiamos las
      cartas seleccionadas*/
      if (cartasSonIguales()) {
        eliminarClick(cartaSeleccionada1);
        eliminarClick(cartaSeleccionada2);
        fijarCarta(cartaSeleccionada1);
        fijarCarta(cartaSeleccionada2);
        limpiarCartasSeleccionadas();

        //comprobamos si es la ultima jugada y llegamos al final del juego
        if (finalDelJuego()) {
          alert('Ganaste!!! y has utilizado ' + numTurnos + ' turnos!');
          clearInterval(gidTiempo);
        }
      }else {
        //dejamos ver la segunda carta durante 2 segundos y luego giramos las 2 cartas
        setTimeout(girarCartas, 2000);
      }

      actualizarVisualizadorTurnos();
    }
  }
}

//dar la vuelta a la carta (aplicar una clase)
function darVueltaCarta(elemento) {
  elemento.setAttribute('class', 'cartaBocaArriba');
  elemento.style.backgroundColor = 'black';

  //SPRINT2
  audio.play();
}

//si las cartas no coinciden las volvemos a girar y nos preparamos para la siguiente ronda
function girarCartas() {
  cartaSeleccionada1.setAttribute('class', '');
  cartaSeleccionada2.setAttribute('class', '');
  cartaSeleccionada1.style.backgroundColor = 'white';
  cartaSeleccionada2.style.backgroundColor = 'white';
  limpiarCartasSeleccionadas();
}

//comprobamos si las cartas son iguales
function cartasSonIguales() {
  if (cartaSeleccionada1.innerHTML == cartaSeleccionada2.innerHTML) {
    return true;
  }

  return false;
}

//cada vez que 2 cartas se dan la vuelta aumentamos 1 turno
function aumentarTurnos() {
  numTurnos++;
}

//actualizamos el input de intentos
function actualizarVisualizadorTurnos() {
  document.getElementById('intents').value = numTurnos;
}

function fijarCarta(carta) {
  carta.setAttribute('cartaFijada', 'true');
}

function verTodasCartas() {
  //obtenemos las filas
  var trArr = document.getElementsByTagName('tr');

  for (var i = 0; i < trArr.length; i++) {
    //dentro de cada fila obtenemos las celdas
    var tdArr = trArr[i].getElementsByTagName('td');

    for (var j = 0; j < tdArr.length; j++) {
      //aÃ±adimos el evento onClick
      tdArr[j].setAttribute('class', 'cartaBocaArriba');
      tdArr[j].style.backgroundColor = 'black';
    }
  }

  setTimeout(girarTodasCartas, 3000);
}

function girarTodasCartas() {
  //obtenemos las filas
  var trArr = document.getElementsByTagName('tr');

  for (var i = 0; i < trArr.length; i++) {
    //dentro de cada fila obtenemos las celdas
    var tdArr = trArr[i].getElementsByTagName('td');

    for (var j = 0; j < tdArr.length; j++) {

      if (!tdArr[j].hasAttribute('cartaFijada')) {
        tdArr[j].setAttribute('class', '');
        tdArr[j].style.backgroundColor = 'white';
      }
    }
  }

  ayudaActiva = false;
}

function ayudaVerCartas() {
  if (numAyudas > 0) {
    numAyudas--;
    ayudaActiva = true;
    numTurnos = numTurnos + 3;
    actualizarVisualizadorAyudas();
    actualizarVisualizadorTurnos();
    verTodasCartas();
  }
}

function actualizarVisualizadorAyudas() {
  document.getElementById('ayuda').value = numAyudas;
}
