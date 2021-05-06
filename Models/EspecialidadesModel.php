<?php
    class EspecialidadesModel extends Mysql
    {
        public $intIdespecialidad;
		public $strEspecialidad;
		public $intEstado;

        public function __construct()
        {
            parent::__construct();
        }

        public function selectEspecialidades()
		{
			//EXTRAE ESPECIALIDADES
			$sql = "SELECT * FROM especialidad WHERE estado = 1";
			$request = $this->select_all($sql);
			return $request;
		}
    }
?>