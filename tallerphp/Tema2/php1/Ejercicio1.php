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
        $A; $B;

        function suma(){
            global $A, $B;
            $A=random_int(1,10);
            $B=random_int(1,10);
            echo 'suma: '.($A+$B)."<p/>";
            echo 'resta: '.($A-$B)."<br/>";
            echo 'multiplicacion'.($A*$B)."<br/>";
            echo 'division'.($A/$B)."<br/>";
            echo 'modulo'.($A%$B)."<br/>";
            echo 'potencia'.($A**$B)."<br/>";
        }
        suma();
    ?>
</body>
</html>