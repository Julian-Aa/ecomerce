<?php
// Conexión a la base de datos (no incluido en este ejemplo)
// $db = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

// Simulación de datos de productos
$productos = array(
    1 => array('nombre' => 'Producto 1', 'precio' => 10),
    2 => array('nombre' => 'Producto 2', 'precio' => 20),
    3 => array('nombre' => 'Producto 3', 'precio' => 30)
);

// Obtener el ID del producto desde la URL
$id = $_GET['id'];

// Verificar si el producto existe
if (isset($productos[$id])) {
    $producto = $productos[$id];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detalles del Producto</title>
    </head>
    <body>
        <h1><?php echo $producto['nombre']; ?></h1>
        <p>Precio: $<?php echo $producto['precio']; ?></p>
        <form action="procesar_pedido.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Comprar">
        </form>
    </body>
    </html>
    <?php
} else {
    echo "Producto no encontrado";
}
?>
