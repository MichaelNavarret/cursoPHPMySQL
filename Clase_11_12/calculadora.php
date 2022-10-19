<style>
    .resultado{
        color:#F00;
        font-weight: bold;
        font-size: 32px;
    }
</style>

<?php
    if(isset($_POST["button"])){
        $numero1 = $_POST["num1"];
        $numero2 = $_POST["num2"];
        $operacion = $_POST["operacion"];

        calcular($operacion);
    }
    
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
    }
?>