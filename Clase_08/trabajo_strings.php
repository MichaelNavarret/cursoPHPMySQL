<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .resaltar{
            color:#F00;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <?php
        echo "<p class = 'resaltar' > Esto es un ejemplo de frase </p>"; /* Las comillas internas deben ser diferentes
                                                                            a las comillas padres. */
        echo "<p class = \"resaltar\" > Esto es un ejemplo de frase </p>"; //Otra forma de utilizar las comillas.
    ?>


    <!--    Comparación de Strings           -->
    <?php
        $variable1="CASA";
        $variable2="CASA";

        //strcmp es CASE SENSITIVE. strcasecmp no es CASE SENSITIVE.

        $resultado = strcmp($variable1, $variable2); 
        /* 
        Devuelve 1 (True) si NO son iguales y 0 (False) SI son iguales.
        Básicamente strcmp puede interpretarse como si preguntara ¿Son distintos? 1 -> Si, 0 -> No.
        */
        if ($resultado){
            echo "El resultado es $resultado (TRUE) <br> "; //Si es 0, no coinciden.
            echo "No coinciden";
        }else{
            echo "El resultado es $resultado (FALSE) <br> "; //Si es 1, coinciden.
            echo "Coinciden";
        }
    ?>
</body>
</html>