<?php
    /* function dameNombre(){

        $nombre="María";

    } */
    function dameNombre(){
        global $nombre;/* Esta línea de código permite el uso de la siguiente variable de forma global */

        $nombre="El nombre es " . $nombre;/* Esto sirve para hacer el ejemplo del uso de variables superglobales  */

    }

    /* Este es el famoso ejemplo de las variables super globales */
?>