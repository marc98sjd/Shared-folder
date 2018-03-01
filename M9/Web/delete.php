<html>
<link href="estilos.css" rel="stylesheet" type="text/css">
<body>
<?php
   include("pep lemon.php"); //inclou fitxer per a connectar amb la base de dades
?>

<?php  

	$nif = $_GET["nif"];
	$sql = "delete from clients  WHERE NIF = '$nif';";
	$result = $conn->query($sql);
 
   include("tancar_connexio.php");
   header('Location: html_projecteintegradoe.html');
exit; 
?>


</body>
</html> 