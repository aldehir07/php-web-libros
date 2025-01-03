<?php
// clases/Carrito.php
// session_start();

class Carrito {
    public function __construct() {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }

    // Método para agregar un producto al carrito
    public function agregarProducto($producto) {
        foreach ($_SESSION['cart'] as &$item) {
            if ($item->getId() == $producto->getId()) {
                $item->incrementarCantidad($producto->getCantidad());
                return;
            }
        }
        $_SESSION['cart'][] = $producto;
    }

    // Método para eliminar un producto del carrito
    public function eliminarProducto($id) {
        foreach ($_SESSION['cart'] as $index => $item) {
            if ($item->getId() == $id) {
                unset($_SESSION['cart'][$index]);
                $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindexar el arreglo
                return;
            }
        }
    }

    // Método para obtener todos los productos del carrito
    public function obtenerProductos() {
        return $_SESSION['cart'];
    }
}
?>
