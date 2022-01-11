<?php
    // Falta Comprobar que sea un profesor el que accede a esta página (más tarde)
    
    require 'lib/conexion_mysql.php';

    if ($conexion_mysql->connect_errno) {
        echo "Error: (".$conexion_mysql->connect_errno.")".$conexion_mysql->connect_error;
    }
    else {
        
        // depende de si se rellena el textarea de observaciones hace una consulta u otra
        if (empty($_POST["obs"])){
            $codigo_sql = "INSERT INTO empresa (Nombre_Empresa,Telefono,Email,Responsable) VALUES ('".$_POST["nom"]."', ".$_POST["tel"].", '".$_POST["ema"]."', '".$_POST["res"]."')";
        }
        else {
            $codigo_sql = "INSERT INTO empresa (Nombre_Empresa,Telefono,Email,Responsable,Observaciones) VALUES ('".$_POST["nom"]."', ".$_POST["tel"].", '".$_POST["ema"]."', '".$_POST["res"]."', '".$_POST["obs"]."')";
        }

        mysqli_query($conexion_mysql, $codigo_sql);
        
        header("Location:../html/añadir_empresa.html");
    }
?>