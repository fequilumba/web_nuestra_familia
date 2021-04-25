<?php
    spl_autoload_register(function($class){ //Función para cargar las clases de forma automática
        if(file_exists("Libraries/".'Core/'.$class.".php")){
            require_once("Libraries/".'Core/'.$class.".php");
        }
    });
?>