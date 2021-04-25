<?php
    /* Este archivo Controllers.php es donde se hace la carga a los Controladores y el llamado hacia los modelos */

    class Controllers
    {
        public function __construct() //Método constructor
        {
            $this->views = new Views();
            $this->loadModel();
        }

        //Método para cargar los modelos
        public function loadModel()
        {
            //HomeModel.php
            $model = get_class($this)."Model";
            $routClass = "Models/".$model.".php";
            if(file_exists($routClass)){
                require_once($routClass);
                $this->model = new $model(); //Creamos la instancia
            }
        }
    }
?>