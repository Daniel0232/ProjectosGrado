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

        $n1=7;
        $n2=6;
        $n3;

        function elMayor($A,$B,$C){
            
            if($A>$B){
                echo ($C=$A);
            }else{
                echo ($C=$B);
            }
        }
        elMayor($n1,$n2,$n3);
    ?>
</body>
</html>