<?php
/* Asignación de las variables para extraer los datos */

$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['message'];
$human = intval($_POST['human']);

/* Declaración de variables adicionales */

$de = 'Formulario de contacto Autos y Vías';
$para = 'autosyvias@hotmail.com';
$asunto = 'Mensaje desde la página web';

$mensaje = "De: $nombre $apellido\n Correo electrónico: $email\n Mensaje:\n $message";

/* Validación de formulario en el caso de nombre y apellido */

if (!$_POST['apellido']) {
	$errApellido = 'Por favor ingrese su apellido';
}

if (!$_POST['nombre']) {
	$errNombre = 'Por favor ingrese su nombre';
}

if (!$_POST['nombre'] && !$_POST['apellido']) {
	$errNombreApellido = 'Por favor ingrese su nombre y apellido'
}

/* Validación del correo electrónico */

if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Por favor ingrese una dirección de correo electrónico válida';
}

if (!$_POST['message']) {
	$errMessage = 'Por favor, introduzca su mensaje';
}

/* Validación del anti spam */

if ($human !== 8) {
	$errHuman = 'La respuesta es incorrecta';
}

<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Contacto - Autos y Vías</title>
	    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
	    <!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<header><!-- Inicio del header -->
			<div class="container">
				<div class="row xtra">
					<div class="col-xs-6 visible-xs" id="logo">
						<img src="img/logo.png" class="img-responsive" alt="Logo Autos y Vias"><br>
						<h1>AUTOS Y VIAS</h1>
					</div>
					<div class="col-xs-6 visible-xs" id="texto-inicio"><!-- Texto descriptivo -->
						<h2>Centro de Enseñanza Automovilística</h2>
					</div>
				</div>
				<div class="row medium">
					<div class="col-sm-2 hidden-xs" id="logo">
						<img src="img/logo.png" class="img-responsive" alt="Logo Autos y Vias"><br>
					</div>
					<div class="col-sm-4 hidden-xs">	
						<h1>AUTOS Y VIAS</h1>
					</div>
					<div class="col-sm-6 hidden-xs text-center" id="texto-inicial"><!-- Texto descriptivo -->
						<h2>Centro de Enseñanza Automovilística</h2>
					</div>
				</div>
			</div>	
		</header><!-- Fin del header -->
		<nav><!-- navegación -->
			<div class="container">
				<div class="row" id="navegacion">
					<div class="col-xs-12">
						<div class="navbar navbar-default navbar-static-top" role="navigation">
		                    <div class="navbar-header">
		                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                            <span class="sr-only">Desplegar navegación</span>
		                            <span class="icon-bar"></span>
		                            <span class="icon-bar"></span>
		                            <span class="icon-bar"></span>
		                        </button>
		                    </div>
		                    <div class="navbar-collapse collapse">
		                        <ul class="nav nav-justified">
		                            <li><a href="index.html">Inicio</a></li>
		                            <li><a href="nosotros.html">Quiénes somos</a></li>
		                            <li><a href="valores.html">Valores</a></li>
		                            <li><a href="servicios.html">Servicios</a></li>
		                            <li class="active"><a href="#">Contacto</a></li>
		                        </ul>
		                    </div>
	                	</div>
					</div>
				</div><!-- Fin de la navegación -->
			</div>	
		</nav>
		<main><!-- Contenido principal -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<p>
							Centro de Enseñanza Automovilística Autos y Vías - dedicados a la enseñanza automovilística, calificación de conductores y gestiones de tránsito a nivel nacional. Para cualquier pregunta, queja, sugerencia, reclamo, o simplemente porque quiere felicitarnos por nuestro buen trabajo, por favor utilice este formulario de contacto. 	
						</p>
					</div>
					<div class="col-md-6 col-xs-12 col-md-offset-3">
						<form class="form-horizontal" role="form" method="post" action="contacto.php">
							<div class="form-group">
								<label for="apellido" class="col-sm-2 control-label">Apellido(s)</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido(s)" value="">
									<?php echo "<p class='text-danger'>$errApellido</p>";?>
								</div>
							</div>
							<div class="form-group">
								<label for="nombre" class="col-sm-2 control-label">Nombre(s)</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)" value="">
									<?php echo "<p class='text-danger'>$errNombre</p>";?>
									<?php echo "<p class='text-danger'>$errNombreApellido</p>";?>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">E-mail</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="email" name="email" placeholder="nombre@dominio.com" value="">	
									<?php echo "<p class='text-danger'>$errEmail</p>";?>
								</div>
							</div>
							<div class="form-group">
								<label for="message" class="col-sm-2 control-label">Mensaje</label>
								<div class="col-sm-10">
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" rows="4" name="message"></textarea>
									<?php echo "<p class='text-danger'>$errMessage</p>";?>
								</div>
							</div>
							<div class="form-group">
								<label for="human" class="col-sm-2 control-label">5+3</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="human" name="human" placeholder="Su respuesta">
									<?php echo "<p class='text-danger'>$errHuman</p>";?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-2">
									<input type="submit" id="submit" name="submit" value="Enviar">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-2">
									<!-- Will be used to display an alert to the user -->
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>	
		</main><!-- Fin del contenido principal -->
		<footer>
			<div id="social"><!-- Contenedor redes sociales -->
				<div class="container">
					<div class="row" id="contenedor-interno">
						<div class="col-xs-2 col-xs-offset-1"><!-- Imagen de ícono de red social -->
							<a href="https://www.facebook.com/Autosyvias/" target="_blank"><i class="fa fa-facebook-square fa-3x" title="Contáctenos en Facebook" ></i></a>
						</div>
						<div class="col-xs-2 col-xs-offset-2"><!-- Imagen de ícono de red social -->
							<a href="mailto:autosyvias@hotmail.com"><i class="fa fa-envelope fa-3x" title="Envíenos un correo"></i></a>
						</div>
						<div class="col-xs-2 col-xs-offset-2"><!-- Imagen de ícono de red social -->
							<a href="contacto.php"><i class="fa fa-question-circle fa-3x" title="Acceda a nuestro formulario de contacto"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div id="enlaces"><!-- Contenedor para enlaces de interés -->
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-4" id="consultas"><!-- Aquí enlaces -->
							<h4>Enlaces de interés</h4>
							<a href="https://www.runt.com.co/portel/libreria/php/01.0305.html?dif=a8f50f22e567fa77804b8315685ff93f" target="_blank">Consulte su información como conductor</a><br>
							<a href="https://consulta.simit.org.co/Simit/index.html" target="_blank">Consulte multas o comparendos</a><br>
							<a href="http://www.vehiculosantioquia.com/" target="_blank">Consulte el impuesto vehícular</a><br>
							<a href="https://www.mintransporte.gov.co/Publicaciones/atencin_al_ciudadano/servicios_y_consultas_en_lnea" target="_blank">Consulte la base de datos de Mintransporte</a>
						</div>
						<div class="col-xs-12 col-md-4" id="instituciones"><!-- Aquí enlaces -->
							<h4>Secretarías de Movilidad</h4>
							<a href="https://www.medellin.gov.co/movilidad/" target="_blank">Secretaría de Movilidad de Medellín</a><br>
							<a href="http://www.envigado.gov.co/NuestraAlcaldia/Paginas/NSecretariaTransporte.aspx" target="_blank">Secretaría de Movilidad de Envigado</a><br>
							<a href="http://www.transitoitagui.gov.co/" target="_blank">Secretaría de Movilidad de Itagüí</a><br>
							<a href="http://www.transitobello.com/" target="_blank">Secretaría de Transportes y Tránsito de Bello</a>
						</div>
						<div class="col-xs-12 col-md-4" id="picoyplaca"><!-- Pico y placa aquí -->
							<h4>Pico y placa</h4>
							<table class="table table-bordered table-responsive">
								<thead>
									<th class="text-center">Día</th>
									<th class="text-center"><img src="img/motocicleta.svg" alt="Motos de dos tiempos" title="&copy; Created by Jesús Mujica from Noun Project"></th>
									<th class="text-center"><img src="img/vehiculo.svg" alt="Automóviles particulares" title="&copy; Created by Seergey Saakyan from Noun Project"></th>
								</thead>
								<tbody>
									<tr>
										<td class="text-center">Lun</td>
										<td class="text-center">6 - 7</td>
										<td class="text-center">0 - 1 - 2 - 3</td>
									</tr>
									<tr>
										<td class="text-center">Mar</td>
										<td class="text-center">8 - 9</td>
										<td class="text-center">4 - 5 - 6 - 7</td>
									</tr>
									<tr>
										<td class="text-center">Mié</td>
										<td class="text-center">0 - 1</td>
										<td class="text-center">8 - 9 - 0 - 1</td>
									</tr>
									<tr>
										<td class="text-center">Jue</td>
										<td class="text-center">2 - 3</td>
										<td class="text-center">2 - 3 - 4 - 5</td>
									</tr>
									<tr>
										<td class="text-center">Vie</td>
										<td class="text-center">4 - 5</td>
										<td class="text-center">6 - 7 - 8 - 9</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="3" class="text-center">7:00 am a 8:30 am - 5:30 pm a 7:00 pm</td>
									</tr>
									<tr>
										<td colspan="3" class="text-center">Rige a partir de febrero de 2016</td>
									</tr>	
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div id="contacto">
				<div class="container">
					<div id="direccion" class="row"><!-- Dirección y teléfono -->
						<div class="col-xs-12">
							<div class="vcard text-center">
								<p class="fn"><a class="url" href="#">AUTOS Y VIAS</a></p>
								<p class="adr">
								<span class="street-address">Cra. 81 # 32 EE-13, Santa Gema, Medellín</span><br>
								<span class="postal-code">Código postal: 050030 - Colombia</span><br>
								</p>
								<p class="tel">PBX: +57 (4) 444 73 59 / +57 (4) 411 28 95 / +57 316 482 69 95</p>
								<p>email: <a href="mailto:autosyvias@hotmail.com">autosyvias@hotmail.com</a></p>
	                            <p class="hacemos">"HACEMOS LAS COSAS BIEN PORQUE CREEMOS EN LO QUE HACEMOS"</p>
							</div>	
						</div>
					</div>
				</div>
			</div>	
			<div id="autor" class="row">
				<div class="container">
					<div class="col-xs-12">
						<div class="vcard">
							<small><span class="fn"><a class="url" href="mailto:jorgemontoyab@gmail.com">&copy; JM, 2016</a></span></small>
						</div>
					</div>
				</div>
			</div>	
		</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="js/jquery-2.2.0.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>
	</body>
</html>