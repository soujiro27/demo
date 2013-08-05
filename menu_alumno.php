<?php
session_start();
$_SESSION["nombre"];
$_SESSION["carrera"]; 
$_SESSION["cuatri"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Plataforma Educativa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Checa aisistencias, calificaciones, sube archivos online">
	<meta name="author" content="ISC10">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="css/alumnos.css">
	
	

	
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
<header class="menu">
	<ul>
		<li><a href="#" id="tooltip1" rel="tooltip" title="Inicio"><img src="img/menu/home.png" ></a></li>
		<li><a href="#" id="tooltip1" rel="tooltip" title="Calificaciones" onclick="cali();"><img src="img/menu/calendar.png" alt=""></a></li>
		<li><a href="#" id="tooltip1" rel="tooltip" title="Asistencias"><img src="img/menu/address-book.png" alt=""></a></li>
		<li><a href="#" id="tooltip1" rel="tooltip" title="Foros"><img src="img/menu/compose-4.png" alt=""></a></li>
		<li><a href="#" id="tooltip1" rel="tooltip" title="Archivos"><img src="img/menu/folder-add.png" alt=""></a></li>
		<li class="notificacion"><a href="#" id="tooltip1" rel="tooltip" title="Notificaciones"><img src="img/menu/bell.png" alt=""></a></li>
		<li class="salir"><a href="#" id="tooltip1" rel="tooltip" title="Salir"><img src="img/menu/locked.png" alt=""></a></li>
	</ul>
</header>

<section class="container">
<section class="row">
<article class="span4">
		<article class="datos">
			<img src="img/maestros/jcru.jpg" alt="" class="span1">
			<h4 class="offset1 nombre_alumno"><?php echo $_SESSION["nombre"];?></h4>
			<h4 class="offset1"><?php echo $_SESSION["carrera"];?></h4>
			<h4 class="offset1"><?php echo $_SESSION["cuatri"];?></h4>		
		</article>
		<article class="grupos">
			<h4>Grupos</h4>
			<article id="grupos_creados"></article>
			<h5>Crear Grupo <button class="btn btn-primary">+</button></h5>
		</article>
</article>
<article class="span8">
<section class="bienvenida" id="bienvenida">
	<hgroup class="head_welcome">
		<h1>"Bienvenido a Ortus"</h1>
		<h4>"Ortus es la mejor plataforma de educación online y con tu apoyo, la experiencia será más inolvidable.</h4>
			<h4>Ortus es una plataforma de educación en línea de última generación que tiene como objetivo resolver los dos problemas principales con la educación en línea actual: el compromiso real de los cursos y un sentido activo de la comunidad y la colaboración."</h4>
	</hgroup>
	<article class="descripcion">
		<article class="des_cali">
			<figure>
			<img src="img/menu/calendar.png" alt="Calificaciones">
			</figure>
			<p>En este Modulo podras consultar tus calificaciones, parcial por parcial asi como tus examenes finales</p>	
		</article>
		<article class="des_asistencias">
			<p>En este modulo podras Consultar tus asistencias, asi como tus faltas, saber si tienes derecho a examen</p>
			<figure><img src="img/menu/address-book.png" alt=""></figure>
		</article>
		<article class="des_cali">
			<figure>
			<img src="img/menu/compose-4.png" alt="Calificaciones">
			</figure>
			<p>En los foros podras compatir experiencias asi como tambien crear tus propios cuartos de discusion</p>	
		</article>
		<article class="des_asistencias">
			<p>En este modulo podras subir achivos y compartirlo con tus diferentes grupos</p>
			<figure><img src="img/menu/folder-add.png" alt=""></figure>
		</article>
	</article>

</section>


<section class="calificaciones">
<div class="accordion calificaciones" id="accordion">
		 	<div class="accordion-group">
		 		<div class="accordion-heading">
		 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
		 				Collapsible Group Item #1
		 			</a>
		 		</div>
		 		<div id="collapseOne" class="accordion-body collapse in">
		 			<div class="accordion-inner">
		 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		 			</div>
		 		</div>
		 	</div>
		 	<div class="accordion-group">
		 		<div class="accordion-heading">
		 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
		 				Collapsible Group Item #2
		 			</a>
		 		</div>
		 		<div id="collapseTwo" class="accordion-body collapse">
		 			<div class="accordion-inner">
		 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		 			</div>
		 		</div>
		 	</div>
		 	<div class="accordion-group">
		 		<div class="accordion-heading">
		 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
		 				Collapsible Group Item #3
		 			</a>
		 		</div>
		 		<div id="collapseThree" class="accordion-body collapse">
		 			<div class="accordion-inner">
		 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		 			</div>
		 		</div>
		 	</div>	
		 	</div>
</section>





</article>
</section>
</section>
	<script type="text/javascript" src="js/jquery.js"></script>	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="js/alumnos.js"></script>
	 


</body>
</html>
