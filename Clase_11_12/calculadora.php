<style>
    .resultado{
        color:#F00;
        font-weight: bold;
        font-size: 32px;
    }
</style>

<?php

    function calcular($calculo){

         //SUMA
         if(!strcmp("Suma", $calculo)){
            global $numero1;
            global $numero2;
            echo ("<p class ='resultado'> El resultado es: " . ($numero1 + $numero2) . "</p>");
        }
        //RESTA
        if(!strcmp("Resta", $calculo)){
            global $numero1;
            global $numero2;
            echo ("<p class ='resultado'> El resultado es: " . ($numero1 - $numero2) . "</p>");
        }
        //MULTIPLICACION
        if(!strcmp("Multiplicación", $calculo)){
            global $numero1;
            global $numero2;
            echo ("<p class ='resultado'> El resultado es: " . ($numero1 * $numero2) . "</p>");
        }
        //DIVISION
        if(!strcmp("División", $calculo)){
            global $numero1;
            global $numero2;
            echo ("<p class ='resultado'> El resultado es: " . ($numero1 / $numero2) . "</p>");
        }
        //Modulo
        if(!strcmp("Módulo", $calculo)){
            global $numero1;
            global $numero2;
            echo ("<p class ='resultado'> El resto de la division entre $numero1 y $numero2 es: " . ($numero1 % $numero2) . "</p>");
        }

        if(!strcmp("Incremento", $calculo)){
            global $numero1;
            $numero1++;
            $anterior = $numero1-1;
            echo ("<p class ='resultado'> La variable $anterior se ha incrementado en 1: " . $numero1 . "</p>");
        }

        if(!strcmp("Decremento", $calculo)){
            global $numero1;
            $numero1--;
            $anterior = $numero1+1;
            echo ("<p class ='resultado'> La variable $anterior se ha decrementado en 1: " . $numero1-- . "</p>");
        }
    }
?>