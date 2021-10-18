<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $arraynumeros=[];
        $numeromayor = 0;
        

        function mostrar(){
            for ($i=0;$i<20;$i++) {
                $numero = random_int(1,10);
                $arraynumeros[$i]=$numero;
            }
            $arraynumeros2=$arraynumeros;

            foreach ($arraynumeros as $indice => $numero) {
                $numeromayor=$numero;
            }
        }    
        mostrar();
    ?>
</body>
</html>