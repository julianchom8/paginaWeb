<?php 
//llamar a conexion
require_once('conexion.php');
//traer las variables del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$telefono = $_POST['telefono'];
insertar datos en la bd
$conn = new Conexion();
//llamar metodo de la clase
$llamarMetodo = $conn->Conectar();


$sql = "INSERT INTO usuarios VALUES ('$nombre','$correo','$password','$telefono')";
$stmt = $llamarMetodo->prepare($sql);
$stmt->execute();
if($stmt){
	echo "datos insertados";
}
else{
	echo "psicologia";
}















?>