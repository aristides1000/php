<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flujo Ejecución</title>
</head>
<body>
    <!-- Cabe acotar que dentro de una página php con formato html puedo tener varios bloque de php, por ejemplo -->
    <?php
    /* Lo anterior quiere decir que en un bloque puedo tener la función y en el otro bloque tendré el llamado a ejecución de esa función */
    /* cabe destacar que esta característica no cambia en nada el código de ejecución lo unico que hemos hecho es ubicar el código en otra ubicación */
    /* Tambien nos podemos aprovechar de códigos externos que hayan creado otros programadores o nosotros mismos dentro de nuestro proyecto, un ejemplo de estos casos yo lo ejecuté en mi Proyecto UNEWEB */
        /* function dameDatos(){ */
        
            //una función no ejecuta el código de su interior hasta que esta función no sea llamada
            
        /*     echo "Este es el mensaje del interior de la función <br>";
        }; */
    ?>
    <?php
        /* dameDatos(); *//* Aquí cambiamos el flujo de ejecución al principio */
        /* Cabe acotar que lo ejecuta de igual forma */

        echo "Este es el primer mensaje <br>";

        //así se escriben las funciones en PHP
        /* function dameDatos(){
        
            //una función no ejecuta el código de su interior hasta que esta función no sea llamada
            
            echo "Este es el mensaje del interior de la función <br>";
        }; */
        //cómo llamamos a una función en php
        //lo vamos a ver a continuación
        //cabe acotar que el llamado de funciones en php es el mismo que en javascript
        //puedo llamar a una función antes de declararla como después de declararla lo recomendable siempre en llamarla luego de declararla
        //Así llamamos a una función
        /* dameDatos(); *//* Importante el ";" al final */
        //así llamamos a las funciones en php

        //Cabe destacar que donde llamemos a la función es donde se va a ejecutar el flujo de la función

        //Aquí vamos a ver el ejemplo de importación de códigode otro archivo

        /* include ("proporciona_datos.php"); *//* Con este include lo que logramos es traernos un código esterno ubicado en otro archivode nuestro proyecto */

        /* Lo anteriormente colocado tambien se puede hacer con la palabra reservada require */
        require ("proporciona_datos.php");

        /* La diferencia entre el include y el require es que (si cometemos algún error) con el include van a aparecer algunos errores, pero sin embargo va a seguir con la ejecución del código que esté debajo del include, en cambio con el requiere, automáticamente de descubierto el error va a frenar el código de ejecución en seco de lo que esté debajo y no permitirá el desarrollo de más código */
        /* Lo anterior representa la principal diferencia entre el include y el require */

        echo "Esto es el segundo mensaje <br>";
        
        /* dameDatos(); *//* con esta acción colocamo el flujo de ejecución del código al final */

        /* La principal ventaja de la utilización de funciones es la reutilización de código */

        /* yo puedo llamar una función varias veces, por ejemplo: */
        dameDatos();
        /* dameDatos();
        dameDatos();
        dameDatos(); */
    ?>
</body>
</html>