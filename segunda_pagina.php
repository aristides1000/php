<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Segunda Página</title>
</head>
<body>
    <?php
    /* Las variables en php no pueden comenzar con valores numéricos, por ejemplo esto $1nombre no se puede, pero $nombre1 si se puede, no se pueden colocar caracteres especiales, no se le pueden colocar espacios en blanco*/
    /* $nombre; */ /* Esto se puede hacer en php, aquí estoy iniciando una variable y no le estoy asignando nada, pero no es lo que se hace habitualmente, lo habitual es de una vez colocarle el valor de la variable */
    $nombre = "Juan";/* por lo general las lineas de código siempre terminan con ";" */ /* si el string nombre no lo encerramos entre comillas el servidor nos va a arrojar un error */
    /* los tipos de datos string en php siempre van entre comillas */
    /* Es importante tener en cuenta que no es lo mismo encerrar entre comillas dobles "Juan" los string que hacerlo con comillas simples 'Juan', más adelante en el curso sabremos cuál es la diferencia que radica entre estos dos caracteres diferentes y su interpretación por parte del lenguaje PHP */
    /* En php no hace falata colocar el tipo de dato que vamos a procesar, lo único que debemos hacer es colocarlo y ya, no se parece en nada a Java o a C# donde tenemos que decir de que tipo de variable vamos a trabajar */
    $edad = 18;/* los datos numéricos no van entre comillas se indican y ya está */
    /* Ahora, si deseamos ver lo que está almacenado dentro de estas dos variables lo que debemos hacer es lo siguiente */
    /* print $nombre; */
    print "El nombre del usuario es " . $nombre . "<br>"; /* Si deseamos concatenar variables en php debemos hacer uso del "." y es conveniente que delante y detras del punto haya un espacio en blanco*/
    /* ESte código de arriba tambien lo podemos colocar así */
    print "El nombre del usuario es $nombre <br>";/* osea que para escribir las variables no hace falta que le coloquemos los puntos concatenados */
    /* Ahora bien, si en lugar de usar comillas dobles "" le coloco comillas simples, el toma el valor literal de lo que estamos escribiendo y no el valor subjetivo de lo escrito, por ejemplo: si escribimos print 'El nombre del usuario es $nombre'; va a escribir por pantalla El nombre del usuario es $nombre */
    print 'El nombre del usuario es $nombre <br>';
    /* la palabra reservada "print" y la palabra reservada "echo" nos imprimen en pantalla */
    echo $nombre . "<br>";/* echo funciona con la misma sintaxis que print para muestra un ejemplo */
    echo "El nombre es " . $nombre . "<br>";
    /* Además de ello podemos concatenar varias variables como por ejemplo */
    echo "El nombre es " . $nombre . "y su edad es ". $edad ." años.<br>";
    /* La diferencia entre echo y print es la siguiente */
    echo $nombre,$edad;/* esto que se acaba de ver no se puede hacer con print */
    /* print $nombre,$edad; */ /* print no permite esto y da como resultado un error */
    /* Además de ello print es una función que siempre devuelve el valor 1 y esto la verdad es que posee poca utilidad pero igual se tiene en cuenta por si acaso */
    /* Print es una función echo es una expreción */

    /* Print toma mayor tiempo para imprimir en patalla ya que devuelve el valor 1 ya que posee más procesos internos */
    /* y es por lo anterior que en el código php por lo general siempre vamos a encontrar más echo que print, ya que su puesta en ejecución es mucho más rápida */
    ?>
</body>
</html>