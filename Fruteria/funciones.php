<?php

    function anotar(){
        
        $_SESSION['pedidos'][$_POST['fruta']] = $_SESSION['pedidos'][$_POST['fruta']]+$_POST['cantidad'];

        echo "Este es su pedido :";
        echo "<table style='border: 1px solid black;'>";
        foreach ( $_SESSION['pedidos'] as $key => $value) {
        echo "<tr><td><b>".$key."</b><td></td><td>".$value."</td></tr>";
        }
        echo "</table>";
    }


?>