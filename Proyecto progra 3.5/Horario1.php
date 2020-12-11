<?php
	include 'ConBD.php';
	session_start();
	if(empty($_SESSION["id_cliente"])) { header('Location: InicioS.php'); }

	//Cargar opciones del select
	$conexion2 = Abrir();
	$sql2 = "call seleccionarRutas()";
	$Rutas2 = $conexion2-> query($sql2);
	Cerrar($conexion2);

	//Cargar rutas y horarios
	$conexion = Abrir();
	$idRuta = "0";
	$sql = "call seleccionarHorarios()";
	$Rutas = $conexion-> query($sql);
	Cerrar($conexion);

	if(isset($_POST['refrescar'])) {
		$conexion3 = Abrir();
		$idRuta = $_POST['idRuta'];
		$sql3 = "call seleccionarHorarios2(".$idRuta.")";
		$Rutas3 = $conexion3-> query($sql3);
		Cerrar($conexion3);
	}
?>

<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>TicketsC.R</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
		<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

 <header id="gtco-header" class="gtco-cover gtco-cover-sm2" role="banner" style="background-image: url(images/bannerHorarios.jpg)" data-stellar-background-ratio="0.3">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php"><img src="tickets-cr.png" width="200" height="60"><em></em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="Horario1.php">Horarios</a></li>
						<li><a href="menu.php">Información de Rutas</a></li>
						<li class="btn-cta"><a href="logout.php"><span>Cerrar sesión</span></a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	
		<div class="overlay"></div>
	</header>

	
		<div id="gtco-features">
			<div class="gtco-container">
				<form action="" method="post">
					<div class="row">
						<div class="col-4">
							<label>Ruta</label>
							<select class="form-control" id="idRuta" name="idRuta" size="1">
								<option value="0">Mostrar todas las opciones</option>
								<?php
									if(empty($Rutas2)) {
										//echo '<option value="0">No hay datos</option>';
									} else {
										while($fila2 = mysqli_fetch_array($Rutas2)) {
											echo '<option value="' . $fila2["id_ruta"] . '">' . $fila2["nombre_ruta"] . '</option>';
										}
									}
								?>
							</select>
							<input type="submit" name="refrescar" id="refrescar" class="btn btn-primary btn-block" value="Refrescar resultados">
						</div>
						<br>
					</div>
				</form>

				<!--<form action="" method="post">-->
					<div class="row">
						<table class="table">
							<thead>													
								<tr>
									<th>Sentido</th>
									<th>Horario</th>
									<th>Cupos disponibles</th>
									<th>Lugar de salida</th>	
									<th>Comprar ticket</th>
								</tr>
							</thead>
							<tbody>
	<?php
		if(empty($Rutas)) {
			echo '<tr> <td colspan="4"> No hay datos </td> </tr>';
		} else {
			if($idRuta!="0") { $Rutas = $Rutas3; } 
				while($fila = mysqli_fetch_array($Rutas)) {
					echo '<tr>';
					echo '<td>'.$fila["nombre_ruta"].'</td>';
					echo '<td>'.$fila["horario"].'</td>';
					echo '<td>'.$fila["cupos_disponibles"].'</td>';
					echo '<td>'.$fila["lugar_salida"].'</td>';
					if(intval($fila["cupos_disponibles"]) > 0) {
						echo '<td><a href="Comprar.php?id_horario='.$fila["id_horario"].'">Comprar</a></td>';
					} else { echo '<td>Agotados</td>'; }
					echo '</tr>';
				}
		}
	?>
							</tbody>
						</table>
					</div>
				<!--</form>-->
			</div>
		</div>

	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font">Nos interesa tu opinión</h2>
					<p>Tu opinión es muy importante para nosotros, envianos tu cometario.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="text" class="form-control" id="email" placeholder="Comentario">
								<input type="email" class="form-control" id="email" placeholder="Tu correo electrónico">
								No se ha implementado por consejo del profesor de solo seguir el foco del proyecto, de igual forma es solo hacer un Stored Procedure con un insert de la información, y ahí muere el proceso.
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">

				

				
				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Contacto</h3>
						<ul class="gtco-quick-contact">
							
							<li><a href="#"><i class="icon-mail2"></i> info@TicketsCR.com</a></li>
							<li><a href="https://WhatsAppweb.com"><i class="icon-chat"></i> WhatsApp</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Redes Sociales</h3>
						<ul class="gtco-social-icons">
							<li><a href="https://twitter.com"><i class="icon-twitter"></i></a></li>
							<li><a href="https://facebook.com"><i class="icon-facebook"></i></a></li>
							<li><a href="https://linkedin.com"><i class="icon-linkedin"></i></a></li>
							<li><a href="https://instagram.com"><i class="ti-instagram"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy;Proyecto creado por: Irene Salas, Alvaro Valverde y Alejandro Hernández.</small> 
						<small class="block">Proyecto para Universidad Fidelitas, carrera Ingeniería en Sistemas de Computación. <a href="https://ufidelitas.ac.cr/" target="_blank"> Ufidelitas</a></a></small>
					</p>
				</div>

			</div>

			

		</div>
	</footer>


	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

