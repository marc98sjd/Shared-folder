<html>
<link href="estilos.css" rel="stylesheet" type="text/css">
<body>
<?php
   include("pep lemon.php"); //inclou fitxer per a connectar amb la base de dades
?>
<?php
$id=$_GET["id"];
$sql = "SELECT * FROM magatzem where Id_magatzem= $id";
$result = mysqli_query($conn,$sql);
echo "
	<table border = 1 cellspacing = 1 cellpadding = 1>
		<tr>
			<th>Id_magatzem</th>
			<th>Localizacion</th>
			<th>Capacitat</th>
			
		</tr>";
while($row = mysqli_fetch_array($result)){
	echo "
		<tr>
			<td>".$row[0]."</td>
			<td>".$row[1]."</td>
			<td>".$row[2]."</td>
		</tr>";
}
echo "</table>";
?>
<br></br>
<?php
$id= $_GET["id"];
$sql = "SELECT * FROM prod_x_magatzem where Id_magatzem= $id";
$result = mysqli_query($conn,$sql);
echo "
	<table border = 1 cellspacing = 1 cellpadding = 1>
		<tr>
			<th>Id_magatzem</th>
			<th>Id_producte</th>
			<th>Stock</th>
			
		</tr>";
while($row = mysqli_fetch_array($result)){
	echo "
		<tr>
			<td>".$row[0]."</td>
			<td>".$row[1]."</td>
			<td>".$row[2]."</td>
			
		</tr>";
}
echo "</table>";
?>
</body>
</html>