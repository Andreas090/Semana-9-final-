
<?php
session_start();
include 'config.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT CARRITO.ID, LIBROS.título, CARRITO.cantidad, LIBROS.precio, CARRITO.monto_total FROM CARRITO JOIN LIBROS ON CARRITO.libro_id = LIBROS.ID WHERE CARRITO.user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        echo "<div class='form-group'>";
        echo "<label for='cantidad_{$row['ID']}'>{$row['título']} (Precio: {$row['precio']})</label>";
        echo "<input type='number' class='form-control' id='cantidad_{$row['ID']}' name='cantidad[{$row['ID']}]' value='{$row['cantidad']}'>";
        echo "<input type='hidden' name='precio[{$row['ID']}]' value='{$row['precio']}'>";
        echo "<button type='submit' class='btn btn-danger' name='delete' value='{$row['ID']}'>Eliminar</button>";
        echo "</div>";
    }

    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete'])) {
        $id = $_POST['delete'];
        $sql = "DELETE FROM CARRITO WHERE ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    } else {
        foreach ($_POST['cantidad'] as $id => $cantidad) {
            $precio = $_POST['precio'][$id];
            $monto_total = $cantidad * $precio;
            $sql = "UPDATE CARRITO SET cantidad = ?, monto_total = ? WHERE ID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("idi", $cantidad, $monto_total, $id);
            $stmt->execute();
            $stmt->close();
        }
    }
    header("Location: carrito.php");
}

$conn->close();
?>
