

<html>
<link href="estilos.css" rel="stylesheet" type="text/css">
<body>
<?php
   include("pep lemon.php"); //inclou fitxer per a connectar amb la base de dades
?>
<?php  
$sql = "SELECT * FROM comandes ";
$result = mysqli_query($conn,$sql);
echo "
	<table border = 1 cellspacing = 1 cellpadding = 1>
		<tr>
			<th>IdComanda</th>
			<th>NIF</th>
			<th>Data</th>
			<th>IdProducte</th>
			<th>Quantitat</th>
		</tr>";
while($row = mysqli_fetch_array($result)){
	echo "
		<tr>
			<td>".$row[0]."</td>
			<td>".$row[1]."</td>
			<td>".$row[2]."</td>
			<td>".$row[3]."</td>
			<td>".$row[4]."</td>
		</tr>";
}
echo "</table>";
?>


</body>
</html> 