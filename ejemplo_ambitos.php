<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        /* global $nombre; *//* Esta línea de código no se puede colocar aquí, ya que no va a dar resultado, tiene que colocarse dentro de la función */

        $nombre="Juan";

        /* function dameNombre(){

            $nombre="María";

        } */

        include("datos_otros.php");/* esto es usó para hacer el ejemplo del include, ver la explicación en Evernote referente a la nota php */

        /* Aunque, supongamos que deseamos sobreescribir el valor de una variable, entonces se procederá a hacer lo siguiente */

        /* function dameNombre(){ */
            
            /* Esta es la solución abajo mencionada referenta a el uso de variables de ámbito global */

            /* global $nombre; *//* COn esta línea de código se soluciona el problema antes mencionado *//* Esta línea de código va aquí y no fuera de la función, ya que si lo hacemos va a generar un error, hay que declararla global internamente para poder hacer uso de esta variable *//* Recuerda que la variable que estamos haciendo global es la que se encuentra dentro de la función cuyo ámbito sólo respecta única y exclusivamente a este ámbito, es por ello que sucede esto osea, estamos haciendo global la siguiente línea de código $nombre="El nombre es " . $nombre; no esta línea de código que está fuera de la función "$nombre="Juan";" */

            /* $nombre="María"; */
            /* $nombre="El nombre es " . $nombre; */ /* Esta línea de códdigo va a generar un error es por ello que vamosa realizar las siguientes modificaciones */

            /* La solución radica en cambiar el ámbito de la variable nombre a un contexto global de la siguiente maner: usando esta línea de código: "global $nombre" arriba de la declaración de la variable $nombre que está dentro de la función dameNombre() */

        /* } */

        dameNombre();/* Esto es una concha de mángo, ya que no va a imprimir el nombre de María sino el de Juan, y esto responde al hecho de los ámbitos de las variables en PHP, esto sólo ocurre en php, ya que en javascript y en el lenguaje C no ocurre esto, en esto otros lenguajes se sobreescribe el nombre de las variables */

        echo $nombre;
    ?>
</body>
</html>