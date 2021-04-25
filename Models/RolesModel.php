<?php
    class RolesModel extends Mysql
    {   
        public $intIdrol;
        public $strRol;

        public function __construct()
        {
            parent::__construct();
        }

        //Método para seleccionar todos los roles
        public function selectRoles()
        {
            //Extrae Roles
            $sql = "SELECT * FROM rol ";
            $request = $this->select_all($sql);
            return $request;
        }

        //Método para actualizar un solo rol
        public function selectRol(int $idrol)
        {
            //Buscar Rol
            $this->intIdrol = $idrol;
            $sql = "SELECT * FROM rol WHERE idrol = $this->intIdrol";
            $request = $this->select($sql);
            return $request;
        }

        //Método para insertar roles
        public function insertRol(string $rol)
        {
            $return = "";
            $this->strRol = $rol;

            //Consultamos si existe ese rol
            $sql = "SELECT * FROM rol WHERE nombre = '{$this->strRol}'";
            $request = $this->select_all($sql);

            //Validamos si ya existe ese rol
            if(empty($request)) //si el $request es vacio quiere decir que no encontro ningun registro
            {
                $query_insert = "INSERT INTO rol(nombre) VALUES(?)"; //Creamos una variable y ehjecutamos el query
                $arrData = array($this->strRol);
                $request_insert = $this->insert($query_insert, $arrData);
                $return = $request_insert;
            } else {
                $return = "exist";
            }
            return $return;
        }

        public function updateRol(int $idrol, string $rol)
        {
            $this->intIdrol = $idrol;
            $this->strRol = $rol;

            $sql = "SELECT * FROM rol WHERE nombre = '$this->strRol' AND idrol != $this->intIdrol";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$sql = "UPDATE rol SET nombre = ? WHERE idrol = $this->intIdrol";
				$arrData = array($this->strRol);
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
		    return $request;
        }

        public function deleteRol(int $idrol)
		{
			$this->intIdrol = $idrol;
			$sql = "SELECT * FROM persona WHERE rolid  = $this->intIdrol";
			$request = $this->select_all($sql);
			if(empty($request))
			{
				$sql = "UPDATE rol SET nombre = ? WHERE idrol = $this->intIdrol ";
				$arrData = array(0);
				$request = $this->update($sql,$arrData);
				if($request)
				{
					$request = 'ok';	
				}else{
					$request = 'error';
				}
			}else{
				$request = 'exist';
			}
			return $request;
		}
    }
?>