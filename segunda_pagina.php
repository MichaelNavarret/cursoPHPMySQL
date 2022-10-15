<!--
    CLASES INVOLUCRADAS:
    - Clase 4
-->

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
        $nombre = "Michael"; //No es lo mismo usar comillas dobles que simples. En este caso si.
        $edad=24;

        print "El nombre del usuario es " . $nombre . "<br>"; /* Para concatenar en PHP se utiliza un "."
                                                        idealmente es recoendado que hayan espacios en blanco antes
                                                        y despues del punto */
        print "El nombre del usuario es $nombre"; /* En caso de usar comilla simple (''), el texto es mostrado de 
                                                     literal. No reconociendo variables. */

        echo "<br> El nombre es " . $nombre . " y tiene " . $edad . " años.";

        //"print" tarda más que "echo" en procesarse. Por lo tanto, casi siempre es recomendable usar "echo"
    ?>

</body>
</html>