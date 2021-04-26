<?php
    class Mysql extends Conexion  //clase Mysql que hereda de la clase Conexión
    {
        private $conexion;
        private $strquery;
        private $arrValues;

        function __construct()
        {
            $this->conexion = new Conexion();  // instancia del objeto conexion
            $this->conexion = $this->conexion->conect();
        }

        //Método para insertar un registro
        public function insert(string $query, array $arrValues)
        {
            $this->strquery = $query;
            $this->arrValues = $arrValues;
            $insert = $this->conexion->prepare($this->strquery);
            $resInsert = $insert->execute($this->arrValues);

            if($resInsert)
            {
                $lastInsert = $this->conexion->lastInsertId();
            } else {
                $lastInsert = 0;
            }
            return $lastInsert;
        }

        //Método para buscar un registro
        public function select(string $query)
        {
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        //Método para devolver todos los registros
        public function select_all(string $query)
		{
			$this->strquery = $query;
        	$result = $this->conexion->prepare($this->strquery);
			$result->execute();
        	$data = $result->fetchall(PDO::FETCH_ASSOC);
        	return $data;
		}

        //Método para actualizar rgistros
        public function update(string $query, array $arrValues)
        {
            $this->strquery = $query;
            $this->arrValues = $arrValues;
            $update = $this->conexion->prepare($this->strquery);
            $resExecute = $update->execute($this->arrValues);
            return $resExecute;
        }

        //Método para eliminar registros
        public function delete(string $query)
		{
			$this->strquery = $query;
        	$result = $this->conexion->prepare($this->strquery);
			$del = $result->execute();
        	return $del;
		}
        //Función para ejecutar consulta retornar un Id
        function ejecutarConsulta_retornarID(string $query){

            $this->strquery = $query;
            $result = $this->conexion->query($this->strquery);
            $id=$result->insert_id;
            return $id;
        }
    }
?>