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
              <h1 class="all-tittles">Calificaciones del periodo <small>  </small></h1>
            </div>
        </div>
		<div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-6 col-sm-2 col-md-3">
                    <img src="../matri-landingpage/assets/img/user01.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-6 col-sm-2 col-md-4 text-justify lead">
                        <div><span>Nombre:</span> <small>Allan Rafael Velasquez Ordoñez</small></div>
						<div><span>Cuenta:</span> <small>20111011599</small></div>   
						<div><span>Carrera:</span> <small>Ingeniería en sistemas</small></div>   
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 text-justify lead">
                    <div><span>Campus:</span> <small>Ciudad Universitaria</small></div>
					<div><span>Año:</span> <small>2018</small></div> 
					<div><span>Indice periodo:</span> <small>82</small></div>
                </div>
            </div>
		</div>
		<div class="container-fluid">
            <h2 class="text-center all-tittles">Calificaciones</h2>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">
                        <div class="div-table-cell" style="width: 10%;">Cod.</div>
                        <div class="div-table-cell" style="width: 20%;">Asignatura</div>
                        <div class="div-table-cell" style="width: 15%;">Sección</div>
						<div class="div-table-cell" style="width: 10%;">UV</div>
						<div class="div-table-cell" style="width: 10%;">Periodo</div>
						<div class="div-table-cell" style="width: 10%;">Nota</div>
						<div class="div-table-cell" style="width: 20%;">Observación</div>  
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list">
							<div class="div-table-cell" style="width: 10%;">Cod.</div>
							<div class="div-table-cell" style="width: 20%;">Asignatura</div>
							<div class="div-table-cell" style="width: 15%;">Sección</div>
							<div class="div-table-cell" style="width: 10%;">UV</div>
							<div class="div-table-cell" style="width: 10%;">Periodo</div>
							<div class="div-table-cell" style="width: 10%;">Nota</div>
							<div class="div-table-cell" style="width: 20%;">Observación</div>      
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