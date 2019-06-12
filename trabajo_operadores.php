<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabajo Operadores</title>
    <style>

        h1{
            text-align: center;
        }

        table{
            background-color: #FFC;
            padding: 5px;
            border: #666 5px solid;
        }

        .no_validado{
            font_size: 18px;
            color: #F00;
            font-weight: bold;
        }

        .validado{
            font-size: 18px;
            color:#0C3;
            font-weight: bold;
        }

    </style>
</head>

<body>
    <h1>USANDO OPERADORES DE COMPARACIÓN</h1>

    <form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario"><!-- Laidentificación de los formularios se hace a través de sus atributos id --> <!-- En el atributo action es donde vamos a colocar el nombre del archivo que se va a validar, en mi caso es "validacion.php" -->
        <table width="15%" align="center">
        <tr>
            <td>Nombre:</td>
            <td><label for="nombre_usuario"></label><input type="text" name="nombre_usuario" id="nombre_usuario"></td>
        </tr>
        <tr>
            <td>Edad:</td>
            <td><label for="edad_usuario"></label><input type="text" name="edad_usuario" id="edad_usuario"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
        </tr>
        </table>
    </form>

    <?php
        
        /* vamos a ver cosas que no se han visto hasta entonces, como es el hecho de capturar el la inoformación en un formulario html para poder procesarlo por PHP */

        /* vamos a hacer uso también de variables super globales tambien vamos a hacer uso de la función isset */

        /* if(isset($_POST["enviando"])){ *//* es una función predefinida de PHP que tiene múltiples usos, unos de los usos que se le puede dar a esta función es comprobar si se ha pulsado el botón de enviar o no y esto se hace de la forma que se encuentra aquí arriba */ /* La función isset tiene sus paréntesis y sus argumentos  uno de sus argumento es $_POST y se le puede colocar seguido de un id encerrado en corchetes, como por ejemplo ["enviando"] en este caso que el id del botón enviar */
            /* Si pulsamos el botón con el id="enviando" automáticamente el flujo del programa accederá al código que se encuentr dentro del if */
            
            /* $usuario = $_POST["nombre_usuario"]; */ /* $_POST es en PHP una variable Super Global las variables superglobales tienen un ámbito que aún en el curso no hemos visto, las variables superglobales en realidad son arrays, osea arreglos */ /* Osea que aquí lo que estamos es construyendo un array */ /* con esto hemos almacenado una variable PHP a la cual hemos denominado $usuario lo que el usuario haya introducido en el cuadro de texto con el id="nombre_usuario" */

            /* $edad = $_POST["edad_usuario"]; */

            /* ya con la creación de las 2 variables $usuario y $Edad tenemos almacenada las información contenida en los formularios siempre y cuando se haya cumplido el if y se haya pulsado el botón Enviar */

            /* ahora vamos a decirle al código que deje pasar al usuario si se llama "juan" a través de un if y el uso de un operador de comparación */

            /* if($usuario=="Juan"){ */ /* Ahora bien, si tambien queremos tomar en cuenta la variable edad tenemos que escribir lo siguiente */
            /* if($usuario == "Juan" && $edad >= 18){ */ /* El "&&" es el operador lógico de "and" o "y" */ /* El operador lógico "&&" hace que para poder acceder al if ambas condiciones se tiene que dar, osea, la condición $usuario == "Juan" y la condición $edad >= 18, si alguna de estas dos condiciones no se cumplen, automáticamente el sistema no nos permitirá acceder */
                /* echo "Puedes entrar"; */
                /* echo '<h1 class="validado">Puedes entrar</h1>'; *//* Así hacemos uso del css y html5 en php */
            /* }else{ */
                /* echo "No puedes entrar"; */
                /* echo '<h1 class="no_validado">' . 'No puedes entrar' . '</h1>'; *//* Así hacemos uso del css y html5 en php */
            /* }; */
            /* ahora bien, cómo podemos destacar un poco más estos mensajes, bueno haciendo uso de etiquetas html y clases css como se ve arriba */
        /* }; */

    ?>

<!-- Ahora bien, podemos hacer uso de la información php a través de otro fichero o archivo, ojo fichero es lo mismo que archivo ojo -->

<!-- Esto se hace haciendo uso del atributo action ubicado en el formulario y en el atributo vamos a colocar el nombre del archivo php que posee la validación del formulario, en este caso sería "validacion.php" -->

</body>
</html>