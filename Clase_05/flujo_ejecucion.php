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
        
        include ("proporciona_datos.php"); /*"include" funciona para llamar a un archivo externo que contenga el
                                             codigo.
                                            
                                             Además de "include", tambien se puede usar "require". Ambos funcionan 
                                             para el mismo objetivo, pero la diferencia es que si el archivo no 
                                             existiese con "include" el programa seguiría de igual manera, mientras que
                                             "require" necesita que el archivo exista, por lo que el programa
                                             se pararía.
                                            */


        //condicionales, bucles y funciones alteran el flujo de ejecucion normal de arriba hacia abajo.
        echo "Este es el primer mensaje <br> ";
        dameDatos();
        echo "Este el segundo mensaje <br>";
    ?>

</body>
</html>