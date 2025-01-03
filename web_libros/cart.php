<?php
// cart.php

include 'clases/Producto.php';
include 'clases/Carrito.php';

// Inicializar el carrito
$carrito = new Carrito();

// Agregar un producto al carrito si se envía una solicitud POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['book_id'];
    $nombre = $_POST['book_title'];
    $precio = $_POST['book_price'];
	$imagen = $_POST['book_image']; // Obtener la imagen del formulario
    $cantidad = 1; // Puedes cambiar esto según necesites

    // Crear un objeto Producto
    $producto = new Producto($id, $nombre, $cantidad, $precio, $imagen);

    // Agregar el producto al carrito
    $carrito->agregarProducto($producto);
}

// Obtener los productos del carrito
$productos = $carrito->obtenerProductos();
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

		<!-- Start Header/Navigation -->
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
						<li><a class="nav-link" href="shop.php">Comprar</a></li>
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
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Carrito</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section before-footer-section">
            <div class="container">
				<div class="row mb-5">
					<form class="col-md-12" method="post">
						<div class="site-blocks-table">
							<table class="table">
								<thead>
									<tr>
										<th class="product-thumbnail">Imagen</th>
										<th class="product-name">Libro</th>
										<th class="product-price">Precio</th>
										<th class="product-quantity">Cantidad</th>
										<th class="product-total">Total</th>
										<th class="product-remove">Eliminar</th>
									</tr>
								</thead>
								<tbody>

								<?php print_r($_SESSION['cart']); // Para depuración ?>

									<?php if (count($productos) > 0): ?>
										<?php foreach ($productos as $item): ?>
											<tr>
												<td class="product-thumbnail">
													<img src="<?php echo $item->getImagen(); ?>" alt="Imagen" class="img-fluid">
												</td>
												<td class="product-name">
													<h2 class="h5 text-black"><?php echo $item->getNombre(); ?></h2>
												</td>
												<td>$<?php echo number_format($item->getPrecio(), 2); ?></td>
												<td>
													<div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
														<input type="text" class="form-control text-center quantity-amount" value="<?php echo $item->getCantidad(); ?>" readonly>
													</div>
												</td>
												<td>$<?php echo number_format($item->getPrecio() * $item->getCantidad(), 2); ?></td>
												<td>
													<a href="remove_item.php?id=<?php echo $item->getId(); ?>" class="btn btn-black btn-sm">X</a>

												</td>
											</tr>
										<?php endforeach; ?>
									<?php else: ?>
										<tr>
											<td colspan="6" class="text-center">El carrito está vacío.</td>
										</tr>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
					</form>
				</div>
        
              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <button class="btn btn-black btn-sm btn-block">Actualizar Carrito</button>
                    </div>
                    <div class="col-md-6">
                      <button class="btn btn-outline-black btn-sm btn-block">Seguir Comprando</button>
                    </div>
                  </div>
                  
                </div>
				<?php
					// Calcula el subtotal de todos los libros en el carrito
					$total = 0;
					if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
						foreach ($_SESSION['cart'] as $item) {
							$total += $item->getPrecio() * $item->getCantidad();
						}
					}
				?>
                <div class="col-md-6 pl-5"> 
					<div class="row justify-content-end">
						<div class="col-md-7">
							<div class="row">
								<div class="col-md-12 text-right border-bottom mb-5">
									<h3 class="text-black h4 text-uppercase">Precio Total</h3>
								</div>
							</div>
							<!-- <div class="row mb-3">
								<div class="col-md-6">
									<span class="text-black">Subtotal</span>
								</div>
								<div class="col-md-6 text-right">
									
									<strong class="text-black">$<?php echo number_format($total, 2); ?></strong>
								</div>
							</div> -->
							<div class="row mb-5">
								<div class="col-md-6">
									<span class="text-black">Total</span>
								</div>
								<div class="col-md-6 text-right">
									<!-- El total será el mismo que el subtotal en este caso, pero podrías agregar otros cargos como impuestos o envíos -->
									<strong class="text-black">$<?php echo number_format($total, 2); ?></strong>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Realizar Pago</button>
								</div>
							</div>
						</div>
					</div>
				</div>
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
