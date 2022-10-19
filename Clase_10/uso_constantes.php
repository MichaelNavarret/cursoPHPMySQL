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
        define("AUTOR", "Michael", true); //Constantes "define(NombreConstante (Mayus), constante)"

        echo ("El autor es:  " . AUTOR);

        //Constantes predefinidas
        echo "<br> La linea de estra instrucción es " . __LINE__;
        echo "<br> La direccion del fichero es " . __FILE__;
    ?>    


</body>
</html>