7<?php 
//llamar a conexion
require_once('conexion.php');
//traer las variables del formulario
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];



// insertar datos en la bd
$conn = new Conexion();
//llamar metodo de la clase
$llamarMetodo = $conn->Conectar();


$sql = "DELETE FROM temas WHERE Titulo = '$titulo' Descripcion = '$descripcion";
$stmt = $llamarMetodo->prepare($sql);
$stmt->execute();
if($stmt){
	echo "datos elimados";
}
else{
	echo "psicologia sena";
}

?>