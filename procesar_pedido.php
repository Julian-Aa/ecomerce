<?php
// Conexión a la base de datos (no incluido en este ejemplo)
// $db = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

// Simulación de procesamiento de pedido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    // Aquí podrías agregar código para procesar el pedido, como actualizar la base de datos con el pedido.
    echo "¡Gracias por tu compra!";
} else {
    echo "Acceso no válido";
}
?>
