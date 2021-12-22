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

/*error_reporting(0);*/
    /*CONEXION*/
    require 'lib/conexion_mysql.php';


    /*campos a rellenar*/
    $nombre=$_GET['nombre'];
    $apellido1=$_GET['apellido1'];
    $apellido2=$_GET['apellido2'];
    $contraseña=$_GET['contraseña'];
    $DNI=$_GET['DNI'];
    $fnacimineto=$_GET['Fnacimineto'];
    $email=$_GET['email'];
    $telefono=$_GET['telefono'];
    $empresa=$_GET['empresa'];
    $tutor=$_GET['tutor'];
    $horasdual=$_GET['horas_dual'];
    $horasfct=$_GET['horas_fct'];
    $observaciones=$_GET['observaciones'];

    if ($nombre && $ID !=null){
        $query="insert into alumnos(Nombre,Apellido1,Apellido2,Contraseña,DNI,Fecha_Nacimiento,Email,Telefono,Empresa,Tutor,NºHoras_Dual,NºHoras_FCT,Observaciones)values('".$ID."','".$nombre."','".$apellido1."','".$apellido2."','".$contraseña."','".$DNI."','".$fnacimineto."','".$email."','".$telefono."','".$empresa."','".$tutor."','".$horasdual."','".$horasfct."','".$observaciones."')";
        mysqli_query($conexion_mysql,$query);
        header("location:../html/index.html");

    }
    ?>