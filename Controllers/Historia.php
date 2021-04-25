<?php

    class Historia extends Controllers{
        public function __construct()
        {
            parent::__construct(); //Ejecutamos el método constructor de la clase controllers que estamos heredando
        }

        public function historia()
        {
            $data['page_id'] = 3;
            $data['page_tag'] = "Historia - HNF";
            $data['page_title'] = "Historia - HNF";
            $data['page_name'] = "historia";            
            $this->views->getView($this, "historia", $data);
        }
    }
?>