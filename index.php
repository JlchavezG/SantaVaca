<?php
    // conexion a la bd
    require 'conect/conecta.php';
    error_reporting(E_ERROR);

   // inicia la insercion de datos para el registro de ofertas
    if (!empty($_POST['submit'])) {
      $nombre = $mysqli->real_escape_string($_POST['nombre']);
      $email = $mysqli->real_escape_string($_POST['email']);
      $telefono = $mysqli->real_escape_string($_POST['telefono']);
      $gustos = $mysqli->real_escape_string($_POST['gustos']);
    // consulta para insertar a bd
      $sql = "INSERT INTO registro (Nombre , Email , Telefono , Gustos) VALUES ('$nombre','$email','$telefono','$gustos')";
      $resulta = $mysqli->query($sql);
      }
    $mysqli->close();
 ?>
<!doctype html>
<html lang="en">
<head>
	<!-- insertar  meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>SantaVacaCortesFinos | Inicio </title>
	<!-- Clases de bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/barras.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- estilo principal css -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- loading de la pagina -->
<!-- termina loading -->
<!-- boton arriba -->
<a class="ir-arriba"  javascript:void(0) title="Volver arriba">
<span class="fa-stack">
	<i class="fa fa-circle fa-stack-2x"></i>
	<i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
</span>
</a>
<!-- termina boton -->
<!-- Inicia la seccion  Menu Area -->
	<div class="menu-trigger">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<header class="fixed-menu">
		<span class="menu-close"><i class="fa fa-times"></i></span>
		<div class="menu-header">
			<div class="logo d-flex justify-content-center">
				<img src="img/logo.png" alt="">
			</div>
		</div>
		<div class="nav-wraper">
			<div class="navbar">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link active" href="index.php"><img src="img/header/nav-icon1.png" alt=""> Inicio</a></li>
					<li class="nav-item"><a class="nav-link" href="acercade.html"><img src="img/header/nav-icon2.png" alt="">Nosotros</a></li>
					<li class="nav-item"><a class="nav-link" href="menu.php"><img src="img/header/nav-icon13.png" alt="">Productos</a></li>
					<li class="nav-item"><a class="nav-link" href="galeria.html"><img src="img/header/nav-icon11.png" alt="">Galeria</a></li>
					<li class="nav-item"><a class="nav-link" href="servicios.html"><img src="img/header/nav-icon5.png" alt="">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="loguin.html"><img src="img/header/nav-icon6.png" alt="">Admin.</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Termina el Menu -->
	<div class="site-main">
    <?php
     if ($resulta >0) {
          echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
               <strong>Registro Guardado</strong> Te enviaremos información de nuestras ofertas y noticias. Gracias Att. SantavacaCortesFinos
               <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
               <span aria-hidden='true'>&times;</span>
               </button>
               </div>";
          }
          ?>
          <?php
           if ($resulta1 >0) {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                     <strong>Gracias por tus comentarios</strong>Att. SantavacaCortesFinos
                     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                     <span aria-hidden='true'>&times;</span>
                     </button>
                     </div>";
                }
                ?>
		<!-- Inicia el Banner de inicio -->
		<section class="home_banner_area">
			<div class="banner_inner">
				<div class="container-fluid no-padding">
					<div class="row fullscreen">
					</div>
				</div>
			</div>
		</section>
		<!-- Inicia banner del video  -->
		<div class="row banner-bottom align-items-center justify-content-center">
			<div class="col-lg-6">
			</div>
			<div class="col-lg-6">
				<div class="banner_content">
					<div class="row d-flex align-items-center">
						<div class="col-lg-10 col-md-16">
            <!-- saludo segun la hora -->
              <?php
                      $date = date ("H");
                      echo "<html><body>";
                         if ($date < 12) echo "Buenos dias!";
                         else if ($date < 18) echo "Buenas tardes!";
                         else echo "Buenas noches!";
                         echo "</body></html>";
                ?>
                <!-- termina el saludo -->
							  <p class="top-text text-dark">Fabrica de cortes</p>
							     <h1>SantaVaca Cortes Finos</h1>
							       <p class="text-justify text-dark">Nuestros cortes finos provienen del norte de nuestro país
                         Santa Vaca es una empresa mexicana dedicada a la venta y distribución de cortes finos de carne de res, todos nuestros productos cuentan con altos estándares de calidad provenientes de planta T.I.F.
                         Para que cuando los lleves a tu asador o mesa estén en perfecto estado conservando sus características como sabor, suavidad
                     .</p><br>
						 </div>
						    <div class="col-lg-12 col-md-12">
									<h2>¿Lo tuyo es ser restaurantero?</h2>
										<p class="text-justify text-dark">Mándanos tus datos y un representante de ventas te atenderá. <a href="mailto:contacto@cortefinossantavaca.com"  class="bg-success text-white">contacto@cortefinossantavaca.com</a></p>
								</div>
					  </div><br>
						<div class="banner-btn">
							<a class="primary-btn align-self-end" href="acercade.html">Más Información</a>
					 </div>
						</div>
			   </div>
		</div>
		<a class='flotante img-fluid' href="https://api.whatsapp.com/send?phone=5215572380289" target="_blank"><img src='img/btnw.png' border="0" alt="whatsap"/></a>
		<div class="container">
			<div class="col-md-12 col-lg-12">
      <img src="img/barra.png" class="img-fluid">
		</div>
		</div>
		<!-- Termina el banner bottom -->
		<!-- Inicia seccion de acordeon  -->
		<hr>
    <section class="sec1">
	        <h1 class="text-light text-center">Conoce más sobre nuestros cortes.. </h1>
    </section>
    <section class="sec2">
         <div class="boxy">
         </div>
    </section>
		<div class="breakfast-area section_gap_top">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-6">
						<div class="left-content">
							<div class="accordion" id="accordionExample">
							  <div class="card">
							    <div class="card-header dion" id="headingOne">
							      <h2>
							        <button class="text"  type="button" data-toggle="collapse" data-target="#collapseOne">Cortes
							        </button>
							      </h2>
							    </div>
							    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							      <div class="card-body">
							       <p class="text-justify">En la actualidad sabemos que los cortes de carne suelen ser complicados, inclusive hasta para los amantes de ésta y aumenta su conplejidad, cuando en cada
											país los llaman de maneras completamente distintas. Por ello, en <b>SantaVacaCortesFinos</b> te presentamos una pequeña guía práctica con cortes de carne, en la que
											aprenderás de sus características y algunas maneras de preparación con nuestros expertos.</p>
									  </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header dion" id="headingTwo">
							      <h2>
							        <button class="text" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							          Tip para tu carne
							        </button>
							      </h2>
							    </div>
							    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							      <div class="card-body">
							        <p class="text-justify">En <b>SantaVacaCortesFinos</b> nos gusta consentirte a demas de ayudarte a consentir a los tuyos, por tal motivo te presentamos tips para escoger, preparar y acompañar un excelente corte.
												<b>Tip 1. Grosor del corte:</b> El corte debe tener el mismo grosor en toda la pieza, para que de esta manera se cocine de manera uniforme y no queden pedazos más duros que otros. El grosor debe tener por lo menos 1 pulgada o 2 ½ cm, ya que un corte más delgado es más fácil cocinarlo de más. El tamaño ideal que la mayoría recomienda es 1 ½ pulgada o 3½ cm aproximadamente.</p>

											<div class="banner-btn">
												<a class="primary-btn align-self-end" href="servicios.html">Más Información</a>
										 </div>
										</div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header dion" id="headingThree">
							      <h2>
							        <button class="text" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							          Tipos de Cortes
							        </button>
							      </h2>
							    </div>
							    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							      <div class="card-body">
											<p class="text-justify">Existe gran variedad de cortes en el mercado de acuerdo a los gustos de cada comesal con hueso , sin hueso, marmoleado , con grasa si quieres
											saber cual de estos cortes va mejor con tu personalidad dale clic al boton de mas Información para averiguarlo.</p>
											<div class="banner-btn">
												<a class="primary-btn align-self-end" href="servicios.html">Más Información</a>
										 </div>
										</div>
							    </div>
							  </div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 offset-lg-1">
						<div class="right-img">
							<img class="img1 img-fluid" src="img/food/food1.png" alt="imagen">
							<img class="img2 img-fluid" src="img/food/food2.png" alt="imagen">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--- Termina seccion  acordeon ------->
		<!--- Incia seccion horizontal -->
		<section class="diagonal">
          <div class="container">
              <h1 class="text-center text-light"> No vendemos solo carne, disfrutamos atenderte.</h1>
          </div>
    </section>
		<!-- termina seccion horizontal -->
		<!--- Inicia seccion de servicios  ------>
		<div class="breakfast-area lunch-area section_gap">
			<div class="container">
			 <div id="clientes">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-6 ">
						<div class="right-img">
							<img class="img1 img-fluid" src="img/food/food3.jpg" alt="">
						</div>
					  </div>
					<div class="col-lg-5 offset-lg-1">
						<div class="left-content">
				   			<h1>Nuestros Servicios </h1>
					   		<ul>
                   <li>Servicios en tienda :</li>
                          <p class="text-justify">Tenemos el conocimiento para ofrecerte lo mejor a tu gusto y necesidad. Dinos qué es lo que se te antoja y te ofreceremos
                          tu corte ideal acompañado de el mejor vino para maridar.</p>
                  <li>Servicio en nuestro Grill :</li>
                          <p class="text-justify">No quieres asar en tu casa?  los dias <b>sabados y domingos</b> tenemos un lugar para que disfrutes de todo el sabor de nuestros cortes.
                            Asamos el corte que eligiste, te ofrecemos también ensaladas, jugo de carne, embutidos y todo preparado por nuestro Parrillero Experto.</p>
                 </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!--================ Termina Servicios =================-->
		<!--================ Inicia Registro =================-->
		<section class="reservation-area section_gap_top">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-6 offset-lg-6">
						<div class="contact-form-section">
							<h1>Se parte de nuestras Ofertas</h1>
							<p>Unete a nuestros Usuarios</p>
							<p class="text-justify">Brindanos algunos de tus datos para poder enviarte todas nuestras ofertas y las noticias mas relevantes de Santavaca Cortes Finos.</p>
              <!-- inicia modal para registro de usuarios -->
              <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                           <div class="modal-header text-center">
                               <h4 class="modal-title w-100 font-weight-bold">Nuevo Registro</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                     </button>
                           </div>
                           <div class="modal-body mx-3">
                           <div class="md-form mb-5">
                           <form name="registro" id="registro" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                                 <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa tu nombre" required>
                           </div>
                           <div class="md-form mb-4">
                                  <input type="email" id="email" name="email" class="form-control" placeholder="Email" required/>
                          </div>
                          <div class="md-form mb-4">
                                 <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Telefono" required/>
                          </div>
                          <div class="md-form mb-4">
                                 <select name="gustos" id="gustos" class="select-custom" required/>
                                  <option value="">Selecciona una opción</option>
                                    <option value="Cortes Americanos">Cortes Americanos</option>
                                    <option value="Cortes Argentinos">Cortes Argentinos</option>
                                    <option value="Quesos">Quesos</option>
                                 </select>
                                 <small>Selecciona tus gustos de cortes</small>
                          </div>
                      </div>
                       <div class="modal-footer d-flex justify-content-center">
                          <input type="submit" name="submit" value="Registrar" class="btn btn-success">
                       </div>
                  </div>
             </div>
        </form>
    </div>
