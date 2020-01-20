<?php
require_once('conexion.php');
$conn = new Conexion();
//llamar metodo de la clase
$llamarMetodo = $conn->Conectar();
$sql = "SELECT * FROM temas WHERE codigo = '12'";
$stmt = $llamarMetodo->prepare($sql);
$stmt->execute();	
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>A·R K I T E·C / Componentes</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Plafond Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
</head>
<body> 
<!-- banner -->
	<div id="home" class="w3ls-banner banner-inner_agile"> 
<!-- header -->
	<div class="header-w3l">
		 <div class="header-main">
			 <div class="header-top-agileits">
		   	 <div class="container">
				
				<ul class="agile_forms"  data-aos="fade-left">
					<li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> Ingresar</a> </li>
					<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Registrarse</a> </li>
				</ul>
				<div class="clearfix"> </div>
				</div>
			</div>
		   	 <div class="container">
			<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.html"><span>A</span>rkitec  <p class="s-log">M a c h i n e</p></a>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right" data-aos="fade-up">
							<li><a href="index.html">Inicio</a></li>
							<li><a href="about.html">Acerca de</a></li>
							<li class="dropdown menu__item">
										<a href="#" class="dropdown-toggle menu__link active"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Temas<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="componentes.html">Componentes Digitales</a></li>
											<li><a href="representacion.html">Representacion de Datos</a></li>
											<li><a href="organizacion.html">Organizacion y Diseño de Computadores</a></li>
											<li><a href="unidad.html">Unidad Central de Procesamiento</a></li>
											<li><a href="paralelismo.html">Paralelismo y Procesamiento de un Vector</a></li>
											<li><a href="multiprocesadores.html">Multiprocesadores</a></li>
										</ul>
									</li>

							<li><a href="gallery.html" >Galeria</a></li>
							<li><a href="contact.html">Contactenos</a></li>
						</ul>

					</div>
					<div class="clearfix"> </div>	
				</nav>
				<div class="agileits_w3layouts_heding">
				<h4>Tema I</h4>
				<img src="images/head1.png" alt="Lines" /></div>
		   </div>
		   </div>
		<div class="clearfix"> </div>
		<!-- //Nav -->
	</div>	
	<!-- //header -->
	</div>	
	<!-- //banner --> 
<!-- //banner -->
<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Iniciar</h3>	
																			<div class="login-form">
																				<form action="#" method="post">
																					<input type="email" name="email" placeholder="Correo" required="">
																					<input type="password" name="password" placeholder="Contrasena" required="">
																					<div class="tp">
																						<input type="submit" value="Iniciar">
																					</div>
																				</form>
																			</div>
																			<p><a href="#" data-toggle="modal" data-target="#myModal3" > ¿No tiene una cuenta?</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal2 -->	
													<!-- Modal3 -->
													<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Registrar</h3>	
																			<div class="login-form">
																				<form action="#" method="post">
																				   <input type="text" name="name" placeholder="Nombre" required="">
																					<input type="email" name="email" placeholder="Correo" required="">
																					<input type="password" name="password" placeholder="Contrasena"  id="password1" required="">
																					<input type="password" name="password" placeholder="Confirme Contrasena"  id="password2" required="">
																					<input type="submit" value="Registrar">
																				</form>
																			</div>
																			<p><a href="#"> Al hacer clic en registrar, acepta los términos.</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>
													
		<!-- //Modal3 -->
<!-- banner-bottom -->

<?php
while($row = $stmt->fetch()){
	echo '<div class="footer banner-bottom">
	 <div class="container">
	   <div class="agileits_w3layouts_heding">
				<p class="white-w3ls"></p>
				<h3 class="white-w3ls">'.$row[1].'<span></span></h3>
				<img src="images/head1.png" alt="Lines" />
    </div>
			 <div class="footer-right-w3-agile">
			    <form action="#" method="post">
				 <p>'.$row[2].'</p>
				</form>
			 </div>
			<div class="clearfix"></div>
	</div>
	<embed src = ""></embed>
</div>';
  }
?>

