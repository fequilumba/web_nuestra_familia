<?php

    class Usuarios extends Controllers{
        public function __construct()
        {
            parent::__construct(); //Ejecutamos el método constructor de la clase controllers que estamos heredando
        }

        public function Usuarios()
        {
            $data['page_tag'] = "Usuarios";
            $data['page_title'] = "USUARIOS <small>Hospital NF</small>";
            $data['page_name'] = "usuarios";
            $this->views->getView($this, "usuarios", $data);
        }

        public function setUsuario(){
            if($_POST){
                if(empty($_POST['txtIdentificacion']) || empty($_POST['txtNombre']) || empty($_POST['txtApellido']) || empty($_POST['txtEmail']) || empty($_POST['intTelefono']) || empty($_POST['txtDireccion']) || empty($_POST['txtCiudad']) || empty($_POST['fNacimiento']) || empty($_POST['listGenero']) || empty($_POST['listEstado']))
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				} else {
					
					$strIdentificacion = strClean($_POST['txtIdentificacion']);
					$strNombre = ucwords(strClean($_POST['txtNombre']));
					$strApellido = ucwords(strClean($_POST['txtApellido']));
					$strEmail = strtolower(strClean($_POST['txtEmail']));
                    $intTelefono = intval(strClean($_POST['txtTelefono']));
					$strDireccion = ucwords(strClean($_POST['txtDireccion']));
                    $strCiudad = ucwords(strClean($_POST['txtCiudad']));
                    $dateFechaNacimiento = date(strClean($_POST['fNacimiento']));
                    $strGenero = strClean($_POST['listGenero']);
                    $intEstado = intval(strClean($_POST['listEstado']));
					
					
					$request_user = $this->model->insertUsuario($strIdentificacion,
																$strNombre, 
										    					$strApellido, 
																$strEmail,
                                                                $intTelefono, 
																$strDireccion,
                                                                $strCiudad,
                                                                $dateFechaNacimiento,
                                                                $strGenero,
                                                                $intEstado );
						
					
					if($request_user > 0 )
					{
						$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
                    }else if($request_user == 'exist'){
						$arrResponse = array('status' => false, 'msg' => '¡Atención! el email o la identificación ya existe, ingrese otro.');		
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            }
            die();
        }
    }
?>