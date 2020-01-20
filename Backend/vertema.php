<?php
	require_once("../admin/sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	
	if( $usuario == false )
	{	
		header("Location: http://127.0.0.1/ArquitectuSistemas/admin/login.php");		
	}
	else 
	{}
	?>

<?php
require_once('conexion.php');
$conn = new Conexion();
//llamar metodo de la clase
$llamarMetodo = $conn->Conectar();
$sql = "SELECT * FROM temas ";
$stmt = $llamarMetodo->prepare($sql);
$stmt->execute();	
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Temas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<center>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.php"> <h1>Arquitectu</h1><h2>Sistemas</h2> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="http://127.0.0.1/ArquitectuSistemas/admin/cerrarsesion.php"><i class="fa fa-sign-out"></i> Cerrar sesion</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
     <div class="inbox">
    	  <h2>Temas Insertados</h2>

    	 
    	 	<div class="tab-pane active text-style" id="tab1">
	    	 	<div class="mailbox-border">
	                <table class="table table-bordered">
	                    <tbody>
       					<div class="table-responsive ">
                                
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Nombre del tema</th>
                                      <th>Localizacion</th> 
                                      <th></th>                                                           
                                  </tr>
                              </thead>
 						<?php
		
 						 
 					
   
  						while($row = $stmt->fetch()){ 
  					    ?>
      						<tr>
      						<td><?php echo "$row[0]";?></td>
      						<td><?php echo "$row[1]";?></td>
      						<td><?php echo "$row[2]";?></td>
      						
                        <?php
						}
						?>
	                       </div>  
	                    </tbody>
	                </table>
	               </div>   
               <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
	 </center>
</div>
<!--inner block end here-->
<!--copy rights start here-->	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>	
			  <div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>Inicio</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>	  
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
												<li id="menu-academico-avaliacoes" ><a href="forms.php">Subtema</a><li id="menu-academico-avaliacoes" ><a href="versubtema.php">ver subtema</a>
												</li>
												
											  </ul>
										 </li>
		           		           
		          </ul>
		        </li>
		        
		       

		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
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
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>  
	<?php 
	
?>                                