<div class="agile_services">
		<div class="container">
			<div class="agileits_w3layouts_heding">
				<p></p>
				<h3><span>Subtemas</span></h3>
				<img src="images/head1.png" alt="Lines" />
			</div>
			<div class="markets-grids">
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
						    <i class="fa fa-desktop" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Registro</h5>
							<p>Un decodificador es un circuito combinacional que convierte la información binaria de n líneas de entradas a un máximo de 2n líneas únicas de salida. Para cada una de las combinaciones de entrada sólo una de la salidas estará activada con un 1 (para cuando es lógica positiva) y todas las otras salidas estarán en 0.</p>
						</div>
						<div class="clearfix"> </div>	
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-home" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Registro</h5>
							<p>Un registro es una memoria de alta velocidad y poca capacidad, integrada en el microprocesador, que permite guardar transitoriamente y acceder a valores muy usados, generalmente en operaciones matemáticas.</p>
						</div>
						<div class="clearfix"> </div>	
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-home" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Contador</h5>
							<p>Es un circuito secuencial construido a partir de Flip flops y compuertas lógicas capaz de realizar el cómputo de los impulsos que recibe en la entrada destinada a tal efecto, almacenar datos o actuar como divisor de frecuencia.</p>
						</div>
						<div class="clearfix"> </div>	
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-university" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Unidades de Memoria</h5>
							<p>Es un dispositivo de hardware formado por un grupo de circuitos integrados, responsable del manejo de los accesos a la memoria por parte de la Unidad de Procesamiento Central (CPU) o procesador.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				

				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div></div>
				
<!-- //banner-bottom -->
<!-- newsletter -->
	<div class="w3layouts_newsletter">
		<div class="container">
			<div class="agileits_w3layouts_heding">
				<p>Contenido Nuevo</p>
				<h3>No te olvides de <span>suscribrirte</span></h3>
				<img src="images/head1.png" alt="Lines" />
			</div>
			<div class="w3layouts_newsletter_right">
			<p class="para-w3layouts white"> Si prefieres ser el primero en recibir nuestro ultimo contenido, susbribete dejandonos tus datos a continuacion.</p>
				<form action="#" method="post">
					<input type="text" name="Name" placeholder="Nombre" required="">
					<input type="email" name="Email" placeholder="Correo Electronico" required="">
					<input type="submit" value="Subscribete">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- contact -->
	<div class="w3l_footer">
		<div class="container">
	<div class="col-md-4">
	<h2><a href="index.html">Arkitec Machine</a></h2>
	</div>
	<div class="col-md-8 botttom-nav-agileits">
		<ul class="nav-w3ls">
			<li><a href="index.html">Inicio</a></li>
			<li><a href="about.html">Acerca de</a></li>
			<li class="dropdown menu__item">
										<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Temas<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="componentes.html">Componentes Digitales</a></li>
											<li><a href="representacion.html">Representacion de Datos</a></li>
											<li><a href="organizacion.html">Organizacion y Diseño de Computadores</a></li>
											<li><a href="unidad.html">Unidad Central de Procesamiento</a></li>
											<li><a href="paralelismo.html">Paralelismo y Procesamiento de un Vector</a></li>
											<li><a href="multiprocesadores.html">Multiprocesadores</a></li>
										</ul>
									</li>
			<li><a href="gallery.html" >Galeria</a></li>
			<li><a href="contact.html">Contactenos</a></li>
		</ul>
		
		<div class="clearfix"> </div>
	</div>	
	<div class="clearfix"> </div>
	</div>
</div>
<!-- //contact -->
<!-- footer -->
	<div class="w3_agile_footer">
		<div class="container">
			<p> Todos los  derechos reservados @2017 © <a href="http://w3layouts.com"></a></p>
			<div class="arrow-container animated fadeInDown">
				<a href="#home" class="arrow-2 scroll">
					<i class="fa fa-angle-up"></i>
				</a>
				<div class="arrow-1 animated hinge infinite zoomIn"></div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
<!-- start-smooth-scrolling -->
<!-- password-script -->  
<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword(){
			var pass2=document.getElementById("password2").value;
			var pass1=document.getElementById("password1").value;
			if(pass1!=pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');	 
				//empty string means no validation error
		}

</script>
<!-- //password-script -->
</body>
</html>