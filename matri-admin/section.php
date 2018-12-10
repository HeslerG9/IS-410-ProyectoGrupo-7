<!DOCTYPE html>
<html lang="es">
<head>
	<title>Secciones</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../matri-landingpage/css/main.css">
	<link href="../matri-landingpage/img/unah10.png" rel="icon">
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
              <h1 class="all-tittles">Sistema de matrícula <small>   Administración de secciones</small></h1>
            </div>
		</div>
		<!--
		<div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nueva sección</li>
                      <li><a href="listsection.html">Listado de secciones</a></li>
                    </ol>
                </div>
            </div>
		</div>
		-->
		<div class="container-fluid"  style="margin: 50px 0;">
				<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-3">
					<img src="../matri-landingpage/assets/img/section.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
				</div>
					<div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
					En este apartado se podrá registrar nuevas secciones
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 lead">
					<ol class="breadcrumb">
					  <li class="active">Nueva sección</li>
					  <li><a href="listSection.html">Listado de secciones</a></li>
					</ol>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="container-flat-form">
				<div class="title-flat-form title-flat-blue">Registrar una nueva sección</div>
				<form autocomplete="off">
					<div class="row">
					   <div class="col-xs-12 col-sm-8 col-sm-offset-2">
						   <legend>Datos de las secciones</legend>
						   <br><br>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="ID de sección" pattern="[0-9]{1,10}" required="required" maxlength="10" data-toggle="tooltip" data-placement="top" title="codigo de sección">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>ID</label>
							</div>						
    						<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Código alterno" pattern="[0-9]{1,10}" required="required" minlength="4" maxlength="4" data-toggle="tooltip" data-placement="top" title="codigo alterno">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Código</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Hora inicio" pattern="[0-9]{1,10}" required="required" minlength="4" maxlength="4" data-toggle="tooltip" data-placement="top" title="Hora inicio">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Hora inicio</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Hora final" pattern="[0-9]{1,10}" required="required" minlength="4" maxlength="4" data-toggle="tooltip" data-placement="top" title="Hora final">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Hora final</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Días" required="required" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Días">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Días</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Cantidad de cupos" pattern="[0-9]{1,10}" required="required" minlength="1" maxlength="4" data-toggle="tooltip" data-placement="top" title="Cantidad cupos">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Cupos</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Aula" required="required" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9 ]{3,15}" maxlength="15" data-toggle="tooltip" data-placement="top" title="Aula">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Aula</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Asignatura" required="required" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9 ]{3,15}" maxlength="15" data-toggle="tooltip" data-placement="top" title="Asignatura">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Asignatura</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Maestro" required="required" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9 ]{3,15}" maxlength="15" data-toggle="tooltip" data-placement="top" title="Maestro">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Maestro</label>
							</div>
							<p class="text-center">
								<button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
								<button type="button" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
							</p> 
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>


	

	<!-- Notifications area -->
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