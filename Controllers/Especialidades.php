<?php

    class Especialidades extends Controllers{
        public function __construct()
        {
            parent::__construct(); //Ejecutamos el método constructor de la clase controllers que estamos heredando
        }

        public function especialidades()
        {
            $data['page_tag'] = "Especialidades - Hospital Nuestra Familia";
            $data['page_title'] = "Especialidades <small>Hospital NF</small>";
            $data['page_name'] = "especialidades";            
            $this->views->getView($this, "especialidades", $data);
        }

        public function getEspecialidades()
		{
			$arrData = $this->model->selectEspecialidades();

			for ($i=0; $i < count($arrData); $i++) {

				if($arrData[$i]['estado'] == 1)
				{
					$arrData[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
				}else{
					$arrData[$i]['estado'] = '<span class="badge badge-danger">Inactivo</span>';
				}

				$arrData[$i]['options'] = '<div class="text-center">
				    <button class="btn btn-primary btn-sm btnEditEspecialidad" rl="'.$arrData[$i]['idespecialidad'].'" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				    <button class="btn btn-danger btn-sm btnDelEspecialidad" rl="'.$arrData[$i]['idespecialidad'].'" title="Eliminar"><i class="far fa-trash-alt"></i></button>
				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}
    }
?>