<?php

    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct(); //Ejecutamos el método constructor de la clase controllers que estamos heredando
        }

        public function home()
        {
            $data['page_id'] = 1;
            $data['page_tag'] = "Home";
            $data['page_title'] = "Página principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem ipsum amet, consectetur adipisicing ali. Et, quis. Perspiciatis repellat.";
            $this->views->getView($this, "home", $data);
        }
    }
?>