<?php

    class MisionVision extends Controllers{
        public function __construct()
        {
            parent::__construct(); //Ejecutamos el método constructor de la clase controllers que estamos heredando
        }

        public function misionVision()
        {
            $data['page_id'] = 4;
            $data['page_tag'] = "MisionVision - HNF";
            $data['page_title'] = "MisionVision - HNF";
            $data['page_name'] = "misionVision";            
            $this->views->getView($this, "misionVision", $data);
        }
    }
?>