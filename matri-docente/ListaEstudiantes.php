<?php 
    session_start();  
    if (!isset($_SESSION["NumDoc"]))
        header("Location: no-autorizado.html");//Redireccion con PHP
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro de Calificaciones</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
    <link rel="stylesheet" href="../matri-landingpage/css/main.css">
    <link rel="stylesheet" href="../matri-landingpage/css/style-matri.css">
    <link href="../matri-landingpage/img/unah10.png" rel="icon">
		<link href="/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
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
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">1</span>
					</a>
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
		
            <!-- Inicio prueba -->
            <br>
            <br>
            <center> <h1><b>Registro de calificaciones </b> </h1></center>
            <br>
            

			<div class="container-fluid">
                <h2 class="text-center all-tittles">Listado de estudiantes matriculadose en <strong>POO</strong></h2>
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list" style="background-color:#f4ef55; font-weight:bold;">
						<div class="div-table-cell" style="width: 6%;">#Cuenta</div>
                            <div class="div-table-cell" style="width: 10%;">Carrera</div>
                            <div class="div-table-cell" style="width: 12%;">Nombres</div>
                            <div class="div-table-cell" style="width: 12%;">Apellidos</div>
                            <div class="div-table-cell" style="width: 9%;">Email</div>
                            <div class="div-table-cell" style="width: 9%;">Telefono</div>
                            <div class="div-table-cell" style="width: 11%;">Fecha nacimiento</div>
                            <div class="div-table-cell" style="width: 9%;">campus</div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive" id="div-students">
                    <div class="div-table" id="div-table-lista-estudiante" style="margin:0 !important;">
                       
                            
                            </div>
                        </div>
                    </div>
                </div>

           
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
	<script src="js/controlador.js"></script>
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