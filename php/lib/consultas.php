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

		// nuevoAlumno.php sin observaciones
		public function nuevoAlumnoSin($nombre, $ape1, $ape2, $contra, $dni, $fecha, $correo, $tel, $empresa, $tutor, $ndual, $nfct){
			$sql="INSERT INTO alumno (Nombre,Apellido1,Apellido2,Contraseña,DNI,Fecha_Nacimiento,Email,Telefono,Empresa,Tutor,NºHoras_Dual,NºHoras_FCT) VALUES ('".$nombre."','".$ape1."','".$ape2."','".$contra."','".$dni."','".$fecha."','".$correo."',".$tel.",'".$empresa."','".$tutor."',".$ndual.",".$nfct.")";
		    $this->realizarConsulta($sql);
  		}

		// nuevoAlumno.php con observaciones
		public function nuevoAlumnoCon($nombre, $ape1, $ape2, $contra, $dni, $fecha, $correo, $tel, $empresa, $tutor, $ndual, $nfct, $obs){
			$sql="INSERT INTO alumno (Nombre,Apellido1,Apellido2,Contraseña,DNI,Fecha_Nacimiento,Email,Telefono,Empresa,Tutor,NºHoras_Dual,NºHoras_FCT,Observaciones) VALUES ('".$nombre."','".$ape1."','".$ape2."','".$contra."','".$dni."','".$fecha."','".$correo."',".$tel.",'".$empresa."','".$tutor."',".$ndual.",".$nfct.",'".$obs."')";
		    $this->realizarConsulta($sql);
  		}

		// nuevaEmpresa.php sin observaciones
		public function nuevaEmpresaSin($nombre, $tel, $correo, $respon){
			$sql="INSERT INTO empresa (Nombre_Empresa,Telefono,Email,Responsable) VALUES ('".$nombre."', ".$tel.", '".$correo."', '".$respon."')";
		    $this->realizarConsulta($sql);
  		}

		// nuevaEmpresa.php con observaciones
		public function nuevaEmpresaCon($nombre, $tel, $correo, $respon, $obs){
			$sql="INSERT INTO empresa (Nombre_Empresa,Telefono,Email,Responsable,Observaciones) VALUES ('".$nombre."', ".$tel.", '".$correo."', '".$respon."','".$obs."')";
		    $this->realizarConsulta($sql);
  		}

		// nuevaActividad.php sin observaciones
		public function nuevaActividadSin($fecha, $tipo, $horas, $act){
			$sql="INSERT INTO actividades (Fecha, Tipo_práctica, Total_Horas, Actividad_realizada) VALUES ('".$fecha."', '".$tipo."', ".$horas.", '".$act."')";
		    $this->realizarConsulta($sql);
  		}

		// nuevaActividad.php con observaciones
		public function nuevaActividadCon($fecha, $tipo, $horas, $act, $obs){
			$sql="INSERT INTO actividades (Fecha, Tipo_práctica, Total_Horas, Actividad_realizada, Observaciones) VALUES ('".$fecha."', '".$tipo."', ".$horas.", '".$act."','".$obs."')";
		    $this->realizarConsulta($sql);
  		}

		//mostrar_alumno.php
		public function mostraralumno(){ 
			$sql="SELECT * FROM alumno";
			$resultado =$this->realizarConsulta($sql);
			if ($resultado!=null){
				$tabla=[];
				while($fila=$resultado->fetch_assoc()){
					$tabla[]=$fila;
				}
					return $tabla;
				}else{
					return null;
			}
		}

		//mostrar profesor.php

		public function mostrarprofesor(){
			$sql="SELECT * FROM profesor";
			$resultado =$this->realizarConsulta($sql);
			if ($resultado!=null){
				$tabla=[];
				while($fila=$resultado->fetch_assoc()){
					$tabla[]=$fila;
				}
					return $tabla;
				}else{
					return null;
			}
		}

	//mostrar empresa.php

	public function mostrarempresa(){
		$sql="SELECT * FROM empresa";
		$resultado =$this->realizarConsulta($sql);
		if ($resultado!=null){
			$tabla=[];
			while($fila=$resultado->fetch_assoc()){
				$tabla[]=$fila;
			}
				return $tabla;
			}else{
				return null;
		}
	}

	//mostrar actividad.php

	public function mostraractividad(){
		$sql="SELECT * FROM actividades";
		$resultado =$this->realizarConsulta($sql);
		if ($resultado!=null){
			$tabla=[];
			while($fila=$resultado->fetch_assoc()){
				$tabla[]=$fila;
			}
				return $tabla;
			}else{
				return null;
		}
	}

	// login.php para profesores
	public function loginProfesor($nombre){
		$sql="SELECT * FROM profesor where Nombre='".$nombre."'";
		$resultado =$this->realizarConsulta($sql);
		if ($resultado!=null){
			$tabla=[];
			while($fila=$resultado->fetch_assoc()){
				$tabla[]=$fila;
			}
				return $tabla;
			}else{
				return null;
		}
	}

	// login.php para alumnos
	public function loginAlumno($nombre){
		$sql="SELECT * FROM alumno where Nombre='".$nombre."'";
		$resultado =$this->realizarConsulta($sql);
		if ($resultado!=null){
			$tabla=[];
			while($fila=$resultado->fetch_assoc()){
				$tabla[]=$fila;
			}
				return $tabla;
			}else{
				return null;
		}
	}

	}
?>