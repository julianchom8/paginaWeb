<?php
	require_once("sesion.class.php");

	$sesion = new sesion();
	
	if( isset($_POST["iniciar"]) )
	{
		
		$usuario = $_POST["usuario"];
		$password = $_POST["contrasena"];
		
		if(validarUsuario($usuario,$password) == true)
		{			
			$sesion->set("usuario",$usuario);
			
			header("location: http://127.0.0.1/ArquitectuSistemas/Backend/");
		}
		else 
		{
			echo "Verifica tu nombre de usuario y contrase�a";
		}
	}
	
	function validarUsuario($usuario, $password)
	{
		$conexion = new mysqli("localhost","root","","arquitectu");
		$consulta = "select password from usuarios where correo = '$usuario';";
		
		$result = $conexion->query($consulta);
		
		if($result->num_rows > 0)
		{
			$fila = $result->fetch_assoc();
			if( strcmp($password,$fila["password"]) == 0 )
				return true;						
			else					
				return false;
		}
		else
				return false;
	}

?>
<html>
<head>
<title></title>
</head>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gaming Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
	<div class="padding-all">
		<div class="header">
			<h1><img src="./images/5.png" alt=" ">Administrador</h1>
		</div>


<body>
<form name="frmLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
   <div> <h1><label>Usuario: </label></h1> <input type="text" name = "usuario"/></div>
    <div><label><h1>Contraseña:</h1>> </label> <input type="password" name = "contrasena" /></div>
    <div><input type="submit" name ="iniciar" value="Iniciar Sesion"/></div>
  </div>
</form>
</body>
</html>