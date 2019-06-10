<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trabajo_strings</title>

    <style>
        
        .resaltar{
            color: #F00;
            font-weight: bold;
        }

    </style>

</head>
<body>
    
    <!-- vamos a ver las diferentes formas que tenemos de declarar un string -->

    <?php
        
        echo '<p class= "resaltar">Esto es un ejemplo de frase</p>'; /* Esto es un string, un string es una vil y vulgar cadena de caractéres */ /* Es importante recalcar si dentro usa comillas dobles afuera debe tener comillas simples de la siguiente forma '""' o "''" creo que es así, de todas formas la manera más segura es la siguiente '""' */

        /* Esto no se puede hacer, NO SE PUEDE METER UNA COMILLA DOBLE "" DENTRO DE OTRA COMILLA DOBLE "" */
        /* echo "<p class= "resaltar">Esto es un ejemplo de frase</p>"; */

        /* Ni tampoco ser puede hacer esto, NO SE PUEDE METER UNA COMILLA SIMPLE '' DENTRO DE OTRA COMILLA SIMPLE '' */
        /* echo '<p class= 'resaltar'>Esto es un ejemplo de frase</p>'; */

        /* En todo caso se debería hacer de la siguiente forma */

        /* echo "<p class= 'resaltar'>Esto es un ejemplo de frase</p>"; */

        /* O así */

        /* echo '<p class= "resaltar">Esto es un ejemplo de frase</p>'; */

        /* otra forma de hacer esto es través de la barra invertida \ */

        /* Al colocar la barra invertida, le estamos diciendo al código que estamos haciendo uso de un escape de caracteéres en un string, al usar la barra invertida le estamos diciendo al código que escape el caracter que está delante de él dentro del string, osea que el caracter que está delante de la barra invertida no forma parte del string por lo tanto está escapando ese caracter */
        /* podemos aplicar este mismo ejemplo para la comilla simple */
        echo "<p class= \"resaltar\">Esto es un ejemplo de frase</p>";

        /* Ahora bien vamos a aplicar un nuevo ejemplo */

        $nombre = "Juan";

        echo "Hola $nombre";/* esto es posible sólo en PHP, esto no ocurre en otros lenguajes */

        /* Aunque también podemos hacer uso del concatenador */
        echo "<br>";

        echo "Hola " . $nombre;/* recuerda que en PHP el punto se usa para concatenar */

        /* ojo es importante para el ejemplo anterior no hacer uso de la comillas simples ya que con las comillas simpes se toma literalmente el valor de la variable, un ejemplo */

        echo "<br>";

        echo 'Hola $nombre';/* Aquí se toma es el valor literal de la variable */

        /* en este caso si tendríamos que hacer uso de los concatenadores "." */

        echo "<br>";

        echo 'Hola ' . $nombre;

        /* Ahora vamos a ver el usod e comparadores de string */

        /* tenemos 2 funciones en PHP que se encargan de hacer esto "strcmp" "strcasecmp" estas 2 funciones se encargan de comparar cadenas de caractéres o string */

        /* "strcmp" compara string tomando en cuenta los caseSensitive, osea, que diferencia entre letras mayúsculas y minúsculas de los string comparados, quiere decir que si tengo 2 string, uno "Maria" y el otro "maría" los toma como diferentes */
        /* en cambio "strcasecmp" compara string tomando sin tomar en cuenta los caseSensitive, osea, que no diferencia entre letras mayúsculas y minúsculas de los string comparados, quiere decir que si tengo 2 string, uno "Maria" y el otro "maría" los toma como iguales */

        /* En lo anterior radica la diferencia entre "strcmp" y "strcasecmp" */

        /* Ambas funciones ("strcmp" y "strcasecmp") devuelven un cero "0" si coinciden (osea sean iguales) y devuelven un uno "1" si no coinciden (osea sean diferentes) osea devuelve un valor booleano (true false)*/

        /* A continuaciòn vamos a aplicar un ejemplo de lo anterior */

        $variable1="casa";

        $variable2="CASA";

        $resultado1=strcmp($variable1,$variable2); /* esto devuelve 1 si no son iguales y 0 si son iguales */

        /* un dato curioso "strcmp" quiere decir "string compare" */

        echo "<br><br>";
        echo "Comparación de los string. \"esto devuelve 1 si no son iguales y 0 si son iguales\": El resultado es: \"$resultado1\"";

        /* Ahora bien si comparamos los dos string con la función "strcasecmp" los resultados serían distintos a los de "strcmp", ya que la función "strcasecmp" ve igual a las mayúsculas cómo a las minúsculas, (osea no tiene caseSensitve o lo ignota en todo caso) */

        /* Vamos con el ejemplo */

        $resultado2=strcasecmp($variable1,$variable2);

        echo "<br><br>";
        echo "Comparación de los string. \"esto devuelve 1 si no son iguales y 0 si son iguales\": El resultado es: \"$resultado2\"";
        echo "<br><br>";

        /* ahora bien vamos a aplicar un condicional if */

        if($resultado1){
            echo "con el \"strcmp\" No coinciden";
            echo "<br>";
        }else{
            echo "con el \"strcmp\" Coinciden";
            echo "<br>";
        };

        if($resultado2){
            echo "con el \"strcasecmp\" No coinciden";
            echo "<br>";
        }else{
            echo "con el \"strcasecmp\" Coinciden";
            echo "<br>";
        };

        if(!$resultado1){/* Con el "!" delante de la variable $resultado1 lo que estámos es negando el valo que salga por resultado, osea, que si está "true" lo cambia a "false" y si está "false" lo cambia a "true" */
            echo "con el \"strcmp\" Coinciden";/* ES IMPORTANTE RECORDAR QUE AL COLOCARLE "!" A LA VARIABLE $resultado1 TENEMOS QUE CAMBIAR LO QUE DICEN LOS ECHOS PORQUE YA CAMBIARON SU FORMA DE VER SUS RESULTADOS */
            echo "<br>";
        }else{
            echo "con el \"strcmp\" No coinciden";/* ES IMPORTANTE RECORDAR QUE AL COLOCARLE "!" A LA VARIABLE $resultado1 TENEMOS QUE CAMBIAR LO QUE DICEN LOS ECHOS PORQUE YA CAMBIARON SU FORMA DE VER SUS RESULTADOS */
            echo "<br>";
        };

        if(!$resultado2){/* Con el "!" delante de la variable $resultado2 lo que estámos es negando el valo que salga por resultado, osea, que si está "true" lo cambia a "false" y si está "false" lo cambia a "true" */
            echo "con el \"strcasecmp\" Coinciden";/* ES IMPORTANTE RECORDAR QUE AL COLOCARLE "!" A LA VARIABLE $resultado2 TENEMOS QUE CAMBIAR LO QUE DICEN LOS ECHOS PORQUE YA CAMBIARON SU FORMA DE VER SUS RESULTADOS */
            echo "<br>";
        }else{
            echo "con el \"strcasecmp\" No coinciden";/* ES IMPORTANTE RECORDAR QUE AL COLOCARLE "!" A LA VARIABLE $resultado2 TENEMOS QUE CAMBIAR LO QUE DICEN LOS ECHOS PORQUE YA CAMBIARON SU FORMA DE VER SUS RESULTADOS */
            echo "<br>";
        };

    ?>  

</body>
</html>