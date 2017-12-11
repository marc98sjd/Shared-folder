,<html>
<link href="estilos.css" rel="stylesheet" type="text/css">
<body>
<?php
   include("pep lemon.php"); //inclou fitxer per a connectar amb la base de dades
?>

<?php  
	$nif = $_GET["nif"];
	$IdProducte = $_GET["prod"];
	$quantitat = $_GET["quantitat"];
	$sql = "Insert into comandes(NIF , Data , IdProducte , Quantitat)  Values ('$nif',SYSDATE(),$IdProducte,$quantitat)";
	$result = $conn->query($sql);
      


   include("tancar_connexio.php");
   header('Location: html_projecteintegradoe.html');
exit; 
?>


</body>
</html> 
