<!DOCTYPE html>
<html lang="es">

<head>

    <!--Meta Tags Requeridos-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Link estilos boostrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">
</head>
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
<?php
    require 'lib/conexion_mysql.php';

echo "<table class='table table-dark'> <tr><th> ID_Actividad </th> <th> Fecha </th><th> Tipo_práctica </th><th> Total_Horas </th><th> Actividad_realizada </th><th> Observaciones </th></tr>";


$query = $conexion_mysql->query ("SELECT * FROM actividades");
$nl = $query->num_rows;

for($x=0;$x<$nl;$x++){
    $actividad=$query->fetch_assoc();
    echo "<tr><td>" . $actividad["ID_Actividad"] ."</td> <td>". $actividad["Fecha"]."</td> <td>". $actividad["Tipo_práctica"]."</td><td>". $actividad["Total_Horas"]."</td><td>"
    .$actividad["Actividad_realizada"]."</td><td>". $actividad["Observaciones"]."</td>";
    echo "</tr>";
    
}
?>
</table>
<!-- Comentar al equipo si sige haciendo falta este boton con la adición del menú superior
    <a href="../html/index.html"><input type="button" class="btn btn-secondary btn-lg" value="Volver al menú"></a> -->
</body>
</html>