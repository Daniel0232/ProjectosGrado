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
        //$n = random_int(1,5)
        $n=5;
        $n2 =$n-1;
        for($i=0;$i<=$n;$i++){
            for($j = $n2; $j > 0;$j--){
                echo "&nbsp"; 
                echo"4";
            }
            
            $n2--;
            for($k = 1; $k <=2*$i -1;$k++){
                echo "3";
            }

            echo"</br>";
        }
    ?>
</body>
</html>