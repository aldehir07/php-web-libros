<?php
// session_start();
// include 'clases/Producto.php';
// include 'clases/Carrito.php'; // Asegúrate de incluir la clase Carrito para manejar el carrito correctamente

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     echo "ID recibido para eliminar: " . $id . "<br>";

//     // Verifica si el carrito existe y no está vacío
//     if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
//         // Buscar el índice del producto en el carrito
//         foreach ($_SESSION['cart'] as $index => $item) {
//             // Asegurarse de que $item sea un array y contenga un ID
//             if (is_array($item) && isset($item['id']) && $item['id'] == $id) {
//                 echo "Eliminando producto con ID: " . $id . "<br>";
//                 unset($_SESSION['cart'][$index]);
//                 $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindexar el arreglo
//                 break; // Salir del bucle una vez encontrado
//             }
//         }
//     } else {
//         echo "El carrito está vacío o no existe.<br>";
//     }
// }

// // Redireccionar de nuevo a cart.php
// header("Location: cart.php");
// exit();

session_start();
include 'clases/Carrito.php';

// Verificar si se ha recibido el ID del producto a eliminar
if (isset($_GET['id'])) {
    $carrito = new Carrito(); // Instanciar el carrito
    $id = $_GET['id']; // Obtener el ID del producto desde la URL

    $carrito->eliminarProducto($id); // Llamar al método de la clase para eliminar el producto
}

// Redireccionar de nuevo a cart.php después de eliminar
header("Location: cart.php");
exit();
?>




