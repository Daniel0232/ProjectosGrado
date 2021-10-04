<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Document</title>
    <header>
        <h1>¡PIEDRA, PAPEL, TIJERAS!</h1>
        <p>Actualice la página para mostrar otra partida</p>
    </header>
</head>
<body>
    <div>
        <a>jugador1 &nbsp;</a><a>jugador2</a>
    </div>
    <?php
        $piedrajugador1 = 1;  $piedrajugador2 = 1;
        $papeljugador1 = 2;   $papeljugador2 = 2;
        $tijerajugador1 = 3;  $tijerajugador2 = 3;
        

        define ('PIEDRA1',  "&#x1F91C;");
        define ('PIEDRA2',  "&#x1F91B;");
        define ('TIJERAS',  "&#x1F596;");
        define ('PAPEL',    "&#x1F91A;");


        $imagenPiedraizquierda=PIEDRA1;
        $imagenPiedraderecha=PIEDRA2;
        $imagenTijera=TIJERAS;
        $imagenPapel=PAPEL;


        $numeroaleatoriojugador1 = random_int(1,3);
        $numeroaleatoriojugador2 = random_int(1,3);

        $victoria;
        

        if($numeroaleatoriojugador1==$piedrajugador1 && $numeroaleatoriojugador2==$piedrajugador2){
        
          //echo " <p style  >".'&nbsp'.$imagenPiedraizquierda." <H1> HOLA </H1>" ;
          /*echo "<a style='font-size: 20px;'>".$imagenPiedraizquierda."</a>";
          echo "<a style='font-size: 20px;'>".$imagenPiedraderecha."</a>";
          echo "<a style='font-size: 20px;'>".'Empate'."</a>";*/
          $victoria = 3;
          mostrarimagen($imagenPiedraizquierda);
          mostrarimagen($imagenPiedraderecha);
          mostrarresultadojugador($victoria);

        }elseif($numeroaleatoriojugador1==$piedrajugador1 && $numeroaleatoriojugador2==$papeljugador2){

            /*echo "<a style='font-size: 20px;'>".$imagenPiedraizquierda."</a>";
            echo "<a style='font-size: 20px;'>".$imagenPapel."</a>";
            echo "<a style='font-size: 20px;'>".'Ha ganado jugador2'."</a>";*/
            $victoria = 2;
            mostrarimagen($imagenPiedraizquierda);
            mostrarimagen($imagenPapel);
            mostrarresultadojugador($victoria);

        }elseif($numeroaleatoriojugador1==$piedrajugador1 && $numeroaleatoriojugador2==$tijerajugador2){

            /*echo "<a style='font-size: 20px;'>".$imagenPiedraizquierda."</a>";
            echo "<a style='font-size: 20px;'>".$imagenTijera."</a>";
            echo "<a style='font-size: 20px;'>".'Ha ganado jugador1'."</a>";*/
            $victoria=1;
            mostrarimagen($imagenPiedraizquierda);
            mostrarimagen($imagenTijera);
            mostrarresultadojugador($victoria);

        }elseif($numeroaleatoriojugador1==$papeljugador1 && $numeroaleatoriojugador2==$piedrajugador2){

            /*echo "<a style='font-size: 20px;'>".$imagenPapel."</a>";
            echo "<a style='font-size: 20px;'>".$imagenPiedraderecha."</a>";
            echo "<a style='font-size: 20px;'>".'Ha ganado jugador1'."</a>";*/
            $victoria=1;
            mostrarimagen($imagenPapel);
            mostrarimagen($imagenPiedraderecha);
            mostrarresultadojugador($victoria);

        }elseif($numeroaleatoriojugador1==$papeljugador1 && $numeroaleatoriojugador2==$papeljugador2){

            /*echo "<a style='font-size: 20px;'>".$imagenPapel."</a>";
            echo "<a style='font-size: 20px;'>".$imagenPapel."</a>";
            echo "<a style='font-size: 20px;'>".'Empate'."</a>";*/
            $victoria=3;
            mostrarimagen($imagenPapel);
            mostrarimagen($imagenPapel);
            mostrarresultadojugador($victoria);
            
        }elseif($numeroaleatoriojugador1==$papeljugador1 && $numeroaleatoriojugador2==$tijerajugador2){

            /*echo "<a style='font-size: 20px;'>".$imagenPapel."</a>";
            echo "<a style='font-size: 20px;'>".$imagenTijera."</a>";
            echo "<a style='font-size: 20px;'>".'Ha ganado jugador2'."</a>";*/
            $victoria=2;
            mostrarimagen($imagenPapel);
            mostrarimagen($imagenTijera);
            mostrarresultadojugador($victoria);

        }elseif($numeroaleatoriojugador1==$tijerajugador1 && $numeroaleatoriojugador2==$tijerajugador2){

            /*echo "<a style='font-size: 20px;'>".$imagenTijera."</a>";
            echo "<a style='font-size: 20px;'>".$imagenTijera."</a>";
            echo "<a style='font-size: 20px;'>".'Empate'."</a>";*/
            $victoria=3;
            mostrarimagen($imagenPiedraizquierda);
            mostrarimagen($imagenPiedraderecha);
            mostrarresultadojugador($victoria);

        }elseif($numeroaleatoriojugador1==$tijerajugador1 && $numeroaleatoriojugador2==$piedrajugador2){

            /*echo "<a style='font-size: 20px;'>".$imagenTijera."</a>";
            echo "<a style='font-size: 20px;'>".$imagenPiedraderecha."</a>";
            echo "<a style='font-size: 20px;'>".'Ha ganado jugador 2'."</a>";*/
            $victoria=2;
            mostrarimagen($imagenTijera);
            mostrarimagen($imagenPiedraderecha);
            mostrarresultadojugador($victoria);

        }elseif($numeroaleatoriojugador1==$tijerajugador1 && $numeroaleatoriojugador2==$papeljugador2){

            /*echo "<a style='font-size: 20px;'>".$imagenTijera."</a>";
            echo "<a style='font-size: 20px;'>".$imagenPiedraderecha."</a>";
            echo "<a style='font-size: 20px;'>".'Ha ganado jugador 1'."</a>";*/
            $victoria=1;
            mostrarimagen($imagenTijera);
            mostrarimagen($imagenPiedraderecha);
            mostrarresultadojugador($victoria);
        }

        function mostrarimagen($imagen){
            echo "<a style='font-size: 60px;'>".$imagen.'&nbsp'."</a>";
        }

        function mostrarresultadojugador($victoria){
            if($victoria==1){
                //echo 'Ha ganado jugador1';
                echo "<p>".'Ha ganado jugador1'."</p>";
            }
            elseif($victoria==2){
                echo "<p>".'Ha ganado jugador2'."</p>";
            }else if($victoria==3){
                echo "<p>".'Empate'."</p>";
            }
        }

    ?>
</body>
</html>