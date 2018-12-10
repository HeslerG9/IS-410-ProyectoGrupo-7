<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../matri-landingpage/css/main.css">
	<link href="../matri-landingpage/img/unah10.png" rel="icon">
	<script src="../matri-landingpage/js/jquery.min.js"></script>
</head>
<body>
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
				<li class="pull-center">
					<h4>Buscar</h4>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<!--<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>-->
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
				<div class="page-header">
				<h1 class="text-titles">Información <small></small></h1>
				</div>
			</div>

		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Empleados
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">100</p>
					<small>Registrados</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Docentes
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-alt"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">200</p>
					<small>Registrados</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Estudiantes
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-face"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">7000</p>
					<small>Registrados</small>
				</div>
			</article>
			<!--<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Representative
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-female"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">70</p>
					<small>Register</small>
				</div>
			</article>-->
		</div>
		<!--<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">System <small>TimeLine</small></h1>
			</div>
			


		</div>
	</section>

	<! Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notificaciones <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    
				
			  	</div>
			  
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Titulo</h4>
				      	<p class="list-group-item-text">cambio de clave</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Pagos</h4>
				      	<p class="list-group-item-text">Pago pendiete</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>



	<!--====== Scripts -->
	<script src="js/registroCarrera.js"></script>
	<script src="../matri-landingpage/js/jquery-3.1.1.min.js"></script>
	<script src="../matri-landingpage/js/sweetalert2.min.js"></script>
	<script src="../matri-landingpage/js/bootstrap.min.js"></script>
	<script src="../matri-landingpage/js/material.min.js"></script>
	<script src="../matri-landingpage/js/ripples.min.js"></script>
	<script src="../matri-landingpage/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../matri-landingpage/js/main.js"></script>
	<!--<script src="../js/ruta-segura-user.js"></script>-->
	
	<script>
		$.material.init();
	</script>
</body>
</html>