<html>
<link href="estilos.css" rel="stylesheet" type="text/css">
<body>
<?php
   include("pep lemon.php"); //inclou fitxer per a connectar amb la base de dades
?>

<?php  
	$idcom = $_GET["idcom"];
	$IdProducte = $_GET["prod"];
	$quantitat = $_GET["quantitat"];
	$sql = "update  comandes set IdProducte='$IdProducte' , Quantitat='$quantitat'   WHERE IdComanda = '$idcom'";
	
	$result = $conn->query($sql);
   include("tancar_connexio.php");
   header('Location: html_projecteintegradoe.html');
exit; 
?>
</body>
</html> 
