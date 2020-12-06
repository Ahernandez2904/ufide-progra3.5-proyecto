<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tickets.cr </title>
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
	<link rel="stylesheet" href="css/stylecard.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/card1.js"></script>
	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
		<header id="gtco-header" class="gtco-cover gtco-cover-sm3" role="banner" style="background-image: url(images/01.jpg)" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<nav class="gtco-nav" role="navigation">
				<div class="gtco-container">
					
					<div class="row">
						<div class="col-sm-4 col-xs-12">
							<div id="gtco-logo"><a href="index.php"><img src="tickets-cr.png" width="200" height="60"><em></em></a></div>
						</div>
						<div class="col-xs-8 text-right menu-1">
							<ul>
								<li><a href="menu.php">Informacion de Rutas</a></li>
								<li><a href="Horario.php">Horarios</a></li>
								<li class="btn-cta"><a href="Reservacion.php"><span>Reserve su espacio!</span></a></li>
							</ul>	
						</div>
					</div>
					
				</div>
			</nav>
		</header>
	
		



	<div id="gtco-features" style="background-image: url(images/01.jpg);width: 100%; height: 100% ;background-size: cover;" >
		<div class="gtco-container">
			<div class="creditCardForm">
				<div class="heading">
					<h2>Comprar Tickets</h2>
				</div>
				<div class="payment">
					<form>
						<div class="form-group owner">
							<label for="owner">Nombre completo</label>
							<input type="text" class="form-control" id="owner">
						</div>
						<div class="form-group" id="cantidad-tickects">
							<label for="cardNumber">Cantidad de tickets:</label>
							<input type="number" class="form-control" id="CantTickets">
						</div>
						<div class="col-2" id="cantidad-tickects">
							<label for="cardNumber">Total a pagar:</label>
							<input type="text" class="form-control" id="resultado" readonly="true" name="resultado"  onclick="CalcularPago();" />
						</div>
						<br>
						<div class="form-group" id="card-number-field">
							<label for="cardNumber">Numero de tarjeta</label>
							<input type="text" class="form-control" id="cardNumber">
						</div>
						<div class="form-group CVV">
							<label for="cvv">CVV</label>
							<input type="text" class="form-control" id="cvv">
						</div>
						<br>
						

						<div class="form-group" id="expiration-date">
							<label>Fecha de expiracion</label>
							<select style="background-color:  rgba(0, 0, 0, 0.555);color: #fa9c0f;">
								<option value="01">Enero</option>
								<option value="02">Febrero </option>
								<option value="03">Marzo</option>
								<option value="04">Abril</option>
								<option value="05">Mayo</option>
								<option value="06">Junio</option>
								<option value="07">Julio</option>
								<option value="08">Agosto</option>
								<option value="09">Septiembre</option>
								<option value="10">Octubre</option>
								<option value="11">Noviembrer</option>
								<option value="12">Deciembre</option>
							</select>
							<select style="background-color:  rgba(0, 0, 0, 0.555);color: #fa9c0f;">
								<option value="20"> 2020</option>
								<option value="21"> 2021</option>
								<option value="21"> 2022</option>
								<option value="21"> 2023</option>
								<option value="21"> 2024</option>
								<option value="21"> 2025</option>
								<option value="21"> 2026</option>
								<option value="21"> 2027</option>
							</select>
						</div>
						
						<div class="form-group" id="pay-now">
							<button type="submit" class="btn btn-primary btn-block" id="confirm-purchase">Confirmar</button>
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
						<h3>Contacto:</h3>
						<ul class="gtco-quick-contact">
							
							<li>Contacto: <a href="#"><i class="icon-mail2"></i> info@Tickets.cr</a></li>
							
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Redes sociales</h3>
						<ul class="gtco-social-icons">
							<li><a href="twitter.com"><i class="icon-twitter"></i></a></li>
							<li><a href="facebook.com"><i class="icon-facebook"></i></a></li>
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
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<script src="js/main.js">

	 function CalcularPago()
	 {
		
		var Cant = document.getElementById("CantTickets").value;
		
		var resultado = "";
		
				
			resultado = ((parseFloat(Cant)*550).toFixed(2);
			
		
		
		document.getElementById("resultado").value = resultado;
	}	
	
	
	
	</script>

	</body>
</html>

