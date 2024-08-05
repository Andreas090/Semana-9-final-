
<?php 
session_start(); 
if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = array(); 
}

function añadirCarrito($item, $precio) {
    array_push($_SESSION["carrito"], array("item"=> $item,"precio"=> $precio));
} 

function removerCarrito($item) {
    foreach ($_SESSION["carrito"] as $key => $value) {
        if ($value["item"] == $item) {
            unset($_SESSION["carrito"][$key]); 
        }
    }
}

function totalCarrito() {
    $total = 0; 
    foreach ($_SESSION["carrito"] as $item) {
        $total += $item["precio"];
    }
    return $total; 
}

?> 