<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uso constantes</title>
</head>
<body>
    
    <?php
        define("AUTOR", "Juan", true);/* el primer parámetro es el nombre que va a tener la constante y el segundo valos de la constante en nuestro caso es un string es por ello que va entre comillas dobles */ /* el valor booleano true lo que nos dice es que permite no tiene case sensitive */

        echo AUTOR;/* de esta forma se imprime el valor de las constantes */

        echo "<br><br>";

        echo "El autor es: AUTOR";/* de esta forma no va a tomar el valor de la constante */

        echo "<br><br>";

        echo "El autor es: " . AUTOR;/* para que pueda imprimir el valor hay que aplicar la concatenación del punto "." */

        /* el nombre de la constante debe ser escrito en mayúscula no en minúscula porque si lo colocamos así no va a agarrar */

        echo "<br><br>";

        echo "El autor es: " . autor;/* Así no puede la única forma de que sí lo permíta es colocandole un 3er paramétro al define booleano true de la siguiente forma que se muestra arriba */ /* ya colocado el 3er parámetro booleano true, si lo va a tomar */ /* Recuerda que si se le quita el 3er parámetro true al define nos va a dar un warning php por pantalla */

        /* AUTOR = Maria; *//* Cualquier intento que apliquemos con la finalidad de redefinir el valor de la constante nos va a dar un error */

        /* define("AUTOR", "Maria"); */ /* Cualquier intento que apliquemos con la finalidad de redefinir el valor de la constante nos va a dar un error, es por ello que se llaman constantes, no cambian */ /* Recordar quitar el true de lo anterior ya que si no lo hacemos no nos va a dar el error de que la constante AUTOR, ya se encuentra definida */

        /* está en la página oficial de php.net que es dónde está toda la documentación de php y tambien posee tutoriales en español


        las constantes mágicas en php comenzan con 2 guiones bajos y terminan con 2 guiones bajos también.
        
        
        un ejemplo de una constante mágica sería "__LINE__" */

        /* Esta constante mágica sirve para saber la linea de código del archivo dónde se ejecute */

        echo "<br><br>";

        echo "La linea de esta instrucción es: " . __LINE__;

        echo "<br><br>";

        /* esta constante mágica nos dice la ruta de nuestro archivo */

        echo "Estamos trabajando con este fichero: " . __FILE__;
    ?>

</body>
</html>