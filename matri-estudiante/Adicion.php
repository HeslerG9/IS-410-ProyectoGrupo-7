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
            <div class="page-header" >
              <h1 class="all-tittles">Adición de asignaturas <small>  </small></h1>
            </div>
        </div>
       
		
              
                    <!--<li class="list-catalog"></li>-->
                </ul>
            </div>
		<div class="container-fluid">
            <h2 class="text-center all-tittles">Detalle de asignaturas</h2>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">
                        <div class="div-table-cell" style="width: 30%;">Departamento</div>
                        <div class="div-table-cell" style="width: 30%;">Asignatura</div>
						<div class="div-table-cell" style="width: 30%;">Secciones</div>
						<div class="div-table-cell" style="width: 8%;">Agregar</div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list">
                        <div class="div-table-cell" style="width: 30%;">
								<select class="material-control tooltips-general" data-toggle="tooltip" required="required" data-placement="top" title="Elige un departamento">
									<option value="" disabled="" selected="">Selecciona un departamento</option>
									<option value="seccion">Ingenieria en sistemas</option>
									<option value="seccion">Matemáticas</option>
								</select>
						</div>
                        
                        <div class="div-table-cell" style="width: 30%;">
							<select class="material-control tooltips-general" data-toggle="tooltip" required="required" data-placement="top" title="Elige una clase">
								<option value="" disabled="" selected="">Selecciona una clase</option>
								<option value="seccion">Seminario de investigación</option>
								<option value="seccion">Sistemas expertos</option>
							</select>
						</div>
						<div class="div-table-cell" style="width: 30%;">1800</div>  
						<div class="div-table-cell" style="width: 8%;">
							<button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
						</div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
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