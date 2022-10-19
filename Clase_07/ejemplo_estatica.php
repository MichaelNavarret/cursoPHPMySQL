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
        function incrementaVariable(){
            static $cont = 0; /*Se ejecutará solo la primera vez que se llame a la función. 
                                Se guardará el valor cada vez.*/
            $cont++;

            echo $cont . "<br>";
        }

        incrementaVariable();
        incrementaVariable();

        incrementaVariable();
        incrementaVariable();
    ?>
</body>
</html>