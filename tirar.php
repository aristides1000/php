<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tirar</title>
</head>
<body>
    <?php
        $variable1 = 8;
        /* $variable1 = '8'; *//* Esto se hizo para hacer el ejemplo del operador de comparación "===" */ /* Cabe destacar que comparando el valor de las variables encerradas en comillas simples '' con los de comillas dobles "" nos percatamos que los toma del mismo tipo, osea los toma iguales  */

        $variable2 = "8";

        $variable3 = "Juan";

        if($variable1 == $variable2){ /* Con el if comparamos las 2 variables */ /* el operador de comparación "==" es un comparador debil, quiere decir que él no toma en cuenta si son del mismo tipo */
            echo "Son iguales";
        }else{
            echo "No son iguales";
        }
        
        echo "<br><br>";

        if($variable1 == $variable3){
            echo "Son iguales";
        }else{
            echo "No son iguales";
        };

        echo "<br><br>";

        if($variable1 === $variable2){/* Con el if comparamos las 2 variables */ /* el operador de comparación "===" es un comparador fuerte, quiere decir que él SI toma en cuenta si son del mismo tipo y lo toma en cuenta este dato para dar un resultado */
            echo "Son iguales";
        }else{
            echo "No son iguales";
        }
        
        echo "<br><br>";

        if($variable1 != $variable3){
            echo "Son diferentes";
        }else{
            echo "No son diferentes";
        }

        /* Lo mismo lo podemos aplicar para el resto de operadores de comparación */
    ?>
</body>
</html>