<?php
    // conexion a la bd
    require 'conect/conecta.php';
    error_reporting(E_ERROR);
    // consulta para obtener todos los productos
		$query = "SELECT * FROM Productos ORDER BY Id_Categoria";
	  $resultado=$mysqli->query($query);
	  $numero = $resultado->num_rows;
		$mysqli->close();
?>
<!doctype html>
<html lang="en">
<head>
	<!-- insertar meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>SantaVaca Cortes Finos | Productos </title>
	<!-- Bootstrap CSS -->
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
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<a class="ir-arriba"  javascript:void(0) title="Volver arriba">
	<span class="fa-stack">
		<i class="fa fa-circle fa-stack-2x"></i>
		<i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
	</span>
	</a>
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
					<li class="nav-item"><a class="nav-link" href="index.php"><img src="img/header/nav-icon1.png" alt=""> Inicio</a></li>
					<li class="nav-item"><a class="nav-link" href="acercade.html"><img src="img/header/nav-icon2.png" alt="">Nosotros</a></li>
					<li class="nav-item"><a class="nav-link active" href="menu.html"><img src="img/header/nav-icon13.png" alt="">Productos</a></li>
					<li class="nav-item"><a class="nav-link" href="galeria.html"><img src="img/header/nav-icon11.png" alt="">Galeria</a></li>
					<li class="nav-item"><a class="nav-link" href="servicios.html"><img src="img/header/nav-icon5.png" alt="">Servicios</a></li>
					</ul>
			</div>
		</div>
	</header>
	<!-- Termina el Menu -->
	<div class="site-main">
		<!--================ Start Home Banner Area =================-->
		<section class="home_banner_area common-banner">
			<div class="banner_inner">
				<div class="container-fluid no-padding">
					<div class="row fullscreen">

					</div>
				</div>
			</div>
		</section>
		<!-- Start banner bottom -->
		<div class="row banner-bottom common-bottom-banner align-items-center justify-content-center">
			<div class="col-lg-8 offset-lg-4">
				<div class="banner_content">
					<div class="row d-flex align-items-center">
						<div class="col-lg-7 col-md-12">
							<h1>Nuestros Productos</h1>
							<p>En SantaVaca Cortes Finos te brindamos productos de primera calidad y frescura.</p>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="page-link-wrap">
								<div class="page_link">
									<a href="index.html">Inicio</a>
									<a href="menu.html">Productos</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br><br><br><br>
		<!-- termina el banner -->
			<a class='flotante img-fluid' href="https://api.whatsapp.com/send?phone=5572380289" target="_blank"><img src='img/btnw.png' border="0" alt="whatsap"/></a>
    <!-- inicia tarjetas de productos -->
		<!-- configuración de id de productos -->
		<!-- tarjetas de productos -->
		<?php while($row = $resultado->fetch_assoc()) { ?>
			<?php
			   $categoria = $row['Id_Categoria'];
			   if ( $categoria == 1) {
			    $categoria = "Vinos";
			   }
			   elseif ($categoria == 2) {
	         $categoria = "Complementos";
			   }
			   elseif ($categoria == 3) {
           $categoria = "Quesos";
			   }
				 elseif ($categoria == 4) {
           $categoria = "Corte Tradicional";
			   }
				 elseif ($categoria == 5) {
           $categoria = "Corte Supremo";
			   }
				 elseif ($categoria == 6) {
           $categoria = "Corte Premium";
			   }
			   else{
           $categoria = "Mas de nuestros productos";
			   }
			 ?>
			<div class="card mb-3" style="max-width: 1020px;">
				<div class="card-header"> Categoria :<b> <?php echo $categoria ?></b></div>
          <div class="row no-gutters">
             <div class="col-md-4">
                 <img src="img/chef/<?php echo $row['Imagen'];?>" class="card-img" alt="...">
            </div>
       <div class="col-md-8">
           <div class="card-body">
               <h3 class="card-title"><?php echo $row['Nombre'];?></h3>
        <p class="card-text">
           <ul>
           	<li>Precio : <b> MXN <?php echo $row['Precio'];?></b></li>
           </ul>
				</p>
        <p class="card-text"><small class="text-muted">Descripción:</small></p>
      </div>
    </div>
  </div>
	<div class="card-footer">
      <small class="text-muted">Calidad SantaVaca Cortes Finos</small>
    </div>
</div>
	 <?php } ?>


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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
	<script src="js/arriba.js"></script>
  <script src="js/pace.min.js"></script>
</body>

</html>
