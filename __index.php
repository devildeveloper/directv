<?php
	// $web_url = 'http://test.pucp.edu.pe/monchito/directvpromociones.pe';
	$web_url = 'http://localhost/pruebas/diloo/directvpromociones.pe';

	$numero_pie = 	'<div class="numero-pie text-center">
						<a class="llamar" href="tel:(01)500-5101">(01)500-5101</a>
						<a target="#" data-toggle="modal" data-target="#llamame-modal" class="suscribete btn btn-lg btn-primary">Suscríbete</a>
					</div>';

	$promos = array(
						'bronce-hd'     => array(
													'menu'           => 'Bronce HD',
													'banner-desktop' => 'banner-broncehd.jpg',
													'nombre-png'     => 'nombre-broncehd.png',
													'plan-intro'     => 'Acceso a más de <strong>110 canales</strong>',
													'precio'         => '89',
													'tiempo'         => '<strong>mensuales</strong>',
													'tiempo-celu'    => '<strong>mensuales</strong> <br> <span class="descri-chico">INCLUYE 2 DECOS</span>',
													'acceso-celu'    => 'Acceso a más de <strong>110 canales</strong>',
													'preciador'      => 'Vive la experiencia del <br> <span class="mas-grande"><strong>FUTBOL</strong> en <strong>HD</strong></span>',
													'preciador-celu' => 'Vive la <strong>EXPERIENCIA</strong> <br> del <strong>FUTBOL</strong> en <strong>HD</strong>',
													'escudos'        => 'escudos-broncehd.png',
													'mas-info'       => '<p>54 señales de video SD, 21 señales de video HD, 30 señales de audio y 9 señales de radio.</p>
																		<p>
																			Ver lista de <a target="_blank" href="'.$web_url.'/docs/paquetes.pdf" class="canales">Canales</a>
																		</p>
																		',
													'modulos'        => '<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-acceso">
																				<strong>Acceso a más de</strong>
																				54 señales de video SD, 21 señales de video HD, 30 señales de audio y 9 señales de radio.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-dtvplay">
																				<strong>Directv Play</strong>
																				Lleva tu programación favorita a donde quieras y disfrútala desde tu PC, tablet o smartphone.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 col-sm-push-3 col-md-push-0 modu-item">
																			<div class="modu-content modu-decohd">
																				<strong>1 Deco HD + 1 Deco SD</strong>
																				Incluye un decodificador HD y un decodificador digital.
																			</div>
																		</div>
																		<div class="col-sm-12 modu-item hidden-xs">
																			<div class="precio">
																				<div class="grande">
																					<span class="soles">S/.</span><span class="numero">89</span>
																				</div>
																				<div class="chico">
																					<div class="txt3">Mensuales</div>
																				</div>
																				<div class="condi">
																					<a target="#" data-toggle="modal" data-target="#condi-modal">Ver condiciones de promoción</a>
																				</div>
																			</div>
																			'.$numero_pie.'
																		</div>',
												),
						'plata-digital' => array(
													'menu'           => 'Plata Digital',
													'banner-desktop' => 'banner-platadigital.jpg',
													'nombre-png'     => 'nombre-platadigital.png',
													'plan-intro'     => 'Acceso a más de <strong>110 canales</strong>',
													'precio'         => '89',
													'tiempo'         => '<strong>mensuales</strong> <br> <span class="descri-chico">los primeros <strong>3 meses</strong></span>',
													'tiempo-celu'    => '<strong>mensuales</strong> <br> <span class="descri-chico">por 3 meses</span>',
													'acceso-celu'    => 'Acceso a más de <strong>110 canales</strong>',
													'preciador-celu' => 'Lleva a tu hogar el mejor <br><strong>ENTRETENIMIENTO</strong>',
													'preciador'      => 'Lleva a tu hogar el mejor <br> <span class="mas-grande"><strong>ENTRETENIMIENTO</strong></span>',
													'escudos'        => 'escudos-platadigital.png',
													'mas-info'       => '<p>Acceso a más de 70 señales de video SD, 30 señales de audio, 9 señales de radio y hasta 27 canales en HD*</p>
																		<p>
																			Ver lista de <a target="_blank" href="'.$web_url.'/docs/paquetes.pdf" class="canales">Canales</a>
																		</p>
																		',
													'modulos'        => '<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-acceso">
																				<strong>Acceso a más de</strong>
																				70 señales de video SD, 30 señales de audio y 9 señales de radio.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-dtvplay">
																				<strong>Directv Play</strong>
																				Lleva tu programación favorita a donde quieras y disfrútala desde tu PC, tablet o smartphone.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 col-sm-push-3 col-md-push-0 modu-item">
																			<div class="modu-content modu-decohd">
																				<strong>1 DECO DVR + 1 DECO SD*</strong>
																				Incluye un decodificador  DVR y un deco digital en definición estándar. <br>
																				*En el paquete Plata digital 2.
																			</div>
																		</div>
																		<div class="col-sm-12 modu-item hidden-xs">
																			<div class="precio">
																				<div class="grande">
																					<span class="soles">S/.</span><span class="numero">89</span>
																				</div>
																				<div class="chico">
																					<div class="txt1">Mensuales</div>
																					<div class="txt2">los primeros 3 meses</div>
																				</div>
																				<div class="condi">
																					<a target="#" data-toggle="modal" data-target="#condi-modal">Ver condiciones de promoción</a>
																				</div>
																			</div>
																			'.$numero_pie.'
																		</div>',
												),
						'oro-hd'        => array(
													'menu'           => 'Oro HD',
													'banner-desktop' => 'banner-orohd.jpg',
													'nombre-png'     => 'nombre-orohd.png',
													'plan-intro'     => 'Acceso a más de <strong>170 canales</strong>',
													'precio'         => '95',
													'tiempo'         => '<strong>mensuales</strong> <br> <span class="descri-chico">los primeros <strong>3 meses</strong></span>',
													'tiempo-celu'    => '<strong>mensuales</strong> <br> <span class="descri-chico">por 3 meses</span>',
													'acceso-celu'    => 'Acceso a más de <strong>170 canales</strong>',
													'preciador-celu' => 'Sigue la emoción de <br> la <strong>MEJOR LIGA</strong> en <strong>HD</strong>',
													'preciador'      => 'Sigue la emoción de la <br> <span class="mas-grande"><strong>MEJOR LIGA</strong> en <strong>HD</strong></span>',
													'escudos'        => 'escudos-orohd.png',
													'mas-info'       => '<p>Acceso a más de 100 señales de video SD, 34 señales de video HD, 30 señales de audio y 9 señales de radio.</p>
																		<p>
																			Ver lista de <a target="_blank" href="'.$web_url.'/docs/paquetes.pdf" class="canales">Canales</a>
																		</p>
																		',
													'modulos'        => '<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-acceso">
																				<strong>Acceso a más de</strong>
																				100 señales de video SD, 34 señales de vídeo HD, 30 señales de audio y 9 señales de radio.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-dtvplay">
																				<strong>Directv Play</strong>
																				Lleva tu programación favorita a donde quieras y disfrútala desde tu PC, tablet o smartphone.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 col-sm-push-3 col-md-push-0 modu-item">
																			<div class="modu-content modu-decohd">
																				<strong>1 DECO HD DVR + 1 DECO SD*</strong>
																				Incluye un decodificador HD DVR y un deco básico en definición estándar. <br>
																				*En el paquete Oro HD 2.
																			</div>
																		</div>
																		<div class="col-sm-12 modu-item hidden-xs">
																			<div class="precio">
																				<div class="grande">
																					<span class="soles">S/.</span><span class="numero">95</span>
																				</div>
																				<div class="chico">
																					<div class="txt1">Mensuales</div>
																					<div class="txt2">los primeros 3 meses</div>
																				</div>
																				<div class="condi">
																					<a target="#" data-toggle="modal" data-target="#condi-modal">Ver condiciones de promoción</a>
																				</div>
																			</div>
																			'.$numero_pie.'
																		</div>',
												),
						'oro-hd-max'    => array(
													'menu'           => 'Oro HD Max',
													'banner-desktop' => 'banner-orohdmax.jpg',
													'nombre-png'     => 'nombre-orohdmax.png',
													'plan-intro'     => 'Acceso a más de <strong>170 canales</strong> <br> <span class="chico-mini">Incluye 2 decos DIRECTV HD</span>',
													'precio'         => '105',
													'tiempo'         => '<strong>mensuales</strong> <br> <span class="descri-chico">los primeros <strong>3 meses</strong></span>',
													'tiempo-celu'    => '<strong>mensuales</strong> <br> <span class="descri-chico">por 3 meses</span>',
													'acceso-celu'    => 'Acceso a más de <strong>170 canales</strong>',
													'preciador-celu' => 'Comparte en <strong>FAMILIA</strong> más de <strong>155 CANALES</strong> en <strong>HD</strong>',
													'preciador'      => 'Comparte en familia más de <br> <span class="mas-grande"><strong>155 CANALES</strong> en <strong>HD</strong></span>',
													'escudos'        => 'escudos-orohdmax.png',
													'mas-info'       => '<p>Acceso a más de 100 señales de video SD, 34 señales de video HD, 30 señales de audio y 9 señales de radio.</p>
																		<p>
																			Ver lista de <a target="_blank" href="'.$web_url.'/docs/paquetes.pdf" class="canales">Canales</a>
																		</p>
																		',
													'modulos'        => '<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-acceso">
																				<strong>Acceso a más de</strong>
																				100 señales de video SD, 34 señales de vídeo HD, 30 señales de audio y 9 señales de radio.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-dtvplay">
																				<strong>Directv Play</strong>
																				Lleva tu programación favorita a donde quieras y disfrútala desde tu PC, tablet o smartphone.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-deco2">
																				<strong>2 DECOS HD</strong>
																				Este plan incluye 1 deco HD DVR + 1 Deco HD + Canales de Cine Premium (FOX+,HBO MAX HD)
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-nexus">
																				<strong>Directv Nexus</strong>
																				Graba, pausa, retrocede y ve los programas grabados desde cualquier televisor. <br>
																				*Válido en paquete ORO HD MAX 3.
																			</div>
																		</div>
																		<div class="col-sm-8 suscri-ancho modu-item hidden-xs">
																			<div class="precio">
																				<div class="grande">
																					<span class="soles">S/.</span><span class="numero">105</span>
																				</div>
																				<div class="chico">
																					<div class="txt1">Mensuales</div>
																					<div class="txt2">los primeros 3 meses</div>
																				</div>
																				<div class="condi">
																					<a target="#" data-toggle="modal" data-target="#condi-modal">Ver condiciones de promoción</a>
																				</div>
																			</div>
																			'.$numero_pie.'
																		</div>',
												),
						'oro-full'      => array(
													'menu'           => 'Oro Full',
													'banner-desktop' => 'banner-orofull.jpg',
													'nombre-png'     => 'nombre-orofull.png',
													'plan-intro'     => 'Acceso a más de <strong>195 canales</strong>',
													'precio'         => '155',
													'tiempo'         => '<strong>mensuales</strong> <br> <span class="descri-chico">los primeros <strong>3 meses</strong></span>',
													'tiempo-celu'    => '<strong>mensuales</strong> <br> <span class="descri-chico">por 3 meses</span>',
													'acceso-celu'    => 'Acceso a más de <strong>195 canales</strong>',
													'preciador-celu' => 'Series, deportes, películas y más <br> <strong>¡APROVECHA!</strong>',
													'preciador'      => '¡Series, deportes, películas y más! <br> <span class="mas-grande">Aprovecha los <strong>175 CANALES</strong> en <strong>HD</strong></span>',
													'escudos'        => false,
													'mas-info'       => '<p>Acceso a más de 115 señales de video SD, 40 señales de video HD, 30 señales de audio y 9 señales de radio.</p>
																		<p>
																			Ver lista de <a target="_blank" href="'.$web_url.'/docs/paquetes.pdf" class="canales">Canales</a>
																		</p>
																		',
													'modulos'        => '<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-acceso">
																				<strong>Acceso a más de</strong>
																				115 señales de video SD, 40 señales de vídeo HD, 30 señales de audio y 9 señales de radio.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-dtvplay">
																				<strong>Directv Play</strong>
																				Lleva tu programación favorita a donde quieras y disfrútala desde tu PC, tablet o smartphone.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-decohd">
																				<strong>1 DECO HD DVR + 1 DECO SD</strong>
																				Incluye un decodificador HD DVR, un deco en definición estándar + Canales de Cine Premium (FOX+, HBO MAX HD).
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-control">
																				<span class="tag">disponible</span>
																				<strong>Directv Control Plus</strong>
																				Graba tus programas favoritos cuando quieras y donde quieras desde tu teléfono celular o computadora.
																			</div>
																		</div>
																		<div class="col-sm-8 suscri-ancho modu-item hidden-xs">
																			<div class="precio">
																				<div class="grande">
																					<span class="soles">S/.</span><span class="numero">155</span>
																				</div>
																				<div class="chico">
																					<div class="txt1">Mensuales</div>
																					<div class="txt2">los primeros 3 meses</div>
																				</div>
																				<div class="condi">
																					<a target="#" data-toggle="modal" data-target="#condi-modal">Ver condiciones de promoción</a>
																				</div>
																			</div>
																			'.$numero_pie.'
																		</div>',
												),
						'platino-hd'    => array(
													'menu'           => 'Platino HD',
													'banner-desktop' => 'banner-platinohd.jpg',
													'nombre-png'     => 'nombre-platinohd.png',
													'plan-intro'     => 'Acceso a más de <strong>195 canales</strong> <br> <span class="chico-mini">incluye tecnología DIRECTV NEXUS</span>',
													'precio'         => '175',
													'tiempo'         => '<strong>mensuales</strong> <br> <span class="descri-chico">los primeros <strong>3 meses</strong></span>',
													'tiempo-celu'    => '<strong>mensuales</strong> <br> <span class="descri-chico">por 3 meses</span>',
													'acceso-celu'    => 'Acceso a más de <strong>195 canales</strong>',
													'preciador-celu' => 'Disfruta de una nueva experiencia con <strong>DIRECTV NEXUS</strong>',
													'preciador'      => 'Disfruta de una nueva experiencia <br> <span class="mas-grande">con <strong>DIRECTV NEXUS</strong></span>',
													'escudos'        => false,
													'mas-info'       => '<p>Acceso a más de 115 señales de video SD, 40 señales de video HD, 30 señales de audio y 9 señales de radio.</p>
																		<p>
																			Ver lista de <a target="_blank" href="'.$web_url.'/docs/paquetes.pdf" class="canales">Canales</a>
																		</p>
																		',
													'modulos'        => '<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-acceso">
																				<strong>Acceso a más de</strong>
																				115 señales de video SD, 40 señales de vídeo HD, 30 señales de audio y 9 señales de radio.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-dtvplay">
																				<strong>Directv Play</strong>
																				Lleva tu programación favorita a donde quieras y disfrútala desde tu PC, tablet o smartphone.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-decohd">
																				<strong>1 Deco HD DVR + 1 Deco HD</strong>
																				Este plan incluye 1 deco HD DVR + 1 Deco HD + Canales de Cine Premium (FOX+,HBO MAX HD)
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-nexus">
																				<strong>Directv Nexus</strong>
																				Graba, pausa, retrocede y ve los programas grabados desde cualquier televisor.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-demand">
																				<strong>Directv on Demand</strong>
																				Más de 100 títulos exclusivos en HD y películas para disfrutar; disponibles cuando quieras.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-ipadapp">
																				<strong>Directv Ipad app</strong>
																				Cambia Directvl, pausa, adelanta o retrocede los contenidos desde tu iPad.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-tvapp">
																				<strong>Directv TV App</strong>
																				DIRECTV te llama cuando lo necesites, solo presiona el botón  "Me llamas". Valido para clientes con DIRECTV Nexus.
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 modu-item">
																			<div class="modu-content modu-control">
																				<span class="tag">disponible</span>
																				<strong>Directv Control Plus</strong>
																				Graba tus programas favoritos cuando quieras y donde quieras desde tu teléfono celular o computadora.
																			</div>
																		</div>
																		<div class="col-sm-12 modu-item hidden-xs">
																			<div class="precio">
																				<div class="grande">
																					<span class="soles">S/.</span><span class="numero">175</span>
																				</div>
																				<div class="chico">
																					<div class="txt1">Mensuales</div>
																					<div class="txt2">los primeros 3 meses</div>
																				</div>
																				<div class="condi">
																					<a target="#" data-toggle="modal" data-target="#condi-modal">Ver condiciones de promoción</a>
																				</div>
																			</div>
																			'.$numero_pie.'
																		</div>',
												),
					);

	if(isset($_GET['promo'])){
		$get_promo = $_GET['promo'];
	}else{
		$get_promo = 'oro-hd';
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>Directv</title>

		<link rel="shortcut icon"  href="<?php echo $web_url; ?>/images/favicon.ico"/>
		<link href="<?php echo $web_url; ?>/bootstrap.css" rel="stylesheet">
		<link href="<?php echo $web_url; ?>/style.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-62205594-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<body>
		<header class="navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 logo-dtv">
						<img src="<?php echo $web_url; ?>/images/logo-dtv.png" alt="Directv">
					</div>
					<div class="col-sm-7 quiero-dtv">
						<span class="txt-quiero hidden-sm hidden-md hidden-lg">¡Quiero <strong>Directv!</strong></span>
						<a class="numero hidden-lg hidden-md" href="tel:(01)5005101">(01)500-5101</a>
						<div class="txt-chico hidden-xs">
							Clientes <strong>DIRECTV</strong> <br>
							<span class="azul">Atención y soporte técnico</span> <br>
							<span class="num2">(01)200-4606</span>
						</div>
						<a class="numero hidden-sm hidden-xs" href="tel:(01)5005101">(01)500-5101</a>
					</div>
				</div>
				<nav class="navbar menu-prin">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<span class="titulo-movil hidden-sm hidden-md hidden-lg"><?php echo $promos[$get_promo]['menu']; ?></span>
						</div>
						<div class="collapse navbar-collapse menu-movil" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<?php
									foreach ($promos as $key => $promo) {
										echo '<li ';
										if($key == $get_promo){
											echo 'class="active"';
										}
										echo ' ><a href="'.$web_url.'/'.$key.'/">'.$promo['menu'].'</a></li>';
									}
								?>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>

		<section>
			<div class="banner" style="background-image: url(<?php echo $web_url.'/images/'.$promos[$get_promo]['banner-desktop']; ?>)">
				<!-- <div class="banner-celu" style="background-image: url(<?php echo $web_url.'/images/celu-'.$promos[$get_promo]['banner-desktop']; ?>)"> -->
					<div class="banner-content">
						<div class="container">
							<div class="row">
								<div class="col-sm-7">
									<div class="desde"></div>
									<div class="llamamos-gratis">
										<a href="#" data-toggle="modal" data-target="#llamame-modal">
											<span class="llame-on"></span>
							    			<span class="llame-off"></span>
										</a>
									</div>
									<div class="preciador">
										<?php
											if($promos[$get_promo]['escudos'] == 'escudos-orohd.png'){
												?>
													<img class="escudo-orohd hidden-xs hidden-sm hidden-md" src="<?php echo $web_url.'/images/'.$promos[$get_promo]['escudos']; ?>" alt="">
												<?php
											}
										?>
										<a target="#" data-toggle="modal" data-target="#llamame-modal" class="suscribete btn btn-primary hidden-sm hidden-md hidden-lg">Suscríbete</a>
										<div class="acceso hidden-sm hidden-md hidden-lg">
											<?php echo $promos[$get_promo]['acceso-celu']; ?>
										</div>
										<div class="precio">
											<div class="precio-1">
												<div class="txt-blanco hidden-xs">desde</div>
												<div class="soles">S/.</div>
											</div>
											<div class="precio-2">
												<?php echo $promos[$get_promo]['precio']; ?>
											</div>
											<div class="precio-3">
												<div class="precio-descri hidden-xs">
													<?php echo $promos[$get_promo]['tiempo']; ?>
												</div>
												<div class="precio-descri hidden-sm hidden-md hidden-lg">
													<?php echo $promos[$get_promo]['tiempo-celu']; ?>
												</div>
											</div>
										</div>
										<div class="mensaje hidden-xs">
											<div class="mensaje-1">
												<?php echo $promos[$get_promo]['preciador']; ?>
											</div>
											<?php
												if($promos[$get_promo]['escudos']){
													?>
														<div class="mensaje-2 hidden-xs hidden-sm hidden-md">
															<?php
																if($promos[$get_promo]['escudos'] != 'escudos-orohd.png'){
																	?>
																		<img src="<?php echo $web_url.'/images/'.$promos[$get_promo]['escudos']; ?>" alt="">
																	<?php
																}
															?>
														</div>
													<?php
												}
											?>
										</div>
										<div class="legales hidden-sm hidden-xs">
											*Tarifa de Conexión para decodificador principal aplicable para abonados con score 0 y que afilien su tarjeta de crédito al débito automático para el pago de la tarifa de conexión y de la renta mensual
										</div>
									</div>
								</div>
								<div class="col-sm-5 hidden-xs">
									<div class="llamame">
										<div class="plan-nombre">
											<img src="<?php echo $web_url.'/images/'.$promos[$get_promo]['nombre-png']; ?>">
											<div class="plan-intro">
												<?php echo $promos[$get_promo]['plan-intro']; ?>
											</div>
										</div>
										<div class="txt1">
											Te llamamos gratis
										</div>
										<form action="">
											<input class="form-control escribe" placeholder="Escribe tu número" type="text">
											<div class="checkbox">
												<label>
													<input checked="checked" type="checkbox" class="check"> Acepto la política de privacidad
												</label>
											</div>
											<button href="#" class="btn btn-primary">Llámame ahora</button>
										</form>
										<div class="txt2">
											¡QUIERO <strong>DIRECTV!</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- </div> -->
			</div>
			<div class="legales-movil hidden-md hidden-lg hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="txt">*Tarifa de Conexión para decodificador principal aplicable para abonados con score 0 y que afilien su tarjeta de crédito al débito automático para el pago de la tarifa de conexión y de la renta mensual</div>
						</div>
					</div>
				</div>
			</div>
			<article>
				<div class="container">
					<div class="row mas-info hidden-xs">
						<div class="col-lg-10 col-fix-ancho-10">
							<div class="titulo">
								<span>Más información</span>
								<h1>Directv <?php echo $promos[$get_promo]['menu']; ?></h1>
							</div>
							<div class="descripcion">
								<?php echo $promos[$get_promo]['mas-info']; ?>
							</div>
						</div>
					</div>
					<row class="mas-info-celu hidden-sm hidden-md hidden-lg">
						<div class="col-xs-12 col-fix-ancho-10">
							<?php echo $promos[$get_promo]['preciador-celu']; ?>
							<div class="ver-canales-celu">
								Ver lista de <a target="_blank" href="<?php echo $web_url.'/docs/paquetes.pdf'; ?>">canales</a>
							</div>
						</div>
					</row>
					<div class="row modulos">
						<div class="col-sm-10 col-fix-ancho-10">
							<div class="row modu-lista">
								<?php echo $promos[$get_promo]['modulos']; ?>
							</div>
						</div>
					</div>
					<div class="row mas-celu hidden-sm hidden-md hidden-lg">
						<div class="col-sm-10 col-fix-ancho-10">
							<a target="#" data-toggle="modal" data-target="#llamame-modal" class="suscribete btn btn-primary hidden-sm hidden-md hidden-lg">Suscríbete</a>
							<span class="quiero-celu">¡Quiero <strong>DirecTV!</strong></span>
						</div>
					</div>
				</div>
			</article>
		</section>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-fix-ancho-10">
						<div class="row row-pie">
							<div class="col-sm-6 menu-pie">
								<ul class="nav nav-pills">
									<li><a target="_blank" href="<?php echo $web_url.'/docs/aviso-legal.pdf'; ?>">Aviso legal</a></li>
									<li><a target="_blank" href="<?php echo $web_url.'/docs/aviso-legal.pdf'; ?>">Política de privacidad</a></li>
								</ul>
							</div>
							<div class="col-sm-6">
								<a href="http://www.osiptel.gob.pe" class="logo-osiptel hidden-xs" target="_blank"></a>
								<div class="txt-osiptel">
									Más información en: <br>
									<a href="http://www.osiptel.gob.pe" target="_blank">www.osiptel.gob.pe</a>
								</div>
							</div>
						</div>
						<div class="row condi-celu hidden-sm hidden-md hidden-lg">
							<div class="col-sm-12">
								<a target="#" data-toggle="modal" data-target="#condi-modal">* Ver condiciones</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<div class="modal modal-vcenter fade" id="llamame-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content popup-alf">
					<div class="alf-content">
						<h2>Te llamamos gratis</h2>
						<form action="">
							<input class="form-control escribe" placeholder="Escribe tu número" type="text">
							<div class="checkbox">
								<label>
									<input checked="checked" type="checkbox" class="check"> Acepto la política de privacidad
								</label>
							</div>
							<button href="#" class="btn btn-primary">Llámame ahora</button>
						</form>
					</div>
				</div>
			</div>
			<div class="cerrar"  data-dismiss="modal"></div>
		</div>

		<div class="modal modal-vcenter fade" id="condi-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content popup-condi">
					<div class="condi-content hidden-xs">
						<h2>CONDICIONES DE PROMOCIÓN</h2>
						<p>Para visualizar programación HD se deberá contar con decodificador DIRECTV HD DVR o DIRECTV HD + TV HD + Paquete de Programación HD. Aplican restricciones de cobertura. Tarifa incluye renta del paquete y DIRECTV Garantía. Tarifas de conexión y otras condiciones aplicables disponibles en Condiciones y Tarifas. Encuentra nuestras tarifas registradas en la página de Osiptel. Multicámara no disponible en DIRECTV Play. Contenidos referidos a la cámara táctica, canal directv SPORTS, canal de resúmenes, relatos personalizados. DIRECTV Play es un servicio gratuito que aplica para clientes DIRECTV que registren cuenta en MiDIRECTV. Se requiere de una conexión mínima de 500 kbps. Para visualización de contenidos HD, la conexión mínima deberá ser de 3MBps. Algunos títulos no están disponibles en HD. El funcionamiento de las plataformas y su acceso a través de los distintos dispositivos (Smartphone, PC y tablet) dependen del programador. El acceso al contenido de las distintas plataformas online depende del paquete de programación contratado y de las restricciones geográficas y técnicas de los programadores. Mayor información en directv.com.pe.</p>
					</div>
					<div class="condi-content hidden-sm hidden-md hidden-lg">
						*Tarifa de Conexión para decodificador principal aplicable para abonados con score 0 y que afilien su tarjeta de crédito al débito automático para el pago de la tarifa de conexión y de la renta mensual
					</div>
				</div>
			</div>
			<div class="cerrar"  data-dismiss="modal"></div>
		</div>

		<div class="modal modal-vcenter fade" id="intro-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content popup-intro">
					<div class="intro-content">
						<h2>¿Ya cuentas con el servicio <strong>Directv</strong></h2>
						<div class="ya">
							<div class="amarillo">
								(01)200-4606
							</div>
							<div class="mini-txt">Atención al cliente y soporte técnico</div>
						</div>
						<div class="pregunta">
							<span class="si">si</span>
							<span class="no" data-dismiss="modal">no</span>
						</div>
						<div class="esq-izq">
							Llama sin costo al: <br>
							<strong>0800 - 10606</strong>
						</div>
						<div class="esq-der">
							<img src="<?php echo $web_url.'/images/logo-solo.png'; ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="cerrar"  data-dismiss="modal"></div>
		</div>

		<script src="<?php echo $web_url; ?>/jquery.js"></script>
		<script src="<?php echo $web_url; ?>/bootstrap.min.js"></script>
		<script src="<?php echo $web_url; ?>/jquery.matchHeight-min.js" type="text/javascript"></script>
		<script src="<?php echo $web_url; ?>/preloadCssImages.jQuery_v5.js" type="text/javascript"></script>
		<script src="<?php echo $web_url; ?>/scripts.js" type="text/javascript"></script>
	</body>
</html>