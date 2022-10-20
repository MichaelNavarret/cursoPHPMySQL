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
        $num1 = rand(0,10); //Genera un número aleatorio entre 0 y 10. Si no posee argumento, será totalmente aleatorio.
        echo ("El número aleatorio es: " . $num1);

        $num2 = pow(5,3); //Potencia. (base, exponente).

        echo("<br> El número es: " . $num2);

        $num3 = 5.2534223;

        echo ("<br> El número $num3 redondeado es: " . round($num3, 2)); //Funcion Round (variable, precisión).

        //PHP tiene un casting implicito.

        $num4 = "5";
        $resulado = (int)$num4; //Casting Explicito.

    ?>
</body>
</html>