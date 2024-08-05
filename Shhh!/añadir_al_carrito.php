
<?php
session_start();

// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "libreria";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si el usuario está autenticado (para simplificar, asumimos que el ID de usuario está en $_SESSION)
if (!isset($_SESSION['usuario_id'])) {
    die("Usuario no autenticado.");
}

$usuario_id = $_SESSION['usuario_id'];
$libro_id = $_POST['libro_id'];
$cantidad = $_POST['cantidad'];

// Obtener el precio del libro
$sql = "SELECT precio FROM LIBROS WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $libro_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $precio = $row['precio'];
} else {
    die("Libro no encontrado.");
}

// Calcular el monto total
$monto_total = $cantidad * $precio;

// Insertar en el carrito
$sql = "INSERT INTO CARRITO (usuario_id, libro_id, cantidad, monto_total) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iiid", $usuario_id, $libro_id, $cantidad, $monto_total);

if ($stmt->execute()) {
    echo "Libro agregado al carrito exitosamente.";
} else {
    echo "Error al agregar libro al carrito: " . $stmt->error;
}

// Cerrar conexiones
$stmt->close();
$conn->close();
?>
