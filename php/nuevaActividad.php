<?php
    
    include "lib/consultas.php";
        
    $BaseDatos=new Consultas();
 
    // Dependiendo de si se rellena el textarea de observaciones
    if (empty($_POST["obs"])){
        $BaseDatos->nuevaActividadSin($_POST["fecha"], $_POST["tipo"], $_POST["horas"], $_POST["act"]);
    }
    else {
        $BaseDatos->nuevaActividadCon($_POST["fecha"], $_POST["tipo"], $_POST["horas"], $_POST["act"], $_POST["obs"]);
    }

    // Tener en cuenta lo siguiente para mas tarde
    //$codigo_sql2 = "INSERT INTO alumno_actividad VALUES (1,1)";
    //mysqli_query($conexion_mysql, $codigo_sql2);
    
    header("Location:mostrar_actividad.php");
    
?>