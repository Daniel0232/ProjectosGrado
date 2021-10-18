<?php 
        $A=random_int(1,10);
        $B=random_int(1,10);

        function suma($A,$B){
            
            echo 'suma: '.($A+$B)."<p/>";
        }
        suma($A,$B);

        function resta($A,$B){
            echo 'resta: '.($A-$B)."<br/>";
        }
        resta($A,$B);

        function multiplicacion($A,$B){
            echo 'multiplicacion'.($A*$B)."<br/>";
        }
        multiplicacion($A,$B);

        function division($A,$B){
            echo 'division'.($A/$B)."<br/>";
        }
        division($A,$B);

        function modulo($A,$B){
            echo 'modulo'.($A%$B)."<br/>";
        }
        modulo($A,$B);

        function potencia($N){
            for ($i=0;$i<=$N;$i++){
                $N=$N*$N;
                echo 'potencia'.($N)."<br/>";
            }
        }

        potencia($A);
        potencia($B);
    ?>