<html>
<link href="estilos.css" rel="stylesheet" type="text/css">
<body>
<?php
   include("pep lemon.php"); //inclou fitxer per a connectar amb la base de dades
?>
<?php  
	$nif = $_GET["nif"];
	$nom = $_GET["nom"];
	$contacte = $_GET["cont"];
	$telefon = $_GET["telefon"];
	$adre = $_GET["adre"];
	$magatzem = $_GET["magatzem"];
	$sql = "Insert into clients Values ('$nif','$nom','$contacte',$telefon,'$adre',$magatzem)";
	$result = $conn->query($sql);
	
   include("tancar_connexio.php");
   header('Location: html_projecteintegradoe.html');
exit; 
?>
</body>
</html> 
