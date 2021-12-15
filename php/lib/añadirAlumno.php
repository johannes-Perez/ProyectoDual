<?php

error_reporting(0);
    /*CONEXION*/
    $servername = "localhost";
    $database = "proyectodual";
    $username = "root";
    $password = "";
    $port=3307;
    $conn = mysqli_connect($servername, $username, $password, $database,$port);

    /*campos a rellenar*/
    $ID=$_GET['ID'];
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
        $query="insert into alumnos(ID_Alumno,Nombre,Apellido1,Apellido2,Contraseña,DNI,Fecha_Nacimiento,Email,Telefono,Empresa,Tutor,NºHoras_Dual,NºHoras_FCT,Observaciones)values('".$ID."','".$nombre."','".$apellido1."','".$apellido2."','".$contraseña."','".$DNI."','".$fnacimineto."','".$email."','".$telefono."','".$empresa."','".$tutor."','".$horasdual."','".$horasfct."','".$observaciones."')";
        mysqli_query($conn,$query);
        header("location:index.php");

    }
    ?>