<div class="text-center">
<a href="" class="btn btn-success btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">
  Registrate</a>
</div>
<!-- termina el modal -->
          	</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ Termina Registro =================-->
		<!--================ Inicia Parrillero =================-->
		<div class="chef-area section_gap_top">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="left-chef">
							<img class="img-fluid" src="img/chef/chef1.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-5 offset-lg-1">
						<div class="left-content">
							<h1>Nuestro Grill</h1>
							<p class="text-justify">En Santavaca Cortes Finos nos preocupamos por nuestros clientes
								Disfruta tu corte de carne sin la necesidad de hacerlo en tu hogar los dias. Nosotros te preparamos tu corte en el punto exacto.</p>
							<p class="text-justify">La experiencia de nuestro parrillero experto te brindara una sensación unica en tu paladar al probar el corte que elegiste. para despues llevartelo a casa y disfrutar de el.</p>
              <p class="text-justify"><b>Nota:</b> Nuestro Grill esta disponible los dias <b>Sabados y Domingos.</b></p>
							<img src="img/chef/signature.png" alt="">
						</div>
					</div>
				</div>
				<div class="row chef-items">
					<div class="col-lg-12 offset-lg-1">
						<div class="row">
							<!-- single chef item -->
							<div class="col-lg-2 col-md-5">
								<div class="single-chef-item">
									<a href="img/food/food1_1.png" class="img-popup"><img src="img/chef/item1.png" alt="Queso"></a>
								</div>
							</div>
							<!-- single chef item -->
							<div class="col-lg-2 col-md-5">
								<div class="single-chef-item">
									<a href="img/food/food1_2.png" class="img-popup"><img src="img/chef/item2.png" alt="Asador"></a>
								</div>
							</div>
							<!-- single chef item -->
							<div class="col-lg-2 col-md-5">
								<div class="single-chef-item">
									<a href="img/food/food1_3.png" class="img-popup"><img src="img/chef/item3.png" alt="Carne"></a>
								</div>
							</div>
							<!-- single chef item -->
							<div class="col-lg-2 col-md-5">
								<div class="single-chef-item">
									<a href="img/food/food1_4.png" class="img-popup"><img src="img/chef/item4.png" alt="Parrillero"></a>
								</div>
							</div>
							<!-- single chef item -->
							<div class="col-lg-2 col-md-5">
								<div class="single-chef-item">
									<a href="img/food/food1_5.png" class="img-popup"><img src="img/chef/item5.png" alt="Parrilla"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<div>
