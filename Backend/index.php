<?php
	require_once("../admin/sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	
	if( $usuario == false )
	{	
		header("Location: http://127.0.0.1/ArquitectuSistemas/admin/login.php");		
	}
	else 
	{
?>



<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
<script language="JavaScript" type="text/javascript">
//<![CDATA[

<!--

function inhabilitar(){
alert ("Lo siento, no puede usar el clic derecho")
return false
}

document.oncontextmenu=inhabilitar
//]]>
</script>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form>

											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value="">
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<!doctype html>
								<center>
<a href="https://time.is/Colombia" id="time_is_link" rel="nofollow" style="font-size:36px">Hora local en Colombia:</a>
<span id="Colombia_z11b" style="font-size:36px"></span>
<script src="//widget.time.is/t.js"></script>
<script>
time_is_widget.init({Colombia_z11b:{}});
</script>
</center>
<? php // content = "text / plain; charset = utf-8" 
// Ejemplo de Gantt
require_once ( ' jpgraph / jpgraph.php ' ) ;
require_once ( ' jpgraph / jpgraph_gantt.php ' ) ;  
 
$ graph = new GanttGraph ( ) ; 
 
$ graph -> title -> Set ( " Solo mes y año " ) ;
 
// Configurar algunos colores "muy" no estándar
$ graph -> SetMarginColor ( ' lightgreen@0.8 ' ) ;
$ graph -> SetBox ( verdadero , ' amarillo: 0.6 ' , 2 ) ;
$ graph -> SetFrame ( verdadero , ' darkgreen ' , 4 ) ;
$ graph -> scale -> divider -> SetColor ( ' amarillo: 0.6 ' ) ;
$ graph -> scale ->dividerh -> SetColor ( ' amarillo: 0.6 ' ) ;
 
// Establece explícitamente el rango de fechas
// (El ajuste de escala automático también funcionará)
$ graph -> SetDateRange ( ' 2001-10-06 ' , ' 2002-4-10 ' ) ;
 
// Muestra mes y año con las líneas de la cuadrícula
$ graph -> ShowHeaders ( GANTT_HMONTH | GANTT_HYEAR ) ;
$ graph -> scale -> month -> grid -> SetColor ( ' gray ' ) ;
$ graph -> scale -> month -> grid -> Show ( true ) ;
$ graph -> scale -> year -> grid -> SetColor ( ' gray ' ) ;
$ graph -> scale -> year -> grid -> Show ( true ) ;
 
 
// Configurar información de actividad
 
// Para los títulos, también agregamos un ancho mínimo de 100 píxeles para la columna Nombre de la tarea
$ graph -> scale -> actinfo -> SetColTitles ( array ( ' Nombre ' , ' Duración ' , ' Inicio ' , ' Finalizar ' ) , matriz ( 100 ) ) ;
$ graph -> scale -> actinfo -> SetBackgroundColor ( ' verde: 0.5@0.5 ' ) ;
$ graph -> scale -> actinfo ->
    SetFont ( FF_ARIAL , FS_NORMAL , 10 ) ;
$ graph -> scale -> actinfo -> vgrid -> SetStyle ( ' sólido ' ) ;
$ graph -> scale -> actinfo -> vgrid -> SetColor ( ' gris ' ) ;
 
// Datos para nuestras actividades de ejemplo
$ data = array ( array ( 0 , array ( " Pre-estudio " , " 102 días " , " 23 Nov '01 " , " 1 Mar '02 " ) 
          , " 2001-11-23 " , " 2002-03- 1 " , FF_ARIAL , FS_NORMAL , 8 ) ,
     matriz ( 1 , matriz ( " Prototipo " ,"
    21 días " , " 26 Oct '01 " , " 16 Nov '01 " ) ,
           " 2001-10-26 " , " 2001-11-16 " , FF_ARIAL , FS_NORMAL , 8 ) ,
     matriz ( 2 , matriz ( " Informe " , " 12 días " , " 1 mar '02 " , " 13 mar '02 " ) ,
          " 2002-03-01" , " 2002-03-13 " , FF_ARIAL , FS_NORMAL , 8 ) ) ;

    
// Crea las barras y agrégalas al diagrama de Gantt
for ( $ i = 0 ; $ i < count ( $ data ) ; ++ $ i ) { $ bar = new GanttBar ( $ data [ $ i ] [ 0 ] , $ data [ $ i ] [ 1 ] , $ data [ $ i ] [ 2 ] , $ data [ $ i ] [ 3 ] , " [50%] " , 
     10 ) ;
    if ( count ( $ data [ $ i ] ) > 4 ) $ bar -> title -> SetFont ( $ data [ $ i ] [ 4 ] , $ data [ $ i ] [ 5 ] , $ data [ $ i ] [ 6 ] ) ;
    $ bar -> SetPattern ( BAND_RDIAG , " amarillo "  
        ) ;
    $ bar -> SetFillColor ( " gris " ) ;
    $ bar -> progress -> Set ( 0 .5 ) ;
    $ bar -> progress -> SetPattern ( GANTT_SOLID , " darkgreen " ) ;
    $ graph -> Add ( $ bar ) ;
}
 
// Salida el gráfico
$ graph -> Stroke ( ) ;
 
?>
					<!-- //header-ends -->

										<div class="clearfix"></div>		
										
										</div>
										</div>
									<!--//bottom-grids-->
									
									</div>

									<!--/charts-inner-->
									</div>
										<!--//outer-wp-->
									</div>
									 <!--footer section start-->
										<footer>
										
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>Inicio</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  									  
										<li><a class="tooltips" href="http://127.0.0.1/ArquitectuSistemas/admin/cerrarsesion.php"><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Insertar Tema</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="tabs.php">tema</a></li>
										   <li id="menu-academico-avaliacoes" ><a href="vertema.php">ver tema</a></li>
											
										  </ul>
										</li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Insertar Subtemas</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="forms.php">Subtema</a>
												</li>
												
											  </ul>
										 </li>
									
									 
									</li>
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>

<html>
<head>
<center>
<meta charset="utf-8" />
<title>Admin</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script>
$(function () {
$("#datepicker").datepicker();
});
</script>
</head>

<body>
Fecha:
<div id="datepicker"></div>
</body>
</html>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</center>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>

	<?php 
}		
?>   