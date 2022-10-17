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

        $var01 = 8; //Entero "int"
        $var02 = "8"; //String
        $var03 = "Michael"; //Strig

        echo "Comparando $var01 y $var02 con ==";
        //Comparativa de valor
        if($var01 == $var02){
            echo "<br> Son iguales";
        }else{
            echo "<br> No son iguales";
        }

        //Comparativa de valor y tipo variable.
        echo "<br> Comparando $var01 y $var02 con ===";
        if($var01 === $var02){
            echo "<br> Son iguales";
        }else{
            echo "<br> No son iguales";
        }

        echo "<br> -------------------------------------------";

    ?>


</body>
</html>