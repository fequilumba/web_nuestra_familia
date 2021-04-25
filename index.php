<?php
    require_once ("Config/Config.php"); //Para hacer uso de las variables del archivo Config.php
    require_once ("Helpers/Helpers.php"); //en este archivo vamos a necesitar algunos datos de mi archivo Config.php
    

    $url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
    $arrUrl = explode("/", $url);
    $controller = $arrUrl[0]; //la posicion 0 va a ser el controlador.
    $method = $arrUrl[0]; //colocamos el método a la misma posición 0
    $params = "";

    if(!empty($arrUrl[1])) //Si existe la posicion 1 del array vamos a validar si esaposicion es diferente de vacio
    {
        if($arrUrl[1] != "") // Si la posicion 1 que corresponde al metodo es diferente de vacio quiere decir que si trae algun dato
        {
            $method = $arrUrl[1]; //la variable metodo va a ser igual a la posicion 1
        }
    }

    if(!empty($arrUrl[2])) //Si existe la posicion 2 si vienen parámetros
    {
        if($arrUrl[2] != "") // Si la posicion 2 del array es diferente de vacio entonces quiere decir que vienen parámetros
        {
            for($i=2; $i < count($arrUrl); $i++){
                $params .= $arrUrl[$i].',';
            }
            $params = trim($params, ','); //trim remueve el ultimo carácter de una cadena
        }
    }

    require_once("Libraries/Core/Autoload.php");
    require_once("Libraries/Core/Load.php");
?>