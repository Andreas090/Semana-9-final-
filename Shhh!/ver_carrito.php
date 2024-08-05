
<?php 
include 'carrito.php'; 
if (empty($_SESSION['carrito'])) {
  echo'<p>Tu carrito esta vacio.</P>'; 
}else {
  echo"<table class='table'</p>"; 
  echo "<thead><tr><th>Producto</th><th>Precio</th><th>Acciones</th></tr></thead><tbody>";
  
  foreach ($_SESSION['carrito'] as $item) {
    echo "<tr>";
        echo "<td>" . $item['item'] . "</td>";
        echo "<td>" . $item['precio'] . "</td>";
        echo "<td><a href='eliminar_carrito.php?item=" . $item['item'] . "' class='btn btn-danger'>Eliminar</a></td>";
        echo "</tr>";
  }
  echo "</tbody></table>";
  echo "<p>Total: $" . totalCarrito() . "</p>";

}




?> 

