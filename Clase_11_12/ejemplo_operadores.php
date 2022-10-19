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
        if(isset($_POST["button"])){
            $numero1 = $_POST["num1"];
            $numero2 = $_POST["num2"];
            $operacion = $_POST["operacion"];
            //SUMA
            if(!strcmp("Suma", $operacion)){
                echo ("El resultado es: " . ($numero1 + $numero2));
            }
            //RESTA
            if(!strcmp("Resta", $operacion)){
                echo ("El resultado es: " . ($numero1 - $numero2));
            }
            //MULTIPLICACION
            if(!strcmp("Multiplicación", $operacion)){
                echo ("El resultado es: " . ($numero1 * $numero2));
            }
            //DIVISION
            if(!strcmp("División", $operacion)){
                echo ("El resultado es: " . ($numero1 / $numero2));
            }
            //Modulo
            if(!strcmp("Módulo", $operacion)){
                echo ("El resultado es: " . ($numero1 % $numero2));
            }
        }
    
    ?>


    <p>&nbsp;</p>
    <form name="form1" method="post" action="">
        <p>
            <label for="num1"></label>
            <input type="text" name = "num1" id ="num1">

            <label for="num2"></label>
            <input type="text" name ="num2" id = "num2">

            <label for="operacion"></label>
            <select name="operacion" id="operacion">
                <option >Suma</option>
                <option >Resta</option>
                <option >Multiplicación</option>
                <option >División</option>
                <option >Módulo</option>
            </select>
        </p>
        <p>
            <input type="submit" name="button" id ="button" value="Enviar" onClick="prueba">
        </p>
    </form>
</body>
</html>