</div>
<!--================ Termina parrillero =================-->
<!--- slider principal -->
<div class="bd-example">
 <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	 <ol class="carousel-indicators">
		 <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		 <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		 <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		 <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
		 <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
		 <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
	 </ol>
	 <div class="carousel-inner">
		 <div class="carousel-item active">
			 <img src="img/chef/slider1.jpg" class="d-block w-100" alt="Bife de Chorizo">
			 <div class="carousel-caption d-none d-md-block">
				 <h4 class="text-light">Bife de Chorizo</h4>
				 <p>Nivel Alta de Grasa,Parte de la Res: Costillar.</p>
			 </div>
		 </div>
		 <div class="carousel-item">
			 <img src="img/chef/slider2.jpg" class="d-block w-100" alt="Tomahak/ Cowboy">
			 <div class="carousel-caption d-none d-md-block">
				 <h4 class="text-light">Tomahak / Cowboy</h4>
				 <p>Nivel Alto de Grasa,Parte de la Res: Costilla.</p>
			 </div>
		 </div>
		 <div class="carousel-item">
			 <img src="img/chef/slider3.jpg" class="d-block w-100" alt="Entrecot">
			 <div class="carousel-caption d-none d-md-block">
				 <h4 class="text-light">Entrecot</h4>
				 <p>Nivel Medio de Grasa,Parte de la Res: Costilla.</p>
			 </div>
		 </div>
		 <div class="carousel-item">
			 <img src="img/chef/slider4.jpg" class="d-block w-100" alt="Rib-Eye">
			 <div class="carousel-caption d-none d-md-block">
				 <h4 class="text-light">Rib-eye</h4>
				 <p>Nivel Medio de Grasa, Parte de la Res: Costilla.</p>
			 </div>
		 </div>
		 <div class="carousel-item">
			 <img src="img/chef/slider5.jpg" class="d-block w-100" alt="...">
			 <div class="carousel-caption d-none d-md-block">
				 <h4 class="text-light">Asado de Tira</h4>
				 <p>Nivel Inter-Medio de Grasa,Parte de la Res: Costillar.</p>
			 </div>
		 </div>
		 <div class="carousel-item">
			 <img src="img/chef/slider6.jpg" class="d-block w-100" alt="...">
			 <div class="carousel-caption d-none d-md-block">
				 <h4 class="text-light">New York</h4>
				 <p>Nivel Medio de Grasa,Parte de la Res: Costilla.</p>
			 </div>
		 </div>
	 </div>
	 <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		 <span class="sr-only">Previous</span>
	 </a>
	 <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		 <span class="carousel-control-next-icon" aria-hidden="true"></span>
		 <span class="sr-only">Next</span>
	 </a>
 </div>
