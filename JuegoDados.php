<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <header>
        <h1>cinco dados</h1>
        <p>Actualice la página para mostrar una nueva tirada</p>
    </header>

</head>
<body>
    <?php

        define ('D1',  " &#9856;");
        define ('D2',  " &#9857;");
        define ('D3',  " &#9858;");
        define ('D4',  " &#9859;");
        define ('D5',  " &#9860;");
        define ('D6',  " &#9861;");

        $dado=[D1,D2,D3,D4,D5,D6];

        function Calcularganador($valor1,$valor2){

            $ganador=0;

            if ( $valor1 == $valor2 ) return $ganador;
    
            switch ($valor1){
                case D1:  $ganador = ( $valor1 < $valor2)?1:2; break;
                case D2: $ganador = ( $valor1 <= PAPEL  )?1:2; break;
                case PAPEL:   $ganador = ( $valor2 == PIEDRA )?1:2; break;
            }
            return $ganador;
        }
    ?>
    
    <table>
        <tr>
            <th>jugador1</th>
        </tr>

        <tr>
            <th>jugador2</th>
        </tr>

        <tr>
            <td>Calcular ganador</td>
        </tr>
    </table>
</body>
</html>