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

echo "<table class='table' border=1 align='center'> <tr><th> ID_Alumno </th> <th> Nombre </th><th> Apellido1 </th><th> Apellido2 </th><th> DNI </th><th> Fecha_Nacimiento </th><th> Email </th>
<th> Telefono </th><th> Empresa </th><th> Tutor </th><th> NºHoras_Dual </th><th> NºHoras_FCT </th><th> Observaciones </th></tr>";


$query = $conexion_mysql->query ("SELECT * FROM alumno");
$nl = $query->num_rows;

for($x=0;$x<$nl;$x++){
    $alumno=$query->fetch_assoc();
    echo "<tr><td>" . $alumno["ID_Alumno"] ."</td> <td>". $alumno["Nombre"]."</td> <td>". $alumno["Apellido1"]."</td><td>". $alumno["Apellido2"]."</td><td>". $alumno["DNI"]."</td><td>"
    . $alumno["Fecha_Nacimiento"]."</td><td>". $alumno["Email"]."</td><td>". $alumno["Telefono"]."</td><td>". $alumno["Empresa"]."</td><td>". $alumno["Tutor"]."</td>
    <td>". $alumno["NºHoras_Dual"]."</td><td>". $alumno["NºHoras_FCT"]."</td><td>". $alumno["Observaciones"]."</td>";
    echo "</tr>";   
}
?>
<a href="../html/index.html"><input type="button" class="btn btn-secondary btn-lg" value="Volver al menú"></a>
