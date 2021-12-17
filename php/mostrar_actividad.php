<!DOCTYPE html>
<html lang="es">

<head>

    <!--Meta Tags Requeridos-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Link estilos boostrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">
<?php
    require 'lib/conexion_mysql.php';

echo "<table class='table' border=1 align='center'> <tr><th> ID_Actividad </th> <th> Fecha </th><th> Tipo_práctica </th><th> Total_Horas </th><th> Actividad_realizada </th><th> Observaciones </th></tr>";


$query = $conexion_mysql->query ("SELECT * FROM actividades");
$nl = $query->num_rows;

for($x=0;$x<$nl;$x++){
    $actividad=$query->fetch_assoc();
    echo "<tr><td>" . $actividad["ID_Actividad "] ."</td> <td>". $actividad["Fecha"]."</td> <td>". $actividad["Tipo_práctica"]."</td><td>". $actividad["Total_Horas"]."</td><td>"
    .$actividad["Actividad_realizada"]."</td><td>". $actividad["Observaciones"]."</td>";
    echo "</tr>";
    
}
?>
<a href="../html/index.html"><input type="button" class="btn btn-secondary btn-lg" value="Volver al menú"></a>
