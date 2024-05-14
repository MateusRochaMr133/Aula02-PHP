<?php
    $valor = $_POST['resultado1'];

    $total = $valor%2;

    if ($total == 0) {
        echo "O valor é par";
    }
    else {
        echo "O valor é impar";
    }


?>