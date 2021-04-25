<?php

    class Login extends Controllers{
        public function __construct()
        {
            parent::__construct(); //Ejecutamos el método constructor de la clase controllers que estamos heredando
        }

        public function login()
        {
            $data['page_tag'] = "Login HNF";
            $data['page_title'] = "Login";
            $data['page_name'] = "login";
            $data['page_functions_js'] = "functions_login.js";
            $this->views->getView($this, "login", $data);
        }
    }
?>