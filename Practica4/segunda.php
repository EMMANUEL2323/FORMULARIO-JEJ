<?php
/*Archivo:  segunda.php
Objetivo: ejemplo de procesamiento de formulario usando GET
Autor:    mamh
*/
$sErr="";
$sNom="";
	/*Verificar que haya llegado el nombre*/
	if (isset($_GET["txtNombre"]) &&  !empty($_GET["txtNombre"]))
		$sNom = $_GET["txtNombre"];
	else
		$sErr = "Faltan datos";
	
	if ($sErr != "")
		header("Location: error.php?sError=".$sErr);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ejemplo formulario HTML5</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h4>Datos capturados</h4>
		Nombre: 
		<?php echo $_GET["Tu Nombre"];?><br/>
        Telefono:
        <?php echo $_GET["Tu Telefono"];?><br/>
        Correo:
        <?php echo $_GET["Tu Email"];?><br/>
        Mensaje:
        <?php echo $_GET["msj"];?><br/>
        Text:
        <?php echo $_GET["text"];?><br/>
        <?php echo $_GET["password"];?><br/>
        <?php echo $_GET["number"];?><br/>
        <?php echo $_GET["email"];?><br/>
        <?php echo $_GET["color"];?><br/>
        <?php echo $_GET["range"];?><br/>
        <?php echo $_GET["date"];?><br/>
        <?php echo $_GET["time"];?><br/>
        <?php echo $_GET["button"];?><br/>
        <?php echo $_GET["submit"];?><br/>

		<a href="index.php">Regresar</a>
	</body>
</html>