<!DOCTYPE html>
<html lang="es">

<head>

    <!--Meta Tags Requeridos-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Link estilos boostrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">
    <body>
           
<div class="encabezado">
       <img class="logo" alt="logo" src="../img/CESUR-web.png">
    </div>

    <div  class="menu">
    <div id="contenido">
                <a class="hoverAzul"href="../html/index.html">Home</a>
                <a class="hoverAmarillo" href="mostrar_profesor.php">mostrar profesor</a>
                <a class="hoverAzul"href="mostrar_alumno.php">mostrar alumno</a>
                <a class="hoverAmarillo" href="mostrar_empresa.php">mostrar empresa</a>
          </div>
    </div>
    </body>
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