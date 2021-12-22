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
    // Comprobar que sea al admin el que accede a esta página
    
    require 'lib/conexion_mysql.php';

    if ($conexion_mysql->connect_errno) {
        echo "Error: (".$conexion_mysql->connect_errno.")".$conexion_mysql->connect_error;
    }
    else {

        $codigo_sql = "INSERT INTO profesor (Nombre, Apellido1, Apellido2, Contraseña, Email) VALUES ('".$_POST["nombre"]."', '".$_POST["ape1"]."', '".$_POST["ape2"]."', '".$_POST["contra"]."', '".$_POST["correo"]."')";
        
        mysqli_query($conexion_mysql, $codigo_sql);
        
        header("Location:../html/formularioProfesor.html");
    }
?>