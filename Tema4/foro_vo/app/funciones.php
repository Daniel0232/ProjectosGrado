<?php
function usuarioOk($usuario, $contraseña) :bool {
   
   if (strlen($usuario)>=8 && (strrev($usuario)==$contraseña)){
      return ($usuario); 
   }else  echo ('el usuario tiene menos de 8 carácteres o la contraseña es erronea');return (false);
}

function numeropalabras($comen){
    $palabras=str_word_count($comen);
    return $palabras;
}  

function letraMasrepetida ($cadena){
   $vecesTotalMax = 0;
   $letra = 'a'; 
   $tamaño = strlen($cadena);
   for ($i=0; $i<$tamaño; $i++ ) {
       $veces = 1;
       $letrai = $cadena[$i];

       for ($j=$i+1; $j<$tamaño; $j++ ){
           if ( $letrai == $cadena[$j]){
               $veces++;
           }
       }
       if ( $veces > $vecesTotalMax){
               $letra = $letrai;
               $vecesTotalMax = $veces;
       }
     }
   return $letra;  
}

function palabraMasrepetida ($cadena){
   
   $palabras = str_word_count($cadena,1);
   $palabrasveces = array_count_values($palabras);
   asort($palabrasveces);
   return array_key_last($palabrasveces); 
}
