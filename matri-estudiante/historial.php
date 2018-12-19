<?php 
    session_start();  
    if (!isset($_SESSION["Carrera"]))
		header("Location: no-autorizado.html");//Redireccion con PHP
		?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Sistema de matrícula</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../matri-landingpage/css/main.css">
	<link href="../matri-landingpage/img/unah10.png" rel="icon">
</head>
<body>
	<!-- Dashbar incluido con la funcion de PHP -->
	<?php
	include("sidebar.html")
    ?>
    	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">2</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				
			</ul>
		</nav>
		
		<!-- Content page -->
		<div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Historial Académico <small>  </small></h1>
            </div>
        </div>
		<div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-6 col-sm-2 col-md-3">
                    <img src="../matri-landingpage/assets/img/user01.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-6 col-sm-2 col-md-4 text-justify lead">
                        <div><span>Nombre:</span> <small><?php echo $_SESSION["NombreAlumno"];?>&nbsp<?php echo $_SESSION["ApellidoAlumno"];  ?></small></div>
						<div><span>Cuenta:</span> <small><?php echo $_SESSION["NumCta"];  ?></small></div>  
						<div><span>Carrera:</span> <small><?php echo $_SESSION["Carrera"];  ?></small></div>    
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 text-justify lead">
                    <div><span>Campus:</span> <small>Ciudad Universitaria</small></div>
					<div><span>Indice global:</span> <small>80</small></div>
					<div><span>Indice de periodo:</span> <small>85</small></div>
                </div>
            </div>
		</div>
	
		<div class="container-fluid">
            <h2 class="text-center all-tittles">Información de Asignaturas</h2>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">
                        <div class="div-table-cell" style="width: 6%;">Cod.</div>
						<div class="div-table-cell" style="width: 20%;">Asignatura</div>
						<div class="div-table-cell" style="width: 6%;">UV</div>
						<div class="div-table-cell" style="width: 10%;">Sección</div>
						<div class="div-table-cell" style="width: 8%;">Año</div>
						<div class="div-table-cell" style="width: 6%;">Periodo</div>
                        <div class="div-table-cell" style="width: 10%;">Calificación</div>
                        <div class="div-table-cell" style="width: 15%;">Observación</div>
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div id="div-table-clases" class="div-table" style="margin:0 !important;">
                   
                </div>
            </div>
            
        </div>
	</div>
	<ul class="pagination pagination-sm">
			<li class="disabled"><a href="#!">«</a></li>
			<li class="active"><a href="#!">1</a></li>
			<li><a href="#!">2</a></li>
			<li><a href="#!">3</a></li>
			<li><a href="#!">4</a></li>
			<li><a href="#!">5</a></li>
			<li><a href="#!">»</a></li>
	  </ul>
            </div>
	
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notificationes <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			

		</div>
	</section>

	
	<!--====== Scripts -->
	<script src="../matri-landingpage/js/jquery-3.1.1.min.js"></script>
	<script src="../matri-landingpage/js/sweetalert2.min.js"></script>
	<script src="../matri-landingpage/js/bootstrap.min.js"></script>
	<script src="../matri-landingpage/js/material.min.js"></script>
	<script src="../matri-landingpage/js/ripples.min.js"></script>
	<script src="../matri-landingpage/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../matri-landingpage/js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>