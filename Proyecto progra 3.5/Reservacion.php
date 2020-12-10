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

	

	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="menu.php"><img src="tickets-cr.png" width="200" height="80"><em></em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="menu.php">Informacion de Rutas</a></li>
						<li><a href="Horario.php">Horarios de rutas</a></li>
						<li class="btn-cta"><a href="Comprar.php"><span>Adquirir Tickets</span></a></li>
						
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/carreteravolcan.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											
											<br>
											<h2 class="Font3">Llene los siguientes datos:</h2>
											<form action="#">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="id" >Numero de identificación:</label>
														<input type="text"name="id" id="id" class="form-control" required readonly="true" value="aqui va la cedula del inicio de seccion">
															
														</input>
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														<label for="Ruta">Ruta<br></label>
														<select class="form-control" id="idRuta" name="idRuta" size="1" value="<?php echo $Registro["perfil_id"]; ?>">
															<option value="0">Seleccione</option>
															</select>
															//aqui el php de las rutas
														<br>			
														<label for="Ruta">Horario<br></label>
														<select class="form-control" id="idHorario" name="idHorario" size="1" value="<?php echo $Registro["perfil_id"]; ?>">
															<option value="0">Seleccione</option>
															</select>
															//aqui el php de los horarios
														<br>											
														<a href="Horario.php">Ver horarios</a>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="tiquetes">Cantidad de espacios:</label>
														<input type="number" id="CantidadTickets" class="form-control" required>
													</div>
												</div>
												
												


												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Validar Reservacion" id="btnReservar" name="btnReservar">
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

