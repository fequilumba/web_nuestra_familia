<?php 

	class UsuariosModel extends Mysql
	{
        private $intIdUsuario;
		private $strIdentificacion;
		private $strNombre;
		private $strApellido;
		private $strEmail;
        private $intTelefono;
        private $strDireccion;
        private $srtCiudad;
        private $dateFechaNacimiento;
        private $strGenero;
        private $intEstado;
    
        public function __construct()
		{
			parent::__construct();
		}

        public function insertUsuario(string $identificacion, string $nombre, string $apellido,string $email, int $telefono,string $direccion, string $ciudad,date $fechaNacimiento,string $genero, int $estado){

			$this->strIdentificacion = $identificacion;
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
            $this->strEmail = $email;
			$this->intTelefono = $telefono;
			$this->strDireccion = $direccion;
            $this->srtCiudad = $ciudad;
            $this->dateFechaNacimiento = $fechaNacimiento;
            $this->strGenero = $genero;
            $this->intEstado = $estado;

			$return = 0;

			if(empty($request))
			{
				$query_insert  = "INSERT INTO persona(cedula,nombres,apellidos,email,telefono,direccion,ciudad_residencia,fecha_nacimiento,genero,estado) 
								  VALUES(?,?,?,?,?,?,?,?,?,?)";
	        	$arrData = array($this->strIdentificacion,
        						$this->strNombre,
        						$this->strApellido,
                                $this->strEmail,
        						$this->intTelefono,
        						$this->strDireccion,
                                $this->srtCiudad,
                                $this->dateFechaNacimiento,
        						$this->strGenero,
        						$this->intEstado);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
	        return $return;
		}
    }
?>