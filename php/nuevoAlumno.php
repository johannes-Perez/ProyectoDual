<?php

    require 'lib/conexion_mysql.php';

    if ($conexion_mysql->connect_errno) {
        echo "Error: (".$conexion_mysql->connect_errno.")".$conexion_mysql->connect_error;
    }
    else {
        // depende de si se rellena el textarea de observaciones hace una consulta u otra
        if (empty($_POST["obs"])){
            $codigo_sql = "INSERT INTO alumno (Nombre,Apellido1,Apellido2,Contraseña,DNI,Fecha_Nacimiento,Email,Telefono,Empresa,Tutor,NºHoras_Dual,NºHoras_FCT) VALUES ('".$_POST["nom"]."','".$_POST["ape1"]."','".$_POST["ape2"]."','".$_POST["con"]."','".$_POST["dni"]."','".$_POST["fecha"]."','".$_POST["ema"]."',".$_POST["tel"].",'".$_POST["emp"]."','".$_POST["tut"]."',".$_POST["hdual"].",".$_POST["hfct"].")";
        }
        else {
            $codigo_sql = "INSERT INTO alumno (Nombre,Apellido1,Apellido2,Contraseña,DNI,Fecha_Nacimiento,Email,Telefono,Empresa,Tutor,NºHoras_Dual,NºHoras_FCT,Observaciones) VALUES ('".$_POST["nom"]."','".$_POST["ape1"]."','".$_POST["ape2"]."','".$_POST["con"]."','".$_POST["dni"]."','".$_POST["fecha"]."','".$_POST["ema"]."',".$_POST["tel"].",'".$_POST["emp"]."','".$_POST["tut"]."',".$_POST["hdual"].",".$_POST["hfct"].",'".$_POST["obs"]."')";
        }

        mysqli_query($conexion_mysql, $codigo_sql);
        
        header("Location:mostrar_alumno.php");

    }

    
?>