</div>
<!--- Termina slider principal ----->
<!--================ inicia la galeria de imagenes =================-->
		<section class="section_gap_top food-gallery-area">
			<div class="container-fluid no-padding">
				<div class="row owl-carousel active-food-gallery">
					<!-- single gallery item -->
					<div class="single-gallery-item">
					 <img class="img-fluid" src="img/food/food5.jpg" alt="nuestras Instalaciones">
					</div>
					<!-- single gallery item -->
					<div class="single-gallery-item">
						<img class="img-fluid" src="img/food/food6.jpg" alt="">
					</div>
					<!-- single gallery item -->
					<div class="single-gallery-item">
						<img class="img-fluid" src="img/food/food7.jpg" alt="">
					</div>
					<!-- single gallery item -->
					<div class="single-gallery-item">
						<img class="img-fluid" src="img/food/food8.jpg" alt="">
					</div>
					<!-- single gallery item -->
					<div class="single-gallery-item">
						<img class="img-fluid" src="img/food/food9.jpg" alt="">
					</div>
					<!-- single gallery item -->
					<div class="single-gallery-item">
						<img class="img-fluid" src="img/food/food10.jpg" alt="">
					</div>
					<!-- single gallery item -->
					<div class="single-gallery-item">
						<img class="img-fluid" src="img/food/food11.jpg" alt="">
					</div>
					<!-- single gallery item -->
					<div class="single-gallery-item">
						<img class="img-fluid" src="img/food/food12.jpg" alt="">
					</div>
				</div>
			</div>
		</section>
		<!--================ Termina  Gallery Area =================-->
    <!-- inicia paralax -->
    <div class="parallax"><br>
       <h2 class="text-center text-light">Zona de enlaces Multimedia</h2>
			 <hr>
			 <p class="text-center text light">Si no cuentas con un Scan Qr dale <a href="https://qrbot.net/en/" target="blank" class="text-success"> Click aqui</a> y podas descargarlo en tu Movil.</p>
			     <div class="col-md-12 col-lg-12 col-sm-12 align-self-end">
			      <!-- qr para red -->
              <div class="row rounded mx-auto d-block">
                ​<picture>
                   <source srcset="img/msn.png" type="image/svg+xml">
                     <img src="img/msn.png" class="img-fluid img-thumbnail qr" alt="Mensaje tel" title="Envianos un Mensaje Directo">
                </picture>
                ​<picture>
                   <source srcset="img/Facebook3.png" type="image/svg+xml">
                   <img src="img/Facebook3.png" class="img-fluid img-thumbnail qr" alt="Qr de Facebook" title="Siguenos en Facebook">
                </picture>
                <picture>
                   <source srcset="img/maps.png" type="image/svg+xml">
                   <img src="img/maps.png" class="img-fluid img-thumbnail qr" alt="Qr Ubicación" title="Ubicación en Maps">
                </picture>
                <picture>
                   <source srcset="img/email.png" type="image/svg+xml">
                   <img src="img/email.png" class="img-fluid img-thumbnail qr" alt="Envianos un Email" title="Envianos un Email">
                </picture>
              </div><br>
            <!-- termina  -->
            <p class="text-center text-light">Escanea cada uno de estos codigos si quieres comunicarte con nosotros desde tu Telefono Movil. Optimizamos tu tiempo</p>
            <h3 class="text-center">Santavaca Cortes Finos</h3>
       </div>
    </div>
		<!-- termina paralax -->
		<!--================ Inicia contacto Area =================-->
		<section class="contact_area section_gap">
			<div class="container">
				<div id="mapBox" class="mapBox">
				</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="contact_info">
							<div class="info_item">
								<i class="lnr lnr-home"></i>
								<p>Dr José María Vertiz 1132</p>
								<p>Colonia, Vértiz Narvarte, 03600</p>
							</div>
							<div class="info_item">
								<i class="lnr lnr-phone-handset"></i>
								<p><a href="tel:600123456" class="text-success">55 7027 5904</a></p>
							</div>
							<div class="info_item">
								<i class="lnr lnr-envelope"></i>
								<p class="text-success">contacto@santavacacortesfinos.com</p>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						<form class="row contact_form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" id="contactForm" enctype="text/plain">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="nombrec" placeholder="Ingresa tu Nombre" required>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="email" name="emailc" placeholder="Tu Email" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto:" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<textarea class="form-control" name="mensaje" id="mensaje" placeholder="Tu Mensaje" required></textarea>
								</div>
							</div>
							<div class="col-md-12 text-right">
								<button type="submit" value="enviar" name="enviar" class="primary-btn align-self-end">Enviar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!--================ termina contacto =================-->
		<!--================ Inicia Footer  =================-->
		<footer class="footer-area overlay">
			<div class="container">
				<div class="row">
				</div>
				<div class="row footer-bottom">
					<div class="col-lg-12">

						<div class="social-icons row justify-content-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-whatsapp"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-12 text-center">
						<p class="footer-text">
								<p class="text-light">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | SantaVacaCortesFinos WebMaster iscJlchavezG.</p>
						<p class="text-center text-light">www.santavacacortesfinos.com</p>
						<img src="img/firma_joseluis.png" class="firma">
				</div>
			</div>
		</footer>
		<!--================ Termina footer =================-->
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCKiIqCdZGrVxx06LSbe7uG3zXOq1Cz5k&callback=initMap" async defer></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
	<script src="js/arriba.js"></script>
  <script src="js/pace.min.js"></script>
	<script>
		$('.carousel').carousel();
	</script>
</body>

</html>