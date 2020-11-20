<?php
	include 'ConBD.php';
	$conexion = Abrir();
	if(isset($_POST['registrar'])) {
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$contrasena = $_POST['contrasena'];
	
		$table = 'table'; //desconocida
		$tableValues = 'id, nombre, email, telefono, contrasena'; //desconocida, ejemplo = id,nombre,email
		$sql = "insert into '$table' ('$tableValues') values (id,nombre,email,telefono,contrasena);";
		$conexion->next_result();
		if($conexion->query($sql)) { header('Location: ejercicio.php'); }
		else { echo $conexion -> error; }
  	}
	Cerrar($conexion); 
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

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html"><img src="tickets-cr.png" width="200" height="80"><em></em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="InicioS.html">Iniciar Sesion</a></li>
						<li class="has-dropdown">
							<a href="Horario.html"></a>
							<ul class="dropdown">
								<li><a href="Horario.html">San Jose-Cartago</a></li>
								<li><a href="Horario.html">San Jose-Puntarenas</a></li>
								<li><a href="Horario.html">San Jose-San Carlos</a></li>
								<li><a href="Horario.html">San Jose-Nicoya</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contacto</a></li>
						
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner"  data-stellar-background-ratio="0.2" style="background-image: url(images/inicioCarretera.jpeg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-8  animate-box fondone" data-animate-effect="fadeInUp" ">
							<h2 class="h2titulo" >Modalidad sin contacto:</h2>
							<ul>
								<li style="color:white;">Preveniendo el uso de efectivo.</li>
								<li style="color:white;">Sin contacto en plena pandemia</li>
							</ul>
							<img src="images/sincontacto.jpeg"  width="50%" height="30%" style="display: block; margin-left: 50%;margin-top: -17%; padding-top: 10px;border: inset;padding-left: 10px;padding-bottom: 10px;padding-right: 10px;">
								
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Resgistrate aqui:</h3>
											<form action="#">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="id" >Número de identificación:</label>
														<input type="text" name="id" id="id" class="form-control" required>
														</input>
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														<label for="Nombre">Nombre completo</label>
														<input type="text" name="nombre" id="nombre" class="form-control" required>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="telefono">Numero telefónico</label>
														<input type="text" name="telefono" id="telefono" class="form-control" required>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="Email">Correo electrónico:</label>
														<input type="email" name="email" id="email" class="form-control" required>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="Contrasena">Contraseña</label>
														<input type="Password" name="contrasena" id="contrasena" class="form-control" required>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" name="registrar" id="registrar" value="Registrar">
													</div>
												</div>
											</form>	
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	


	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font">Tickets C.R</h2>
					<p>La experiencia de utilizar el transporte publico sin contacto en Costa Rica!</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-money"></i>
						</span>
						<h3>Pago en cualquier lugar</h3>
						<p>Con nuestro sistema, tienes multiples puntos de recarga en diferentes sonas del pais ademas de nuestra pagina web.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-map-alt"></i>
						</span>
						<h3>La mayoria de rutas importantes del pais</h3>
						<p>Podes utilizar los boletos virtuales en cualquier ruta y horario que se ajuste a tu necesidad de viajar.(Podes consultar aqui los horarios de las rutas : <a class="consult" href="https://www.sanjosecostarica.org/sobre-san-jose-costa-rica/servicios/transporte-publico/rutas-y-horarios-de-autobuses/">aqui</a>)</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-id-badge"></i>
						</span>
						<h3>Tarjeta sin contacto</h3>
						<p>Con nuestro sistema es tan facil como pasar la tarjeta sobre el lector y listo! Validas tu boleto!</p>
					</div>
				</div>
				

			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/Mastercard.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>&ldquo;Sin contacto pero unidos&rdquo;</h1>
					<p>&mdash;Un mensaje de <a href="https://mastercardcontentexchange.com/latin-america/es/sala-de-prensa/kits-de-prensa-digital/dpk-es/2020/abril/sin-contacto-pero-unidos/">Mastercard </a></p>
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
						<small class="block">Proyecto para Universidad Fidelitas, carrera Ing sistemas de computacion link:<a href="https://ufidelitas.ac.cr/" target="_blank"> Ufidelitas</a></a></small></p>
				</div>

			</div>

			

		</div>
	</footer>


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

