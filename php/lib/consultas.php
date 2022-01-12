<?php
	include 'DB.php';
	
	class consultas extends DB{
		function __construct(){
			parent::__construct();
		}

		// nuevoProfesor.php
		public function nuevoProfesor($nombre, $ape1, $ape2, $contra, $correo){
			$sql="INSERT INTO profesor (Nombre, Apellido1, Apellido2, Contraseña, Email) VALUES ('".$nombre."', '".$ape1."', '".$ape2."', '".$contra."', '".$correo."')";
		    $this->realizarConsulta($sql);
  		}

		// Aquí podeis añadir más funciones a la base de datos
	}
?>