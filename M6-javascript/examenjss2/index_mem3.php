<?php
	session_start();
?>
<html>

<head>
	<style>td {border:1px solid black;}</style>
	<script type="text/javascript" src="memory.js"> </script>
</head>

<body onload="onLoaded()">
	<h1>Memory</h1>
	<p>Destapa les cartes i troba les parelles!</p>
	<p><a href="?init=true">Inicialitza partida</a>.</p>

	<form method="post" action="ranking.php">
		Intents: <input type="number" name="intents" readonly=true id="intents" value="0" />
		<br>
		Nom: <input type="text" name="nom" id="nom" />
		<br>
		Temps (Min:Seg): <input type="time" name="tiempo" readonly=true id="tiempo" value="0"  />
		<br />
		Ver Todas las Cartas:<input type="number" name="ayuda" readonly="true" id="ayuda" value ="3" />
		<input type="button" id="botonAyuda" onclick="ayudaVerCartas()" value="Ver Cartas" />
		<br />
		<input type="submit" />
	</form>

	<table>
		<tr>
			<td>
				1
			</td>
			<td>
				2
			</td>
			<td>
				1
			</td>
		</tr>
		<tr>
			<td>
				3
			</td>
			<td>
				2
			</td>
			<td>
				3
			</td>
		</tr>
		<tr>
			<td>
				1
			</td>
			<td>
				3
			</td>
			<td>
				2
			</td>
		</tr>
	</table>

</body>
</html>

