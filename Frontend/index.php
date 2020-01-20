                                                                               <?php   require_once("../admin/sesion.class.php");

																					$sesion = new sesion();
																					if( isset($_POST["iniciar"]) )
																					{
																						
																						$usuario = $_POST["usuario"];
																						$password = $_POST["contrasena"];
																						
																						if(validarUsuario($usuario,$password) == true)
																						{			


																				?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ArquitectuSistemas</title>
<div class="about-agileinfo" id="about">
		<div class="container">
		
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Games Zone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--// css -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

</head>
<!-- //header -->

<!-- bootstrap-pop-up -->
	</button><div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Acceder y Registro
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">Click Me</div>
							  </div>
							  <div class="form">
								<h1>Acceder a tu cuenta</h1>
								<form action="#" method="post">
								  <input type="text" name="Username" placeholder="Username" required="">
								  <input type="password" name="Password" placeholder="Password" required="">
								  <input type="submit" value="Login">
								</form>
							  </div>
							  <div class="form">
								<h1>Crear una cuenta</h1>
								<form action="insertar_usuario.php" method="post">
								  <input type="text" name="nombre" placeholder="Username" required="">
								  <input type="text" name="correo" placeholder="Email Address" required="">
								  <input type="password" name="password" placeholder="Password" required="">
								  <input type="text" name="telefono" placeholder="Phone Number" required="">
								  <input type="submit" value="Register">
								</form>
							  </div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
   
<!-- Header -->
	<div class="header">

		<!-- Navbar -->
		<nav class="navbar navbar-default">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a  href="index.php"><h1>ArquitectuSistemas</h1></a>
					<li class="fa fa-user-o"><a href=" http://127.0.0.1/ArquitectuSistemas/admin/login.php"><h2>Administrador</h2></a></li>
					
																		</div>
																</div>
															</div>
														</div>
													</div>
				</ul>
						
				</div>

				<div id="navbar" class="navbar-collapse collapse">
					
				</div>

			</div>
		</nav>
		<!-- //Navbar -->

		<!-- Slider -->
		<div class="slider">
			<ul class="rslides" id="slider">
				<li>
					<img src="images/003.jpg"" alt="" width="1500" height="1500"/>
				</li>
				<li>
					<img src="images/006.jpg" alt="" width="1500" height="1500"/>
				</li>
				<li>
					<img src="images/024.jpg" alt="" width="1500" height="1500"/>
				</li>
			</ul>
		</div>
		<!-- //Slider -->

	</div>
	<!-- Banner-Slider-JavaScript -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				speed: 600,
				namespace: "callbacks",
				pager: true,
			});
		});
	</script>
	<!-- //Banner-Slider-JavaScript -->
	<!-- //Header -->

<!-- trend -->
<div class="trend-w3layouts">
	<div class="container">
		<h2></h2>
		<ul id="flexiselDemo1">			
				<li>
						<img src="images/017.gif" alt=" "  width="2500" height="300" />
						<div class="trend-grid">
						<h4>Componentes Digitales</h4>
					</div>
				</li>
				<li>
						<img src="images/021.jpg" alt=" " width="250" height="300"/>
						<div class="trend-grid">
						<h4>Respresentacion De Datos</h4>
					</div>
				</li>
				<li>
					<img src="images/020.gif" alt=" " width="250" height="300" />
					<div class="trend-grid">
						<h4>Organizacion Y Diseño De Computadores</h4>
					</div>
				</li>
				<li>
						<img src="images/019.gif" alt=" " width="250" height="300" />
						<div class="trend-grid">
						<h4>Unidad Central De Procesanmiento</h4>
					</div>
				</li>
				<li>
						<img src="images/018.gif" alt="" width="250" height="300"/>
						<div class="trend-grid">
						<h4>Paralelismo Y Procesamiento De Vectores</h4>
					</div>
				</li>
				<li>
					<img src="images/016.png" alt=" " width="250" height="300"/>
					<div class="trend-grid">
						<h4>Multi  procesadores    </h4>
					</div>
				</li>
			</ul>
						<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 4
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
</div>
<!-- //trend -->




<!-- new games -->
<div class="new-w3-agile">
	<div class="container">
		<h3>Temas </h3>
		<div class="col-md-5 new-grid-w3l view view-eighth">
			<img src="images/010.jpg" alt=" " width="640" height="340" />
			<div class="mask">
			<button type="button"
			</button>
					<a  href="ComponentesDigitales.html"><h1>Componentes Digitales</h1></a>
			</div>
		</div>
		<div class="col-md-5 new-grid-w3l view view-eighth">
			<img src="images/011.jpg" alt=" "  width="640" height="340"/>
			<div class="mask">
				<button type="button"
			</button>
					<a  href="representacionDeDatos.html"><h1>Representacion De Datos</h1></a>
			</div>
		</div>
		<div class="col-md-5 new-grid-w3l view view-eighth">
			<img src="images/009.jpg" alt=" " width="640" height="340" />
			<div class="mask">
				<button type="button"
			</button>
					<a  href="DiseñoDeComputadores.html"><h1>Organizacion Y Diseño De Computadores</h1></a>
			</div>
		</div>
		<div class="col-md-5 new-grid-w3l view view-eighth">
			<img src="images/008.jpg" alt=" " width="640" height="340" />
			<div class="mask">
			<button type="button"
			</button>
			        <a  href="UnidadDeProcesamiento.html"><h1>Unidad Central De Procesamiento</h1></a>
				
			</div>
		</div>
		<div class="col-md-5 new-grid-agile view view-eighth">
			<img src="images/014.jpg" alt=" " width="640" height="340" />
			<div class="mask">
			<button type="button"
			</button>
					<a  href="ProcesamientoDeVector.html"><h1>Paralelismo Y Procesamiento De Vectores</h1></a>
				
			</div>
		</div>
		<div class="col-md-5 new-grid-agile view view-eighth">
			<img src="images/015.jpg" alt=" "  width="640" height="340"/>
			<div class="mask">
			<button>
				<a  href="Multiprocesadores.html"><h1>Multiprocesadores</h1></a>
			</button>

			</div><h1>Contactenos</h1></label>
    <div>
        <label for="name">Julian Medina:</label>
       
    </div>
    <div>
        <label for="name">Erika Cortes:</label>
      
    </div>
    <div>
        <label for="mail">julianchom8@gmail.com:</label>
        
    </div>
    <div>
        <label for="mail">erikatatiana1999@hotmail.com:</label>
      
    </div>
    
</form>

</body>

</html>
