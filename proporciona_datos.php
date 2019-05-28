<!-- Este ejemplo es para saber cómo podemos importar código de un archivo a otro -->
<?php
    /* Lo anterior quiere decir que en un bloque puedo tener la función y en el otro bloque tendré el llamado a ejecución de esa función */
    /* cabe destacar que esta característica no cambia en nada el código de ejecución lo unico que hemos hecho es ubicar el código en otra ubicación */
    /* Tambien nos podemos aprovechar de códigos externos que hayan creado otros programadores o nosotros mismos dentro de nuestro proyecto, un ejemplo de estos casos yo lo ejecuté en mi Proyecto UNEWEB */
    function dameDatos(){
    
        //una función no ejecuta el código de su interior hasta que esta función no sea llamada
        
        echo "Este es el mensaje del interior de la función <br>";
    };
?>