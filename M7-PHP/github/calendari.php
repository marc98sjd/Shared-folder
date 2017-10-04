<?php

#aquí defineixo les variables que necessitaré mes endavant
$month=date("n");

$year=date("Y");

$diaActual=date("j");

#Aquí obtinc el dia de la semana del primer dia de mes (0 diumenge i 6 dissabte)
$diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;

#Aquí guardem l'ultim dia del mes
$ultimDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));


$meses=array(1=>"Gener","Febrer","Març","Abril","Maig","Juny","Juliol","Agost","Septembre","Octubre","Novembre","Desembre");

?> 

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Calendari mguerra</title>
	<meta charset="utf-8">
	<style>
		#calendar {

			font-family:Arial;
			font-size:12px;
		}
		#calendar caption {

			text-align:left;
			padding:5px 10px;
			background-color:#003366;
			color:#fff;
			font-weight:bold;
		}
		#calendar th {
			background-color:#006699;
			color:#fff;
			width:40px;
		}
		#calendar td {
			text-align:right;
			padding:2px 5px;
			background-color:silver;
		}
		#calendar .hoy {
			background-color:red;
		}
	</style>
</head>
<body>

	<h1>Calendari en php</h1>

	<table id="calendar">
		<caption><?php echo $meses[$month]."pene".$year?></caption>
		<tr>
			<th>Dilluns</th><th>Dimarts</th><th>Dimecres</th><th>Dijous</th>
			<th>Divendres</th><th>Dissabte</th><th>Diumenge</th>
		</tr>
		<tr bgcolor="silver">
			<?php
			$last_cell=$diaSemana+$ultimDiaMes;

			// hacemos un bucle hasta 42, que es el máximo de valores que puede

			// haber... 6 columnas de 7 dias

			for($i=1;$i<=42;$i++)

			{

				if($i==$diaSemana)

				{

					// determinamos en que dia empieza

					$day=1;

				}

				if($i<$diaSemana || $i>=$last_cell)

				{

					// celca vacia

					echo "<td>&nbsp;</td>";

				}else{

					// mostramos el dia

					if($day==$diaActual)

						echo "<td class='hoy'>$day</td>";

					else

						echo "<td>$day</td>";

					$day++;

				}

				// cuando llega al final de la semana, iniciamos una columna nueva

				if($i%7==0)

				{

					echo "</tr><tr>\n";

				}

			}

		?>

		</tr>

</table>

</body>

</html>