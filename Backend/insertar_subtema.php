<?php 
//llamar a conexion
require_once('conexion.php');
//traer las variables del formulario
$subtitulo = $_POST['subtitulo'];
$descripcion = $_POST['descripcion'];
$foto = $_FILES['imagenes']['name'];



$indicador = rand(0,10000);
//echo $indicador;
$fecha = date('z'); 

$ruta = "fotos/".$fecha.$indicador.$foto;
$carga = @move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

// insertar datos en la bd
$conn = new Conexion();
//llamar metodo de la clase
$llamarMetodo = $conn->Conectar();


$sql = "INSERT INTO subtemas VALUES ('$ruta','$descripcion','$subtitulo')";
$stmt = $llamarMetodo->prepare($sql);
$stmt->execute();
if($stmt){
	echo "datos insertados";
}
else{
	echo "psicologia";
}















?>