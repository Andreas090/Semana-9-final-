
<?php
// Verificar que el formulario haya sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que las variables existan en el array $_POST
    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['contraseña'])) {
        
        $servername = "localhost";
        $username = "root";
        $password = "12345678";
        $dbname = "libreria";

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Recibir datos del formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
        
        // Usar una declaración preparada para prevenir inyección SQL
        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, contraseña) VALUES (?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $apellido, $contraseña);

        // Ejecutar la consulta y verificar si fue exitosa
        if ($stmt->execute()) {
            echo "Registro exitoso";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Cerrar la declaración y la conexión
        $stmt->close();
        $conn->close();
    } else {
        echo "Faltan datos en el formulario.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
