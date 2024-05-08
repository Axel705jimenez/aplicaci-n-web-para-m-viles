<?php
// Datos de conexión a la base de datos
$servername = "localhost";  // Nombre del servidor
$username = "root";      // Nombre de usuario de la base de datos
$password = "";   // Contraseña del usuario (en este caso no tiene contraseña)
$database = "tienda"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa"; // Mensaje de conexión exitosa

// Cerrar la conexión
$conn->close();
?>
