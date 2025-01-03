<?php
// Incluir las clases Producto y Carrito para utilizar las en shop.php
include 'clases/Producto.php';
include 'clases/Carrito.php';

//Aqui se crea un nueva instancia de la clase Carrito, que se usara para gestionar
// los productos que se agregaran al carrito
$carrito = new Carrito(); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto = new Producto(
        $_POST['book_id'],
        $_POST['book_title'],
        1,
        $_POST['book_price'],
		$_POST['book_image']
    );
    $carrito->agregarProducto($producto);
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

		<!-- Inicio del Navbar -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php">LibHub<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item ">
							<a class="nav-link" href="index.php">Inicio</a>
						</li>
						<li class="active"><a class="nav-link" href="shop.php">Comprar</a></li>
						<li><a class="nav-link" href="about.html">Sobre Nosotros</a></li>
						<li><a class="nav-link" href="contact.html">Contacto</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
						<li><a class="nav-link" href="cart.php"><img src="images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- Final del Navbar -->

		<!-- Titulo -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Compra</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- Final -->

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

		      		<!-- Libro 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<form method="post" action="cart.php">
							<input type="hidden" name="book_id" value="1">
							<input type="hidden" name="book_title" value="Deja de ser tu.">
							<input type="hidden" name="book_price" value="50.00">
							<input type="hidden" name="book_image" value="img_libros/libro1.webp">
							<button type="submit" class="btn btn-primary">
								<img src="img_libros/libro1.webp" class="img-fluid product-thumbnail">
								<h5 class="product-title">Deja de ser tu</h5>
								<strong class="product-price">$50.00</strong>
								
							</button>
						</form>
					</div>

					<!-- End Libro 1 -->
						
					<!-- Start Libro 2 -->

					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<form method="post" action="cart.php">
							<input type="hidden" name="book_id" value="2">
							<input type="hidden" name="book_title" value="En agosto nos vemos">
							<input type="hidden" name="book_price" value="58.00">
							<input type="hidden" name="book_image" value="img_libros/libro2.webp">
							<button type="submit" class="btn btn-primary">
								<img src="img_libros/libro2.webp" class="img-fluid product-thumbnail">
								<h5 class="product-title">En agosto nos vemos</h5>
								<strong class="product-price">$58.00</strong>
							</button>
						</form>
					</div>

					<!-- End Libro 2 -->

					<!-- Start Libro 3 -->

					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<form method="post" action="cart.php">
							<input type="hidden" name="book_id" value="3">
							<input type="hidden" name="book_title" value="Alas de Hierro">
							<input type="hidden" name="book_price" value="78.00">
							<input type="hidden" name="book_image" value="img_libros/libro3.webp">
							<button type="submit" class="btn btn-primary">
								<img src="img_libros/libro3.webp" class="img-fluid product-thumbnail">
								<h5 class="product-title">En agosto nos vemos</h5>
								<strong class="product-price">$78.00</strong>
							</button>
						</form>
					</div>

					<!-- End Libro 3-->

					<!-- Start Libro 4 -->

					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<form method="post" action="cart.php">
							<input type="hidden" name="book_id" value="4">
							<input type="hidden" name="book_title" value="El libro de Bill">
							<input type="hidden" name="book_price" value="43.00">
							<input type="hidden" name="book_image" value="img_libros/libro4.webp">
							<button type="submit" class="btn btn-primary">
								<img src="img_libros/libro4.webp" class="img-fluid product-thumbnail">
								<h5 class="product-title">El libro de Bill</h5>
								<strong class="product-price">$43.00</strong>
							</button>
						</form>
					</div>

					<!-- End Libro 4 -->


					<!-- Start Libro 5 -->

					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<form method="post" action="cart.php">
							<input type="hidden" name="book_id" value="5">
							<input type="hidden" name="book_title" value="Los vagabundos de Dios">
							<input type="hidden" name="book_price" value="53.00">
							<input type="hidden" name="book_image" value="img_libros/libro5.webp">
							<button type="submit" class="btn btn-primary">
								<img src="img_libros/libro5.webp" class="img-fluid product-thumbnail">
								<h5 class="product-title">Los vagabundos de Dios</h5>
								<strong class="product-price">$53.00</strong>
							</button>
						</form>
					</div>

					<!-- Final Libro 5 -->
						
					<!-- Start Libro 6 -->

					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<form method="post" action="cart.php">
							<input type="hidden" name="book_id" value="6">
							<input type="hidden" name="book_title" value="Recupera tu mente, Reconquista tu vida">
							<input type="hidden" name="book_price" value="51.00">
							<input type="hidden" name="book_image" value="img_libros/libro6.webp">
							<button type="submit" class="btn btn-primary">
								<img src="img_libros/libro6.webp" class="img-fluid product-thumbnail">
								<h5 class="product-title">Recupera tu mente, Reconquista tu vida</h5>
								<strong class="product-price">$51.00</strong>
							</button>
						</form>
					</div>

					<!-- End Libro 6 -->

					<!-- Start Libro 7 -->

					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<form method="post" action="cart.php">
							<input type="hidden" name="book_id" value="7">
							<input type="hidden" name="book_title" value="Las cadenas de Rey">
							<input type="hidden" name="book_price" value="78.00">
							<input type="hidden" name="book_image" value="img_libros/libro10.webp">
							<button type="submit" class="btn btn-primary">
								<img src="img_libros/libro10.webp" class="img-fluid product-thumbnail">
								<h5 class="product-title">Las cadenas de Rey</h5>
								<strong class="product-price">$78.00</strong>
							</button>
						</form>
					</div>

					<!-- End Libro 7 -->

					<!-- Start Libro 8 -->

					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<form method="post" action="cart.php">
							<input type="hidden" name="book_id" value="8">
							<input type="hidden" name="book_title" value="Romper el circulo">
							<input type="hidden" name="book_price" value="43.00">
							<input type="hidden" name="book_image" value="img_libros/libro8.webp">
							<button type="submit" class="btn btn-primary">
								<img src="img_libros/libro8.webp" class="img-fluid product-thumbnail">
								<h5 class="product-title">Romper el circulo</h5>
								<strong class="product-price">$43.00</strong>
							</button>
						</form>
					</div>

					<!-- End Libro 8 -->

					<!-- Start Libro 9 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<form method="post" action="cart.php">
							<input type="hidden" name="book_id" value="9">
							<input type="hidden" name="book_title" value="Como hacer que te pasen cosas buenas">
							<input type="hidden" name="book_price" value="63.00">
							<input type="hidden" name="book_image" value="img_libros/libro9.webp">
							<button type="submit" class="btn btn-primary">
								<img src="img_libros/libro9.webp" class="img-fluid product-thumbnail">
								<h5 class="product-title">Como hacer que te pasen cosas buenas</h5>
								<strong class="product-price">$63.00</strong>
							</button>
						</form>
					</div>
						<!-- End Libro 9 -->

						<!-- Start Libro 10 -->

					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<form method="post" action="cart.php">
							<input type="hidden" name="book_id" value="10">
							<input type="hidden" name="book_title" value="La Teoria De Kim 2">
							<input type="hidden" name="book_price" value="60.00">
							<input type="hidden" name="book_image" value="img_libros/libro12.webp">
							<button type="submit" class="btn btn-primary">
								<img src="img_libros/libro12.webp" class="img-fluid product-thumbnail">
								<h5 class="product-title">La Teoria De Kim 2</h5>
								<strong class="product-price">$60.00</strong>
							</button>
						</form>
					</div>
						<!-- End Libro 10 -->


							<!-- <span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span> -->
					

					<!-- Start Libro 11-->

					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<form method="post" action="cart.php">
							<input type="hidden" name="book_id" value="11">
							<input type="hidden" name="book_title" value="Yo Amo El Dinero Y EL Dinero Me Ama A Mi">
							<input type="hidden" name="book_price" value="30.00">
							<input type="hidden" name="book_image" value="img_libros/libro11.webp">
							<button type="submit" class="btn btn-primary">
								<img src="img_libros/libro11.webp" class="img-fluid product-thumbnail">
								<h5 class="product-title">Yo Amo El Dinero Y EL Dinero Me Ama A Mi</h5>
								<strong class="product-price">$30.00</strong>
							</button>
						</form>
					</div>
					<!-- End Libro 11 -->

					<!-- Start Libro 12 -->

					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<form method="post" action="cart.php">
							<input type="hidden" name="book_id" value="12">
							<input type="hidden" name="book_title" value="Inadaptados.">
							<input type="hidden" name="book_price" value="50.00">
							<input type="hidden" name="book_image" value="img_libros/libro13.webp">
							<button type="submit" class="btn btn-primary">
								<img src="img_libros/libro13.webp" class="img-fluid product-thumbnail">
								<h5 class="product-title">Inadaptados.</h5>
								<strong class="product-price">$50.00</strong>
							</button>
						</form>
					</div>
					<!-- Start Libro 12 -->

		      	</div>
		    </div>
		</div>


		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				
				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Suscribete al boletin informativo</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Ingresa tu nombre">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Ingresa tu email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">LibHub<span>.</span></a></div>
						<p class="mb-4">Bienvenido a nuestra tienda online de libros, donde podrás encontrar una amplia variedad de títulos para todos los gustos. Ya seas amante de la ficción, el desarrollo personal, la ciencia o cualquier otro género, aquí tenemos el libro perfecto para ti. Disfruta de una experiencia de compra sencilla y rápida, con recomendaciones personalizadas y promociones exclusivas. ¡Descubre tu próxima gran lectura hoy mismo!</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Sobre Nosotros</a></li>
									<li><a href="#">Servicios</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contactanos</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Soporte</a></li>
									<li><a href="#">Chat en vivo</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Trabajos</a></li>
									<li><a href="#">Nuestro equipo</a></li>
									<li><a href="#">Liderazgo</a></li>
									<li><a href="#">Politicas de Privacidad</a></li>
								</ul>
							</div>

							
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
