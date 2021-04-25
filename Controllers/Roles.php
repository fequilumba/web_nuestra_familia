<?php

    class Roles extends Controllers{
        public function __construct()
        {
            parent::__construct(); //Ejecutamos el método constructor de la clase controllers que estamos heredando
        }

        public function Roles()
        {
            $data['page_id'] = 5;
            $data['page_tag'] = "Roles Usuario";
            $data['page_name'] = "rol_usuario";            
            $data['page_title'] = "Roles Usuario <small> HNF</small>";
            $this->views->getView($this, "roles", $data);
        }

        //Método para obtener todos los roles
        public function getRoles() //Se utiliza get cuando obtenemos consultas
        {
            $arrData = $this->model->selectRoles(); //
            
            for($i=0; $i < count($arrData); $i++){
                $arrData[$i]['options'] = '<div class="text-center">
                    <button class="btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['idrol'].'" title="Editar"> <i class="fas fa-pencil-alt"></i></button>
                    <button class="btn btn-danger btn-sm btnDelRol" rl="'.$arrData[$i]['idrol'].'" title="Eliminar"> <i class="far fa-trash-alt"></i></button>
                </div>';
            }
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
            die();
        }

        //Método para extraer todos los roles para del modal nuevo usuario
        public function getSelectRoles()
		{
			$htmlOptions = "";
			$arrData = $this->model->selectRoles();
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					
					$htmlOptions .= '<option value="'.$arrData[$i]['idrol'].'">'.$arrData[$i]['nombre'].'</option>';
					
				}
			}
			echo $htmlOptions;
			die();		
		}

        //Método para extraer un rol
        public function getRol(int $idrol) //Se utiliza get cuando obtenemos consultas
		{
			$intIdrol = intval(strClean($idrol));
			if($intIdrol > 0)
			{
				$arrData = $this->model->selectRol($intIdrol);
				if(empty($arrData))
				{
					$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
				}else{
					$arrResponse = array('status' => true, 'data' => $arrData);
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

        //Método para crear un rol envia datos de setRol - con toda esta informacion ya podemos almacenar un nuevo Rol
        public function setRol(){
            // Creamos variables para poder almacenar los datos que estamos enviando
            $intIdrol = intval($_POST['idRol']); //Convertimos en entero el idRol que vayamos a enviar
            $strRol =  strClean($_POST['txtNombre']);

            if($intIdrol == 0)
            {
                //Crear
                $request_rol = $this->model->insertRol($strRol);
                $option = 1;
            }else {
                //Actualizar
                $request_rol = $this->model->updateRol($intIdrol, $strRol);
                $option = 2;
            }

            if($request_rol > 0)
            {
                if($option == 1)
                {
                    $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
                }else {
                    $arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
                }
            }else if($request_rol == 'exist'){
                $arrResponse = array('status' => false, 'msg' => '¡Atención! El Rol ya existe.');
            } else {
                $arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
            }
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            die(); // die lo que hace es detener el proceso del método setRol
        }

        public function delRol()
		{
			if($_POST){
				$intIdrol = intval($_POST['idrol']);
				$requestDelete = $this->model->deleteRol($intIdrol);
				if($requestDelete == 'ok')
				{
					$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el Rol');
				}else if($requestDelete == 'exist'){
					$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar un Rol asociado a usuarios.');
				}else{
					$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el Rol.');
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}
    }
?>