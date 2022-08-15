<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="index.html"><img src=assets/img/logo.jpg></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="productos.html">Productos</a></li>
          <li><a class="active" href="contacto.html">Contacto</a></li>
          <li><a class="active" href="registroadmin1.php">Registro</a></li>
          <li><a class="active" href="loginadmin.php">Iniciar sesión</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://www.facebook.com/Paleteria-taca-taca-328626384462047/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/_el_taca_uwu/" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">
  
    <div id="login" clase="bloque">

    </div>
    <?php if(isset($_SESSION['usuario'])): ?>
		<div id="usuario-logueado" class="bloque">
			<h3>Bienvenido, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>
			<!--botones-->
			<a href="crear-entradas.php" class="boton boton-verde">Crear entradas</a>
			<a href="crear-categoria.php" class="boton">Crear categoria</a>
			<a href="mis-datos.php" class="boton boton-naranja">Mis datos</a>
			<a href="cerrar.php" class="boton">Cerrar sesión</a>
		</div>
	<?php endif; ?>

    <center><section id="login" class="bloque">
		<h3>Ingresa tus datos</h3>

    <?php if(isset ($_SESSION['error login'])):?>
      <div class="alerta alerta-error">
        <?php $_SESSION['error_login'];?>
      </div>
      <?php endif; ?>

    
		<!-- Inicio de formulario -->
		<form action="loginadmin.php" method="POST"> 
			
			<label for="email">Email</label> <br>
			<input type="email" name="email" /><br>

			<label for="password">Contraseña</label><br>
			<input type="password" name="password" /><br>

			<br><input type="submit"  value="Iniciar" />
		</form></center>

	</div>
           

  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>