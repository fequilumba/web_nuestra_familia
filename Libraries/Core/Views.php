<?php
    /* Este archivo Views.php hace el llamado a las vistas */
    
    class Views
    {
        function getView($controller, $view, $data="")
        {
            $controller = get_class($controller);
            if($controller == "Home"){
                $view = "Views/".$view.".php";  // armamos la ruta para encontrar el directorio
            } else {
                $view = "Views/".$controller."/".$view.".php";
            }
            require_once ($view);
        }
    }
?>