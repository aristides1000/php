<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo estática</title>
</head>
<body>
    <?php
        
        function incrementaVariable(){
            /* El objetivo de esta variable es incrementar el valor de una variable */
            /* esto se verá a continuación */
            /* $contador = 0; */ /* para que esta función logre incrementar el valor de $contador tenemos que hacer lo siguiente, ya que así cómo está colocada la variable $contador jamás la vamos a incrementar  */
            /* para poder incrementar la variable $contador debemos hacerla estática de la siguiente forma */
            static $contador = 0;/* haciendo estática la variable lo que conseguimos es que sólo se ejecute una vez el setteo de la variable y que luego, se conserve el valor del mismo al finalizar la función con el cerrado de llave, cosa que no sucedía si no colocabamos el valor de la variable de forma estática */

            $contador++; /* esta nomenclatura es muy parecida al lenguaje java o javascript */

            echo $contador . "<br>"; /* para concatenar en php hacemos uso del "." */
        };

        /* para hacer uso de una función lo único que hacemos en escribir su nombre y así ejecutamos lo que se encuentra dentro de ella de l siguiente forma */

        incrementaVariable();
        /* al colocar la ejecución de la función varias veces lo que vamos es a imprimir varias veces 1 */
        incrementaVariable();incrementaVariable();incrementaVariable();
        /* Puede darse el caso de que queramos incrementar el valor de la variable */
        /* Cabe acotar que cada vez que llamamos a la función, esta settea el valor de la variable a 0 mediante esta instrución inmersa en la función que en este caso sería la siguiente "$contador = 0;" */

        /* Otro aspecto importante a recalcar es que luego de ejecutar una función el valor de las variables que contenga esta función automáticamente se destruye es por ello que tambien no podemos incrementar el valor de esa función mediante estas líneas de código antes presentadas */

        /* para que el valor aumente en la función debemos declarar a la variable "$contador" estática de la siguiente forma "static $contador = 0" */
    ?>
</body>
</html>