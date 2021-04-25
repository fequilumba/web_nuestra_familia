<?php

    class Dashboard extends Controllers{
        public function __construct()
        {
            parent::__construct(); //Ejecutamos el método constructor de la clase controllers que estamos heredando
        }

        public function dashboard()
        {
            $data['page_id'] = 2;
            $data['page_tag'] = "Dashboard - Hospital Nuestra Familia";
            $data['page_title'] = "Dashboard - Hospital Nuestra Familia";
            $data['page_name'] = "dashboard";            
            $this->views->getView($this, "dashboard", $data);
        }
    }
?>