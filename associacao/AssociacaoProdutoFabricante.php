<?php
    require_once 'Fabricante.php';
    require_once 'Produto.php';

    $fabricante = new Fabricante("Nike", "989488475000192");
    $produto = new Produto("Tenis", 299.90);

    $produto->setFabricante($fabricante);

    echo "<pre>";
    var_dump($fabricante);
    var_dump($produto);
    echo "</pre>";

?>