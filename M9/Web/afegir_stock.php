<html>
<link href="estilos.css" rel="stylesheet" type="text/css">
<body>
<?php
   include("pep lemon.php"); //inclou fitxer per a connectar amb la base de dades
?>

<?php  
	$id = $_GET["id"];
	$idprod = $_GET["idprod"];
	$cap= $_GET["cap"];
	$sql = "Insert into  prod_x_magatzem VALUES( '$id' , '$idprod' ,'$cap')";
	$result = $conn->query($sql);
      


   include("tancar_connexio.php");
   header('Location: html_projecteintegradoe.html');
exit; 
?>


</body>
</html> 