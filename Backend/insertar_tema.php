<?php 
//llamar a conexion
require_once('conexion.php');
//traer las variables del formulario
$titulo = $_POST['titulo'];

// insertar datos en la bd
$conn = new Conexion();
//llamar metodo de la clase
$llamarMetodo = $conn->Conectar();


$sql = "INSERT INTO temas VALUES (null ,'$titulo')";
$stmt = $llamarMetodo->prepare($sql);
$stmt->execute();
if($stmt){
	echo "datos insertados";
}
else{
	echo "psicologia";
}

?>