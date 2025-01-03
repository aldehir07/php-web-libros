<?php
// clases/Producto.php

class Producto {
    private $id;
    private $nombre;
    private $cantidad;
    private $precio;
    private $imagen;

    public function __construct($id, $nombre, $cantidad, $precio, $imagen) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this->imagen = $imagen;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getImagen() { // Getter para la imagen
        return $this->imagen;
    }

    // Setters
    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function incrementarCantidad($cantidad = 1) {
        $this->cantidad += $cantidad;
    }
}
?>

