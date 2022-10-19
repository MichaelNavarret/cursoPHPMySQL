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
        $nombre = "Michael"; //Variable Local
        function dameNombre(){
            global $nombre; //No se puede acceder a una variable Local. Se convierte a variable global;
            $nombre = "El nombre es " . $nombre; 
        }
        dameNombre();
        echo $nombre;   

    ?>
</body>
</html>