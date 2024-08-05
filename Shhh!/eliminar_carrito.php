
<?php 
include 'carrito.php'; 

if (isset($_GET['item'])) {
    $item = $_GET['item']; 
}

header('Location: index.php'); 


?> 

