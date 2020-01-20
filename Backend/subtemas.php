
<?php 
//llamar a conexion
require_once('conexion.php');
//traer las variables del formulario
$conn = new Conexion();
//llamar metodo de la clase
$llamarMetodo = $conn->Conectar();
$sql = "SELECT * FROM temas";
$stmt = $llamarMetodo->prepare($sql);
$stmt->execute();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Agregar tema</title>
</head>
<body>

<form action = "insertar_subtema.php" method="post" enctype="multipart/form-data">
	<input type="text" name="titulo" placeholder="ingrese subtema"><br>
	<input type="text" name="simulador" placeholder="ingrese url del simulador"><br>
	<select name = "tema">
		<option>Seleccione un tema</option>
	<?php 
			 while($row = $stmt->fetch()) {
			 	echo '<option value = "'.$row[0].'"> '.$row[1].' </option>';

			 }

	?>


	</select>
	<br>
	<input type="submit" value="Agregar">
</form>

</body>
</html>