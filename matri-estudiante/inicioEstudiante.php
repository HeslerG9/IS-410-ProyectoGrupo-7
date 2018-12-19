<?php 
    session_start();  
    if (!isset($_SESSION["Carrera"]))
        header("Location: no-autorizado.html");//Redireccion con PHP
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>UNAH PRINCIPAL</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">



		<!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="../matri-landingpage/css/bootstrap.min.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="../matri-landingpage/img/logo-unah.png">
		<link type="text/css" rel="stylesheet" href="../matri-landingpage/css/style-matri.css"/>
       
        


		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="../matri-landingpage/font-awesome/css/font-awesome.min.css">

	

    </head>


    <body>
           
    <nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content -->
</nav>
    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">
            <div  class="section-header text-center col-xs-12 col-sm-12 col-md-8 col-lg-12 col-xl-12">
                <h1 class="primera">Servicios Al Estudiante</h1>
                <h2><strong> Bienvenido:</strong> <?php echo $_SESSION["NombreAlumno"];?>&nbsp<?php echo $_SESSION["ApellidoAlumno"];?></h2>
                <h3> Tu cuenta de correo electrónico institucional es: <strong><?php echo $_SESSION["CorreoAlumno"];?></strong> <br>
                </h3>
                <h4> Su número de cuenta universitaria es <strong> <?php echo $_SESSION["NumCta"];?></strong> </h4> 
                
                <p class="lead"></p>
                <hr>
            </div>

      
                
                
                
        </div>

    </div>
 
    <div id="courses" class="section">
        <!-- /row -->
        <div class="container">
        <!-- courses -->
        <div   id="courses-wrapper">

            <!-- row -->
            <div class="row">
           
                <!-- single course -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-2">
                    <div class="course">
                        <a href="historial.php" class="course-img">
                            <img src="../matri-landingpage/img/estadistica.jpg" alt="" style="width:90%">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <a class="course-title" href="historial.php">Historial Academico</a>
                        <div class="course-details">
                            <span class="course-category">Puedes ver tu historial académico y estadisticas de tus asignaturas.</span>
                            
                        </div>
                    </div>
                </div>
                <!-- /single course -->

                
                <!-- single course -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-2">
                    <div class="course">
                        <a href="Adicion.php" class="course-img">
                            <img src="../matri-landingpage/img/course04.jpg" alt="">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <a class="course-title" href="Adicion.php">Matricula</a>
                        <div class="course-details">
                            <span class="course-category">Realiza tu Matrícula del periodo</span>
                            
                        </div>
                    </div>
                </div>

                     <!-- single course -->
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-2">
                    <div class="course">
                        <a href="NotasPeriodo.php" class="course-img">
                            <img style="width:112%" src="../matri-landingpage/img/notas.jpg" alt="">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <a class="course-title" href="NotasPeriodo.php">Calificaciones del período</a>
                        <div class="course-details">
                            <span class="course-category">Podras ver las calificaciones del período actual</span>
                            
                        </div>
                    </div>
                </div>
                <!-- /single course -->

                <!-- /single course -->

    
                
                <!-- /single course -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-2">
                    <div class="course">
                        <a href="forma03.php" class="course-img">
                            <img src="../matri-landingpage/img/course01.jpg" alt="">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <a class="course-title" href="forma03.php">Forma03</a>
                        <div class="course-details">
                            <span class="course-category">Podras ver tus clases matriculadas</span>
                            
                        </div>
                    </div>
                </div>


                
                <!-- /single course -->

            </div>
            <!-- /row -->
                       
            <div class="col-6 col-xs-4 col-sm-6 col-md-4 col-lg-2 col-xl-2">
                <div class="course">
                    <a href="#" class="course-img">
                        <img  src="../matri-landingpage/img/evaluacionDocente.png" alt="">
                        <i class="course-link-icon fa fa-link"></i>
                    </a>
                    <a class="course-title" href="#">Evaluación Docente</a>
                    <div class=".course-details-evalu">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

    <footer style="Padding-Bottom:5px;Padding-Top:5px" class="sectionFooter">
		<!-- Footer -->
 <footer class="page-footer font-small blue">

<!-- Copyright -->
<div style="color:#fff" class="footer-copyright text-left py-3">&copy; Universidad Nacional Autonoma de Honduras |
  <a  style="color:rgb(224, 215, 215)"href="index.php">unah.edu.hn </a>
  <div class="col-md-4 col-md-push-8">
    <ul class="footer-social">
        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
    </ul>
</div>
</div>



<!-- Copyright -->

</footer>
<!-- Footer -->
        
<script src="../matri-landingpage/js/main.js"></script>
        <script type="text/javascript" src="../matri-landingpage/js/jquery.min.js"></script>
		<script type="text/javascript" src="../matri-landingpage/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../matri-landingpage/js/main.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </body>
    </html>