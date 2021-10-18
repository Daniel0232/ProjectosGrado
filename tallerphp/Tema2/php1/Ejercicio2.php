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
        $n = random_int(1,5);
        for($i=0;$i<=$n;$i++){
            
            for($A =0;$A<=$i;$A++){
                if($i%2==0){
                    echo '<span style="color: red;">'. $i .'</span>';
                }
                else{
                    echo '<span style="color: blue;">'. $i .'</span>';
                }
            }
            echo"</br>";
        }
    ?>
</body>
</html>