<html>
<link href="estilos.css" rel="stylesheet" type="text/css">
<body>
<?php
   include("pep lemon.php"); //inclou fitxer per a connectar amb la base de dades
?>
<?php
$sql = "SELECT * FROM clients ";
$result = mysqli_query($conn,$sql);
echo "
	<table border = 1 cellspacing = 1 cellpadding = 1>
		<tr>
			<th>NIF</th>
			<th>Nom</th>
			<th>Contacte</th>
			<th>Telefon</th>
			<th>Direcció</th>
			<th>Magatzem</th>
		</tr>";
while($row = mysqli_fetch_array($result)){
	echo "
		<tr>
			<td>".$row[0]."</td>
			<td>".$row[1]."</td>
			<td>".$row[2]."</td>
			<td>".$row[3]."</td>
			<td>".$row[4]."</td>
			<td>".$row[5]."</td>
		</tr>";
}
echo "</table>";
?>
</body>
</html>